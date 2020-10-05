<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\ValueObject\Payment;

class ResponseCard
{
    /**
     * @var string
     */
    private $approvalCode;

    /**
     * @var string
     */
    private $avsAuthorizationEntity;

    /**
     * @var string
     */
    private $avsResult;

    /**
     * @var string
     */
    private $cvvResult;

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
     * @var string
     */
    private $recurringAdvice;

    /**
     * @var string
     */
    private $threeDResult;

    /**
     * ResponseCard constructor.
     *
     * @param string $approvalCode
     * @param string $avsAuthorizationEntity
     * @param string $avsResult
     * @param string $cvvResult
     * @param string $expiryMonth
     * @param string $expiryYear
     * @param string $firstSixDigits
     * @param string $holderName
     * @param string $lastFourDigits
     * @param string $recurringAdvice
     * @param string $threeDResult
     */
    public function __construct(
        string $approvalCode = null,
        string $avsAuthorizationEntity = null,
        string $avsResult = null,
        string $cvvResult = null,
        string $expiryMonth = null,
        string $expiryYear = null,
        string $firstSixDigits = null,
        string $holderName = null,
        string $lastFourDigits = null,
        string $recurringAdvice = null,
        string $threeDResult = null
    ) {
        $this->approvalCode = $approvalCode;
        $this->avsAuthorizationEntity = $avsAuthorizationEntity;
        $this->avsResult = $avsResult;
        $this->cvvResult = $cvvResult;
        $this->expiryMonth = $expiryMonth;
        $this->expiryYear = $expiryYear;
        $this->firstSixDigits = $firstSixDigits;
        $this->holderName = $holderName;
        $this->lastFourDigits = $lastFourDigits;
        $this->recurringAdvice = $recurringAdvice;
        $this->threeDResult = $threeDResult;
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
    public function getAvsAuthorizationEntity()
    {
        return $this->avsAuthorizationEntity;
    }

    /**
     * @return string|null
     */
    public function getAvsResult()
    {
        return $this->avsResult;
    }

    /**
     * @return string|null
     */
    public function getCvvResult()
    {
        return $this->cvvResult;
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

    /**
     * @return string|null
     */
    public function getRecurringAdvice()
    {
        return $this->recurringAdvice;
    }

    /**
     * @return string|null
     */
    public function getThreeDResult()
    {
        return $this->threeDResult;
    }
}
