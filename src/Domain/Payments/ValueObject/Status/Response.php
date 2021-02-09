<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Status;

class Response
{
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
