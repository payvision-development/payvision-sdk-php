<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Request;

use Payvision\SDK\Domain\Payments\ValueObject\Payment\Header;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\Body;

class Object
{
    const ACTION_PAYMENT = 'payment';
    const ACTION_AUTHORIZE = 'authorize';

    /**
     * @var Header
     */
    private $header;

    /**
     * @var Body
     */
    private $body;

    /**
     * @var string
     */
    private $action;

    /**
     * Object constructor.
     *
     * @param Header $header
     * @param Body $body
     * @param string $action
     */
    public function __construct(
        Header $header,
        Body $body,
        string $action = null
    ) {
        $this->header = $header;
        $this->body = $body;
        $this->action = $action;
    }

    /**
    * @return Header
    */
    public function getHeader()
    {
        return $this->header;
    }

    /**
    * @return Body
    */
    public function getBody()
    {
        return $this->body;
    }

    /**
    * @return string|null
    */
    public function getAction()
    {
        return $this->action;
    }
}
