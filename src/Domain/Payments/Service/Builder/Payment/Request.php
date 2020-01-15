<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Payment;

use Payvision\SDK\Domain\Payments\ValueObject\Payment\Request as RequestObject;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\RequestBody;
use Payvision\SDK\Domain\Payments\ValueObject\Request\Header;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Request extends Basic
{
    /**
     * @return RequestObject
     */
    public function build(): RequestObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param string $action
     * @return self
     */
    public function setAction(string $action): self
    {
        return $this->set('action', $action);
    }

    /**
     * @param RequestBody $body
     * @return self
     */
    public function setBody(RequestBody $body): self
    {
        return $this->set('body', $body);
    }

    /**
     * @param Header $header
     * @return self
     */
    public function setHeader(Header $header): self
    {
        return $this->set('header', $header);
    }

    /**
     * @return RequestObject
     */
    protected function buildObject(): RequestObject
    {
        return new RequestObject(
            $this->get('action'),
            $this->get('body'),
            $this->get('header')
        );
    }
}
