<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Refund;

class Response
{
    public const TIMEOUT = 4;
    public const PENDING_MERCHANT = 3;
    public const PENDING = 2;
    public const WAITING = 1;
    public const OK = 0;
    public const INPUT_ERROR = -1;
    public const FAILED = -2;
    public const FAILED_RETRY = -3;
    public const DECLINED = -4;
    public const DECLINED_RETRY = -5;
    public const SECURITY_ERROR = -6;
    public const INTERNAL_SERVER_ERROR = -7;
    public const BUSINESS_RULE_ERROR = -8;
    public const FRAUD = -9;
    public const CUSTOMER_PROCESSING_ERROR = -10;
    public const REFERRALS = -11;

    /**
     * @var ResponseBody
     */
    private $body;

    /**
     * @var string
     */
    private $description;

    /**
     * @var ResponseHeader
     */
    private $header;

    /**
     * @var int
     */
    private $result;

    /**
     * Response constructor.
     *
     * @param ResponseBody $body
     * @param string $description
     * @param ResponseHeader $header
     * @param int $result
     */
    public function __construct(
        ResponseBody $body,
        string $description,
        ResponseHeader $header,
        int $result
    ) {
        $this->body = $body;
        $this->description = $description;
        $this->header = $header;
        $this->result = $result;
    }

    /**
     * @return ResponseBody
     */
    public function getBody(): ResponseBody
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
     * @return ResponseHeader
     */
    public function getHeader(): ResponseHeader
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
