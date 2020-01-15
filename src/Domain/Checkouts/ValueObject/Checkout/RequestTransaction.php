<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\ValueObject\Checkout;

class RequestTransaction
{
    const SOURCE_ECOMMERCE = 'EC';
    const SOURCE_MAIL_ORDER = 'MO';
    const SOURCE_TELEPHONE_ORDER = 'TO';

    const TYPE_SINGLE = 'SINGLE';
    const TYPE_FIRST = 'FIRST';
    const TYPE_RECURRING = 'RECURRING';
    const TYPE_LAST = 'LAST';

    const AUTHORIZATION_MODE_AUTHORIZE = 'authorize';
    const AUTHORIZATION_MODE_PAYMENT = 'payment';

    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $authorizationMode;

    /**
     * @var string
     */
    private $currencyCode;

    /**
     * @var string
     */
    private $trackingCode;

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
     * @var string
     */
    private $purchaseId;

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
    private $type;

    /**
     * RequestTransaction constructor.
     *
     * @param float $amount
     * @param string $authorizationMode
     * @param string $currencyCode
     * @param string $trackingCode
     * @param string $countryCode
     * @param string $descriptor
     * @param string $invoiceId
     * @param string $languageCode
     * @param string $notifyUrl
     * @param string $purchaseId
     * @param string $source
     * @param int $storeId
     * @param string $type
     */
    public function __construct(
        float $amount,
        string $authorizationMode,
        string $currencyCode,
        string $trackingCode,
        string $countryCode = null,
        string $descriptor = null,
        string $invoiceId = null,
        string $languageCode = null,
        string $notifyUrl = null,
        string $purchaseId = null,
        string $source = null,
        int $storeId = null,
        string $type = null
    ) {
        $this->amount = $amount;
        $this->authorizationMode = $authorizationMode;
        $this->currencyCode = $currencyCode;
        $this->trackingCode = $trackingCode;
        $this->countryCode = $countryCode;
        $this->descriptor = $descriptor;
        $this->invoiceId = $invoiceId;
        $this->languageCode = $languageCode;
        $this->notifyUrl = $notifyUrl;
        $this->purchaseId = $purchaseId;
        $this->source = $source;
        $this->storeId = $storeId;
        $this->type = $type;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getAuthorizationMode()
    {
        return $this->authorizationMode;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @return string
     */
    public function getTrackingCode()
    {
        return $this->trackingCode;
    }

    /**
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @return string|null
     */
    public function getDescriptor()
    {
        return $this->descriptor;
    }

    /**
     * @return string|null
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * @return string|null
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * @return string|null
     */
    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }

    /**
     * @return string|null
     */
    public function getPurchaseId()
    {
        return $this->purchaseId;
    }

    /**
     * @return string|null
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @return int|null
     */
    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
}
