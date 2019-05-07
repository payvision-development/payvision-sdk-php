<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Refund;

use Payvision\SDK\Domain\Payments\ValueObject\Refund\ResponseTransaction as ResponseTransactionObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponseTransaction extends Basic
{
    public function build(): ResponseTransactionObject
    {
        return $this->buildAndReset();
    }

    public function setAction(string $action): self
    {
        return $this->set('action', $action);
    }

    public function setAmount(float $amount): self
    {
        return $this->set('amount', $amount);
    }

    public function setCurrencyCode(string $currencyCode): self
    {
        return $this->set('currencyCode', $currencyCode);
    }

    public function setId(string $id): self
    {
        return $this->set('id', $id);
    }

    public function setParentId(string $parentId): self
    {
        return $this->set('parentId', $parentId);
    }

    public function setTrackingCode(string $trackingCode): self
    {
        return $this->set('trackingCode', $trackingCode);
    }

    public function setBrandId(int $brandId): self
    {
        return $this->set('brandId', $brandId);
    }

    public function setDescriptor(string $descriptor): self
    {
        return $this->set('descriptor', $descriptor);
    }

    protected function buildObject(): ResponseTransactionObject
    {
        return new ResponseTransactionObject(
            $this->get('action'),
            $this->get('amount'),
            $this->get('currencyCode'),
            $this->get('id'),
            $this->get('parentId'),
            $this->get('trackingCode'),
            $this->get('brandId'),
            $this->get('descriptor')
        );
    }
}
