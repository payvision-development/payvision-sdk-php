<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Payment;

use Payvision\SDK\Domain\Payments\ValueObject\Payment\RequestTransaction as RequestTransactionObject;
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
     * @param string $trackingCode
     * @return self
     */
    public function setTrackingCode(string $trackingCode): self
    {
        return $this->set('trackingCode', $trackingCode);
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
     * @param string $returnUrl
     * @return self
     */
    public function setReturnUrl(string $returnUrl): self
    {
        return $this->set('returnUrl', $returnUrl);
    }

    /**
     * @param bool $tokenize
     * @return self
     */
    public function setTokenize(bool $tokenize): self
    {
        return $this->set('tokenize', $tokenize);
    }

    /**
     * @param string $token
     * @return self
     */
    public function setToken(string $token): self
    {
        return $this->set('token', $token);
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
     * @param string $source
     * @return self
     */
    public function setSource(string $source): self
    {
        return $this->set('source', $source);
    }

    /**
     * @param int $payTimeout
     * @return self
     */
    public function setPayTimeout(int $payTimeout): self
    {
        return $this->set('payTimeout', $payTimeout);
    }

    /**
     * @param string $purchaseId
     * @return self
     */
    public function setPurchaseId(string $purchaseId): self
    {
        return $this->set('purchaseId', $purchaseId);
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
     * @param string $notifyUrl
     * @return self
     */
    public function setNotifyUrl(string $notifyUrl): self
    {
        return $this->set('notifyUrl', $notifyUrl);
    }

    /**
     * @param string $languageCode
     * @return self
     */
    public function setLanguageCode(string $languageCode): self
    {
        return $this->set('languageCode', $languageCode);
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
     * @param string $descriptor
     * @return self
     */
    public function setDescriptor(string $descriptor): self
    {
        return $this->set('descriptor', $descriptor);
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
            $this->get('trackingCode'),
            $this->get('currencyCode'),
            $this->get('returnUrl'),
            $this->get('tokenize'),
            $this->get('token'),
            $this->get('storeId'),
            $this->get('source'),
            $this->get('payTimeout'),
            $this->get('purchaseId'),
            $this->get('brandId'),
            $this->get('notifyUrl'),
            $this->get('languageCode'),
            $this->get('invoiceId'),
            $this->get('descriptor'),
            $this->get('countryCode'),
            $this->get('type')
        );
    }
}
