<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 */

namespace Payvision\SDK\Application\Webhook\Service;

use Payvision\SDK\Application\Reflection\JsonToObject;
use Payvision\SDK\Domain\Payments\ValueObject\Cancel\ResponseRequest as CancelResponseRequest;
use Payvision\SDK\Domain\Payments\ValueObject\Capture\ResponseRequest as CaptureResponseRequest;
use Payvision\SDK\Domain\Payments\ValueObject\Refund\ResponseRequest as RefundResponseRequest;
use Payvision\SDK\Domain\Payments\ValueObject\Response\Error as ResponseError;
use Payvision\SDK\Domain\Payments\ValueObject\Response\Request as ResponseRequest;
use Payvision\SDK\Domain\Webhook\Service\EventDecorator;
use Payvision\SDK\Domain\Webhook\ValueObject\Event;
use Payvision\SDK\Exception\BuilderException;
use Payvision\SDK\Exception\WebhookException;
use ReflectionException;

class EventBuilder
{
    /**
     * @var JsonToObject
     */
    private $jsonToObject;

    /**
     * @var array|null
     */
    private $currentJson;

    public function __construct(
        JsonToObject $jsonToObject
    ) {
        $this->jsonToObject = $jsonToObject;
    }

    /**
     * @param string $body
     * @return Event
     * @throws BuilderException
     * @throws ReflectionException
     */
    public function generateEvent(string $body): Event
    {
        $this->currentJson = $this->getSanitizedJson($body);

        return $this->jsonToObject->build(
            Event::class,
            $this->currentJson,
            [
                'payload' => [$this, 'getType'],
            ]
        );
    }

    /**
     * @param string $body
     * @return EventDecorator
     * @throws BuilderException
     * @throws ReflectionException
     */
    public function generateDecoratedEvent(string $body): EventDecorator
    {
        return new EventDecorator($this->generateEvent($body));
    }

    /**
     * @return string
     * @throws WebhookException
     */
    public function getType(): string
    {
        // Type depends on payload
        if (\array_key_exists('error', $this->currentJson['payload']['body'])) {
            return ResponseError::class;
        }

        if (\array_key_exists('transaction', $this->currentJson['payload']['body'])) {
            $transaction = $this->currentJson['payload']['body']['transaction'];
            switch ($transaction['action']) {
                case 'cancel':
                    return CancelResponseRequest::class;
                case 'capture':
                    return CaptureResponseRequest::class;
                case 'authorize':
                case 'payment':
                    return ResponseRequest::class;
                case 'refund':
                    return RefundResponseRequest::class;
            }
        }

        throw new WebhookException('unknown payload', WebhookException::UNKNOWN_PAYLOAD);
    }

    /**
     * @param string $body
     * @return mixed
     */
    private function getSanitizedJson(string $body): array
    {
        $json = \json_decode($body, true);

        // Fix uppercase first character in JSON response:
        foreach ($json as $key => $value) {
            $json[\lcfirst($key)] = $value;
            unset($json[$key]);
        }

        return $json;
    }
}
