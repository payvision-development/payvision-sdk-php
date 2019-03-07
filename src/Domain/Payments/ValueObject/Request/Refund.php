<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Request;

use Payvision\SDK\Domain\Payments\ValueObject\Refund\Body;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\Header;

class Refund
{
    /**
     * @var Body
     */
    private $body;

    /**
     * @var Header
     */
    private $header;

    /**
     * Refund constructor.
     *
     * @param Body $body
     * @param Header $header
     */
    public function __construct(
        Body $body,
        Header $header
    ) {
        $this->body = $body;
        $this->header = $header;
    }

    /**
    * @return Body
    */
    public function getBody()
    {
        return $this->body;
    }

    /**
    * @return Header
    */
    public function getHeader()
    {
        return $this->header;
    }
}
