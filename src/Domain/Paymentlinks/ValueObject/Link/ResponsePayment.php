<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\ValueObject\Link;

class ResponsePayment
{
    /**
     * @var ResponsePaymentBody
     */
    private $body;

    /**
     * @var string
     */
    private $description;

    /**
     * @var ResponsePaymentHeader
     */
    private $header;

    /**
     * @var int
     */
    private $result;

    /**
     * ResponsePayment constructor.
     *
     * @param ResponsePaymentBody $body
     * @param string $description
     * @param ResponsePaymentHeader $header
     * @param int $result
     */
    public function __construct(
        ResponsePaymentBody $body,
        string $description,
        ResponsePaymentHeader $header,
        int $result
    ) {
        $this->body = $body;
        $this->description = $description;
        $this->header = $header;
        $this->result = $result;
    }

    /**
     * @return ResponsePaymentBody
     */
    public function getBody(): ResponsePaymentBody
    {
        return $this->body;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return ResponsePaymentHeader
     */
    public function getHeader(): ResponsePaymentHeader
    {
        return $this->header;
    }

    /**
     * @return int
     */
    public function getResult(): int
    {
        return $this->result;
    }
}
