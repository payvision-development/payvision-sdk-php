<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\ValueObject\Link;

use Payvision\SDK\Domain\Paymentlinks\ValueObject\BasicResponseHeader;

class Response
{
    public const SUCCESS = 0;
    public const INPUT_ERROR = -1;
    public const BAD_REQUEST = -1;
    public const UNEXPECTED_ERROR = -7;

    /**
     * @var ResponseBody
     */
    private $body;

    /**
     * @var string
     */
    private $description;

    /**
     * @var BasicResponseHeader
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
     * @param BasicResponseHeader $header
     * @param int $result
     */
    public function __construct(
        ResponseBody $body,
        string $description,
        BasicResponseHeader $header,
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
     * @return BasicResponseHeader
     */
    public function getHeader(): BasicResponseHeader
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
