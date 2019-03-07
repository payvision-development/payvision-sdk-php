<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Request;

use Payvision\SDK\Domain\Payments\ValueObject\Request\Refund as RefundObject;
use Payvision\SDK\Domain\Payments\ValueObject\Refund\Body;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\Header;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Refund extends Basic
{
    public function build(): RefundObject
    {
        return $this->buildAndReset();
    }

    public function setBody(Body $body): self
    {
        return $this->set('body', $body);
    }

    public function setHeader(Header $header): self
    {
        return $this->set('header', $header);
    }

    protected function buildObject(): RefundObject
    {
        return new RefundObject(
            $this->get('body'),
            $this->get('header')
        );
    }
}
