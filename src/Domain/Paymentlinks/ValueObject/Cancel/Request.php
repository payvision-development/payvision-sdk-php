<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\ValueObject\Cancel;

use Payvision\SDK\Domain\Paymentlinks\ValueObject\Request\Header;

class Request
{
    /**
     * @var Header
     */
    private $header;

    /**
     * Request constructor.
     *
     * @param Header $header
     */
    public function __construct(
        Header $header
    ) {
        $this->header = $header;
    }

    /**
     * @return Header
     */
    public function getHeader()
    {
        return $this->header;
    }
}
