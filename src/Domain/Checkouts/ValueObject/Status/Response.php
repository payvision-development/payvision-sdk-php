<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\ValueObject\Status;

class Response
{
    const ABANDONED = 4;
    const PENDING = 2;
    const COMPLETED = 0;
    const INPUT_ERROR = -1;
    const UNEXPECTED_ERROR = -7;

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
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return ResponseHeader
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }
}
