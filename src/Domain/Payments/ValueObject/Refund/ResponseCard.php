<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Refund;

class ResponseCard
{
    /**
     * @var string
     */
    private $approvalCode;

    /**
     * @var string
     */
    private $expiryMonth;

    /**
     * @var string
     */
    private $expiryYear;

    /**
     * @var string
     */
    private $firstSixDigits;

    /**
     * @var string
     */
    private $holderName;

    /**
     * @var string
     */
    private $lastFourDigits;

    /**
     * ResponseCard constructor.
     *
     * @param string $approvalCode
     * @param string $expiryMonth
     * @param string $expiryYear
     * @param string $firstSixDigits
     * @param string $holderName
     * @param string $lastFourDigits
     */
    public function __construct(
        string $approvalCode = null,
        string $expiryMonth = null,
        string $expiryYear = null,
        string $firstSixDigits = null,
        string $holderName = null,
        string $lastFourDigits = null
    ) {
        $this->approvalCode = $approvalCode;
        $this->expiryMonth = $expiryMonth;
        $this->expiryYear = $expiryYear;
        $this->firstSixDigits = $firstSixDigits;
        $this->holderName = $holderName;
        $this->lastFourDigits = $lastFourDigits;
    }

    /**
     * @return string|null
     */
    public function getApprovalCode()
    {
        return $this->approvalCode;
    }

    /**
     * @return string|null
     */
    public function getExpiryMonth()
    {
        return $this->expiryMonth;
    }

    /**
     * @return string|null
     */
    public function getExpiryYear()
    {
        return $this->expiryYear;
    }

    /**
     * @return string|null
     */
    public function getFirstSixDigits()
    {
        return $this->firstSixDigits;
    }

    /**
     * @return string|null
     */
    public function getHolderName()
    {
        return $this->holderName;
    }

    /**
     * @return string|null
     */
    public function getLastFourDigits()
    {
        return $this->lastFourDigits;
    }
}
