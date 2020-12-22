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
     * @return RequestTransaction
     */
    public function setAmount(float $amount): RequestTransaction
    {
        return $this->set('amount', $amount);
    }

    /**
     * @param string $currencyCode
     * @return RequestTransaction
     */
    public function setCurrencyCode(string $currencyCode): RequestTransaction
    {
        return $this->set('currencyCode', $currencyCode);
    }

    /**
     * @param string $trackingCode
     * @return RequestTransaction
     */
    public function setTrackingCode(string $trackingCode): RequestTransaction
    {
        return $this->set('trackingCode', $trackingCode);
    }

    /**
     * @param int $brandId
     * @return RequestTransaction
     */
    public function setBrandId(int $brandId): RequestTransaction
    {
        return $this->set('brandId', $brandId);
    }

    /**
     * @param string $countryCode
     * @return RequestTransaction
     */
    public function setCountryCode(string $countryCode): RequestTransaction
    {
        return $this->set('countryCode', $countryCode);
    }

    /**
     * @param string $descriptor
     * @return RequestTransaction
     */
    public function setDescriptor(string $descriptor): RequestTransaction
    {
        return $this->set('descriptor', $descriptor);
    }

    /**
     * @param string $invoiceId
     * @return RequestTransaction
     */
    public function setInvoiceId(string $invoiceId): RequestTransaction
    {
        return $this->set('invoiceId', $invoiceId);
    }

    /**
     * @param string $languageCode
     * @return RequestTransaction
     */
    public function setLanguageCode(string $languageCode): RequestTransaction
    {
        return $this->set('languageCode', $languageCode);
    }

    /**
     * @param string $notifyUrl
     * @return RequestTransaction
     */
    public function setNotifyUrl(string $notifyUrl): RequestTransaction
    {
        return $this->set('notifyUrl', $notifyUrl);
    }

    /**
     * @param int $payTimeout
     * @return RequestTransaction
     */
    public function setPayTimeout(int $payTimeout): RequestTransaction
    {
        return $this->set('payTimeout', $payTimeout);
    }

    /**
     * @param string $purchaseId
     * @return RequestTransaction
     */
    public function setPurchaseId(string $purchaseId): RequestTransaction
    {
        return $this->set('purchaseId', $purchaseId);
    }

    /**
     * @param string $returnUrl
     * @return RequestTransaction
     */
    public function setReturnUrl(string $returnUrl): RequestTransaction
    {
        return $this->set('returnUrl', $returnUrl);
    }

    /**
     * @param string $source
     * @return RequestTransaction
     */
    public function setSource(string $source): RequestTransaction
    {
        return $this->set('source', $source);
    }

    /**
     * @param int $storeId
     * @return RequestTransaction
     */
    public function setStoreId(int $storeId): RequestTransaction
    {
        return $this->set('storeId', $storeId);
    }

    /**
     * @param string $token
     * @return RequestTransaction
     */
    public function setToken(string $token): RequestTransaction
    {
        return $this->set('token', $token);
    }

    /**
     * @param bool $tokenize
     * @return RequestTransaction
     */
    public function setTokenize(bool $tokenize): RequestTransaction
    {
        return $this->set('tokenize', $tokenize);
    }

    /**
     * @param string $type
     * @return RequestTransaction
     */
    public function setType(string $type): RequestTransaction
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
            $this->get('currencyCode'),
            $this->get('trackingCode'),
            $this->get('brandId'),
            $this->get('countryCode'),
            $this->get('descriptor'),
            $this->get('invoiceId'),
            $this->get('languageCode'),
            $this->get('notifyUrl'),
            $this->get('payTimeout'),
            $this->get('purchaseId'),
            $this->get('returnUrl'),
            $this->get('source'),
            $this->get('storeId'),
            $this->get('token'),
            $this->get('tokenize'),
            $this->get('type')
        );
    }
}
