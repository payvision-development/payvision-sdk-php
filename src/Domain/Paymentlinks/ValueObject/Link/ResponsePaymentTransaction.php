<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\ValueObject\Link;

class ResponsePaymentTransaction
{
    /**
     * @var float
     */
    private $amount;

    /**
     * @var int
     */
    private $brandId;

    /**
     * @var string
     */
    private $currencyCode;

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $trackingCode;

    /**
     * ResponsePaymentTransaction constructor.
     *
     * @param float $amount
     * @param int $brandId
     * @param string $currencyCode
     * @param string $id
     * @param string $trackingCode
     */
    public function __construct(
        float $amount,
        int $brandId,
        string $currencyCode,
        string $id,
        string $trackingCode
    ) {
        $this->amount = $amount;
        $this->brandId = $brandId;
        $this->currencyCode = $currencyCode;
        $this->id = $id;
        $this->trackingCode = $trackingCode;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return int
     */
    public function getBrandId()
    {
        return $this->brandId;
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
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTrackingCode()
    {
        return $this->trackingCode;
    }
}
