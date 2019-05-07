<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Refund;

use Payvision\SDK\Domain\Payments\ValueObject\Refund\Transaction as TransactionObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Transaction extends Basic
{
    public function build(): TransactionObject
    {
        return $this->buildAndReset();
    }

    public function setAmount(float $amount): self
    {
        return $this->set('amount', $amount);
    }

    public function setCurrencyCode(string $currencyCode): self
    {
        return $this->set('currencyCode', $currencyCode);
    }

    public function setTrackingcode(string $trackingcode): self
    {
        return $this->set('trackingcode', $trackingcode);
    }

    protected function buildObject(): TransactionObject
    {
        return new TransactionObject(
            $this->get('amount'),
            $this->get('currencyCode'),
            $this->get('trackingcode')
        );
    }
}
