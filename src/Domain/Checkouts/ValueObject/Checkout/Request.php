<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\ValueObject\Checkout;

use Payvision\SDK\Domain\Checkouts\ValueObject\Request\Header;

class Request
{
    /**
     * @var RequestBody
     */
    private $body;

    /**
     * @var Header
     */
    private $header;

    /**
     * Request constructor.
     *
     * @param RequestBody $body
     * @param Header $header
     */
    public function __construct(
        RequestBody $body,
        Header $header
    ) {
        $this->body = $body;
        $this->header = $header;
    }

    /**
     * @return RequestBody
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
