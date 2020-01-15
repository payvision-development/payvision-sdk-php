<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\ValueObject\Link;

class ResponseTransaction
{
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
     * ResponseTransaction constructor.
     *
     * @param float $amount
     * @param string $authorizationMode
     * @param string $currencyCode
     * @param string $trackingCode
     */
    public function __construct(
        float $amount,
        string $authorizationMode,
        string $currencyCode,
        string $trackingCode
    ) {
        $this->amount = $amount;
        $this->authorizationMode = $authorizationMode;
        $this->currencyCode = $currencyCode;
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
}
