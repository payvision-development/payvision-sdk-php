<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Refund;

class Transaction
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
    private $trackingcode;

    /**
     * Transaction constructor.
     *
     * @param float $amount
     * @param string $currencyCode
     * @param string $trackingcode
     */
    public function __construct(
        float $amount,
        string $currencyCode,
        string $trackingcode
    ) {
        $this->amount = $amount;
        $this->currencyCode = $currencyCode;
        $this->trackingcode = $trackingcode;
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
    public function getTrackingcode()
    {
        return $this->trackingcode;
    }
}
