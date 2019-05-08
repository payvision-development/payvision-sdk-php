<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder;

use Payvision\SDK\Domain\Payments\ValueObject\Transaction as TransactionObject;
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

    public function setTrackingCode(string $trackingCode): self
    {
        return $this->set('trackingCode', $trackingCode);
    }

    public function setCurrencyCode(string $currencyCode): self
    {
        return $this->set('currencyCode', $currencyCode);
    }

    public function setReturnUrl(string $returnUrl): self
    {
        return $this->set('returnUrl', $returnUrl);
    }

    public function setTokenize(bool $tokenize): self
    {
        return $this->set('tokenize', $tokenize);
    }

    public function setToken(string $token): self
    {
        return $this->set('token', $token);
    }

    public function setStoreId(int $storeId): self
    {
        return $this->set('storeId', $storeId);
    }

    public function setSource(string $source): self
    {
        return $this->set('source', $source);
    }

    public function setPayTimeout(int $payTimeout): self
    {
        return $this->set('payTimeout', $payTimeout);
    }

    public function setPurchaseId(string $purchaseId): self
    {
        return $this->set('purchaseId', $purchaseId);
    }

    public function setBrandId(int $brandId): self
    {
        return $this->set('brandId', $brandId);
    }

    public function setNotifyUrl(string $notifyUrl): self
    {
        return $this->set('notifyUrl', $notifyUrl);
    }

    public function setLanguageCode(string $languageCode): self
    {
        return $this->set('languageCode', $languageCode);
    }

    public function setInvoiceId(string $invoiceId): self
    {
        return $this->set('invoiceId', $invoiceId);
    }

    public function setDescriptor(string $descriptor): self
    {
        return $this->set('descriptor', $descriptor);
    }

    public function setCountryCode(string $countryCode): self
    {
        return $this->set('countryCode', $countryCode);
    }

    public function setType(string $type): self
    {
        return $this->set('type', $type);
    }

    protected function buildObject(): TransactionObject
    {
        return new TransactionObject(
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
