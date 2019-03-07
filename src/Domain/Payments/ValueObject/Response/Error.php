<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Response;

class Error
{
    /**
     * @var ErrorBody
     */
    private $body;

    /**
     * @var string
     */
    private $description;

    /**
     * @var Header
     */
    private $header;

    /**
     * @var int
     */
    private $result;

    /**
     * Error constructor.
     *
     * @param ErrorBody $body
     * @param string $description
     * @param Header $header
     * @param int $result
     */
    public function __construct(
        ErrorBody $body,
        string $description,
        Header $header,
        int $result
    ) {
        $this->body = $body;
        $this->description = $description;
        $this->header = $header;
        $this->result = $result;
    }

    /**
    * @return ErrorBody
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
    * @return Header
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
