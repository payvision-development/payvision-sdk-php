<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Capture;

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
     * @var string
     */
    private $invoiceId;

    /**
     * RequestTransaction constructor.
     *
     * @param float $amount
     * @param string $currencyCode
     * @param string $trackingCode
     * @param string $invoiceId
     */
    public function __construct(
        float $amount,
        string $currencyCode,
        string $trackingCode,
        string $invoiceId = null
    ) {
        $this->amount = $amount;
        $this->currencyCode = $currencyCode;
        $this->trackingCode = $trackingCode;
        $this->invoiceId = $invoiceId;
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
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }
}
