<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\Service\Builder\Link;

use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\ResponsePaymentTransaction as ResponsePaymentTransactionObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponsePaymentTransaction extends Basic
{
    /**
     * @return ResponsePaymentTransactionObject
     */
    public function build(): ResponsePaymentTransactionObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param float $amount
     * @return self
     */
    public function setAmount(float $amount): self
    {
        return $this->set('amount', $amount);
    }

    /**
     * @param int $brandId
     * @return self
     */
    public function setBrandId(int $brandId): self
    {
        return $this->set('brandId', $brandId);
    }

    /**
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode(string $currencyCode): self
    {
        return $this->set('currencyCode', $currencyCode);
    }

    /**
     * @param string $id
     * @return self
     */
    public function setId(string $id): self
    {
        return $this->set('id', $id);
    }

    /**
     * @param string $trackingCode
     * @return self
     */
    public function setTrackingCode(string $trackingCode): self
    {
        return $this->set('trackingCode', $trackingCode);
    }

    /**
     * @return ResponsePaymentTransactionObject
     */
    protected function buildObject(): ResponsePaymentTransactionObject
    {
        return new ResponsePaymentTransactionObject(
            $this->get('amount'),
            $this->get('brandId'),
            $this->get('currencyCode'),
            $this->get('id'),
            $this->get('trackingCode')
        );
    }
}
