<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Refund;

use Payvision\SDK\Domain\Payments\ValueObject\Response\Header;

class ResponseRequest
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
     * @var Header
     */
    private $header;

    /**
     * @var int
     */
    private $result;

    /**
     * ResponseRequest constructor.
     *
     * @param ResponseBody $body
     * @param string $description
     * @param Header $header
     * @param int $result
     */
    public function __construct(
        ResponseBody $body,
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
