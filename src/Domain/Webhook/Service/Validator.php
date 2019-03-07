<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Domain\Webhook\Service;

use Firebase\JWT\JWT;
use Firebase\JWT\SignatureInvalidException;
use Payvision\SDK\Exception\WebhookException;
use stdClass;

class Validator
{
    /**
     * @var stdClass|null
     */
    private $decoded;

    /**
     * @param string $eventSignature
     * @param string $secret
     * @param string $body
     * @return bool
     * @throws WebhookException
     */
    public function validateWebhook(string $eventSignature, string $secret, string $body): bool
    {
        if (!$this->validateJwt($eventSignature, $secret)) {
            throw new WebhookException(
                'webhook validation failed (Invalid Signature)',
                WebhookException::VALIDATION_FAILED
            );
        }

        if (!$this->validateCrc($body)) {
            throw new WebhookException(
                'webhook validation failed (Invalid Checksum)',
                WebhookException::VALIDATION_FAILED
            );
        }

        return true;
    }

    /**
     * @param string $body
     * @return bool
     * @throws WebhookException
     */
    private function validateCrc(string $body): bool
    {
        $string = \hex2bin(\hash('crc32b', $body));
        $bodyByteArray = \unpack('C*', $string);
        $str = '';

        foreach ($bodyByteArray as $byte) {
            $str .= \chr($byte);
        }

        $checksum = $this->base64UrlEncode(\strrev($str));

        return $checksum === $this->getCrc32();
    }

    private function base64UrlEncode(string $data): string
    {
        return \rtrim(\strtr(\base64_encode($data), '+/', '-_'), '=');
    }

    private function validateJwt(string $eventSignature, string $secret): bool
    {
        try {
            $this->decoded = JWT::decode($eventSignature, $secret, ['HS256']);
            return true;
        } catch (SignatureInvalidException $signatureInvalidException) {
            $this->decoded = null;
            return false;
        }
    }

    /**
     * @return string
     * @throws WebhookException
     */
    private function getCrc32(): string
    {
        if ($this->decoded === null) {
            throw new WebhookException('validate JWT first', WebhookException::JWT_NOT_VALIDATED);
        }

        if (!\property_exists($this->decoded, 'crc32')) {
            throw new WebhookException('Missing checksum', WebhookException::MISSING_CHECKSUM);
        }

        return $this->decoded->crc32;
    }
}
