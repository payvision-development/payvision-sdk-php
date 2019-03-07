<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Response;

use Payvision\SDK\Domain\Payments\ValueObject\Response\Transaction as TransactionObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Transaction extends Basic
{
    public function build(): TransactionObject
    {
        return $this->buildAndReset();
    }

    public function setAction(string $action): self
    {
        return $this->set('action', $action);
    }

    public function setId(string $id): self
    {
        return $this->set('id', $id);
    }

    public function setTrackingCode(string $trackingCode): self
    {
        return $this->set('trackingCode', $trackingCode);
    }

    public function setAmount(float $amount): self
    {
        return $this->set('amount', $amount);
    }

    public function setBrandId(int $brandId): self
    {
        return $this->set('brandId', $brandId);
    }

    public function setCurrencyCode(string $currencyCode): self
    {
        return $this->set('currencyCode', $currencyCode);
    }

    public function setDescriptor(string $descriptor): self
    {
        return $this->set('descriptor', $descriptor);
    }

    public function setParentId(string $parentId): self
    {
        return $this->set('parentId', $parentId);
    }

    protected function buildObject(): TransactionObject
    {
        return new TransactionObject(
            $this->get('action'),
            $this->get('id'),
            $this->get('trackingCode'),
            $this->get('amount'),
            $this->get('brandId'),
            $this->get('currencyCode'),
            $this->get('descriptor'),
            $this->get('parentId')
        );
    }
}
