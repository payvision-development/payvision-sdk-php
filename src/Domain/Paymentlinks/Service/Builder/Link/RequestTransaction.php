<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\Service\Builder\Link;

use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\RequestTransaction as RequestTransactionObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class RequestTransaction extends Basic
{
    /**
     * @return RequestTransactionObject
     */
    public function build(): RequestTransactionObject
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
     * @param string $authorizationMode
     * @return self
     */
    public function setAuthorizationMode(string $authorizationMode): self
    {
        return $this->set('authorizationMode', $authorizationMode);
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
     * @param string $trackingCode
     * @return self
     */
    public function setTrackingCode(string $trackingCode): self
    {
        return $this->set('trackingCode', $trackingCode);
    }

    /**
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode(string $countryCode): self
    {
        return $this->set('countryCode', $countryCode);
    }

    /**
     * @param string $descriptor
     * @return self
     */
    public function setDescriptor(string $descriptor): self
    {
        return $this->set('descriptor', $descriptor);
    }

    /**
     * @param string $invoiceId
     * @return self
     */
    public function setInvoiceId(string $invoiceId): self
    {
        return $this->set('invoiceId', $invoiceId);
    }

    /**
     * @param int $storeId
     * @return self
     */
    public function setStoreId(int $storeId): self
    {
        return $this->set('storeId', $storeId);
    }

    /**
     * @param string $type
     * @return self
     */
    public function setType(string $type): self
    {
        return $this->set('type', $type);
    }

    /**
     * @return RequestTransactionObject
     */
    protected function buildObject(): RequestTransactionObject
    {
        return new RequestTransactionObject(
            $this->get('amount'),
            $this->get('authorizationMode'),
            $this->get('currencyCode'),
            $this->get('trackingCode'),
            $this->get('countryCode'),
            $this->get('descriptor'),
            $this->get('invoiceId'),
            $this->get('storeId'),
            $this->get('type')
        );
    }
}
