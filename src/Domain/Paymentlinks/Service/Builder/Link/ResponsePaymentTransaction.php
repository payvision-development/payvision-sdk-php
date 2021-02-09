<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
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
     * @return ResponsePaymentTransaction
     */
    public function setAmount(float $amount): ResponsePaymentTransaction
    {
        return $this->set('amount', $amount);
    }

    /**
     * @param int $brandId
     * @return ResponsePaymentTransaction
     */
    public function setBrandId(int $brandId): ResponsePaymentTransaction
    {
        return $this->set('brandId', $brandId);
    }

    /**
     * @param string $currencyCode
     * @return ResponsePaymentTransaction
     */
    public function setCurrencyCode(string $currencyCode): ResponsePaymentTransaction
    {
        return $this->set('currencyCode', $currencyCode);
    }

    /**
     * @param string $id
     * @return ResponsePaymentTransaction
     */
    public function setId(string $id): ResponsePaymentTransaction
    {
        return $this->set('id', $id);
    }

    /**
     * @param string $trackingCode
     * @return ResponsePaymentTransaction
     */
    public function setTrackingCode(string $trackingCode): ResponsePaymentTransaction
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
