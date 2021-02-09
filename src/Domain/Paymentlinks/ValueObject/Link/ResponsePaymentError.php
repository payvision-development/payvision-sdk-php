<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\ValueObject\Link;

class ResponsePaymentError
{
    /**
     * @var int
     */
    private $code;

    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $detailedMessage;

    /**
     * ResponsePaymentError constructor.
     *
     * @param int $code
     * @param string $message
     * @param string $detailedMessage
     */
    public function __construct(
        int $code,
        string $message,
        string $detailedMessage = null
    ) {
        $this->code = $code;
        $this->message = $message;
        $this->detailedMessage = $detailedMessage;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return string|null
     */
    public function getDetailedMessage(): ?string
    {
        return $this->detailedMessage;
    }
}
