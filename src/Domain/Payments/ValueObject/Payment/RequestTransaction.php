<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Payment;

class RequestTransaction
{
    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $currencyCode;

    /**
     * @var string
     */
    private $trackingCode;

    /**
     * @var int
     */
    private $brandId;

    /**
     * @var string
     */
    private $countryCode;

    /**
     * @var string
     */
    private $descriptor;

    /**
     * @var string
     */
    private $invoiceId;

    /**
     * @var string
     */
    private $languageCode;

    /**
     * @var string
     */
    private $notifyUrl;

    /**
     * @var int
     */
    private $payTimeout;

    /**
     * @var string
     */
    private $purchaseId;

    /**
     * @var string
     */
    private $returnUrl;

    /**
     * @var string
     */
    private $source;

    /**
     * @var int
     */
    private $storeId;

    /**
     * @var string
     */
    private $token;

    /**
     * @var bool
     */
    private $tokenize;

    /**
     * @var string
     */
    private $type;

    /**
     * RequestTransaction constructor.
     *
     * @param float $amount
     * @param string $currencyCode
     * @param string $trackingCode
     * @param int $brandId
     * @param string $countryCode
     * @param string $descriptor
     * @param string $invoiceId
     * @param string $languageCode
     * @param string $notifyUrl
     * @param int $payTimeout
     * @param string $purchaseId
     * @param string $returnUrl
     * @param string $source
     * @param int $storeId
     * @param string $token
     * @param bool $tokenize
     * @param string $type
     */
    public function __construct(
        float $amount,
        string $currencyCode,
        string $trackingCode,
        int $brandId = null,
        string $countryCode = null,
        string $descriptor = null,
        string $invoiceId = null,
        string $languageCode = null,
        string $notifyUrl = null,
        int $payTimeout = null,
        string $purchaseId = null,
        string $returnUrl = null,
        string $source = null,
        int $storeId = null,
        string $token = null,
        bool $tokenize = null,
        string $type = null
    ) {
        $this->amount = $amount;
        $this->currencyCode = $currencyCode;
        $this->trackingCode = $trackingCode;
        $this->brandId = $brandId;
        $this->countryCode = $countryCode;
        $this->descriptor = $descriptor;
        $this->invoiceId = $invoiceId;
        $this->languageCode = $languageCode;
        $this->notifyUrl = $notifyUrl;
        $this->payTimeout = $payTimeout;
        $this->purchaseId = $purchaseId;
        $this->returnUrl = $returnUrl;
        $this->source = $source;
        $this->storeId = $storeId;
        $this->token = $token;
        $this->tokenize = $tokenize;
        $this->type = $type;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    /**
     * @return string
     */
    public function getTrackingCode(): string
    {
        return $this->trackingCode;
    }

    /**
     * @return int|null
     */
    public function getBrandId(): ?int
    {
        return $this->brandId;
    }

    /**
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * @return string|null
     */
    public function getDescriptor(): ?string
    {
        return $this->descriptor;
    }

    /**
     * @return string|null
     */
    public function getInvoiceId(): ?string
    {
        return $this->invoiceId;
    }

    /**
     * @return string|null
     */
    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }

    /**
     * @return string|null
     */
    public function getNotifyUrl(): ?string
    {
        return $this->notifyUrl;
    }

    /**
     * @return int|null
     */
    public function getPayTimeout(): ?int
    {
        return $this->payTimeout;
    }

    /**
     * @return string|null
     */
    public function getPurchaseId(): ?string
    {
        return $this->purchaseId;
    }

    /**
     * @return string|null
     */
    public function getReturnUrl(): ?string
    {
        return $this->returnUrl;
    }

    /**
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @return int|null
     */
    public function getStoreId(): ?int
    {
        return $this->storeId;
    }

    /**
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * @return bool|null
     */
    public function getTokenize(): ?bool
    {
        return $this->tokenize;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
}
