<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Payment;

use Payvision\SDK\Domain\Payments\ValueObject\Payment\ResponseCard as ResponseCardObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponseCard extends Basic
{
    /**
     * @return ResponseCardObject
     */
    public function build(): ResponseCardObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param string $approvalCode
     * @return ResponseCard
     */
    public function setApprovalCode(string $approvalCode): ResponseCard
    {
        return $this->set('approvalCode', $approvalCode);
    }

    /**
     * @param string $avsAuthorizationEntity
     * @return ResponseCard
     */
    public function setAvsAuthorizationEntity(string $avsAuthorizationEntity): ResponseCard
    {
        return $this->set('avsAuthorizationEntity', $avsAuthorizationEntity);
    }

    /**
     * @param string $avsResult
     * @return ResponseCard
     */
    public function setAvsResult(string $avsResult): ResponseCard
    {
        return $this->set('avsResult', $avsResult);
    }

    /**
     * @param string $cvvResult
     * @return ResponseCard
     */
    public function setCvvResult(string $cvvResult): ResponseCard
    {
        return $this->set('cvvResult', $cvvResult);
    }

    /**
     * @param string $expiryMonth
     * @return ResponseCard
     */
    public function setExpiryMonth(string $expiryMonth): ResponseCard
    {
        return $this->set('expiryMonth', $expiryMonth);
    }

    /**
     * @param string $expiryYear
     * @return ResponseCard
     */
    public function setExpiryYear(string $expiryYear): ResponseCard
    {
        return $this->set('expiryYear', $expiryYear);
    }

    /**
     * @param string $firstSixDigits
     * @return ResponseCard
     */
    public function setFirstSixDigits(string $firstSixDigits): ResponseCard
    {
        return $this->set('firstSixDigits', $firstSixDigits);
    }

    /**
     * @param string $holderName
     * @return ResponseCard
     */
    public function setHolderName(string $holderName): ResponseCard
    {
        return $this->set('holderName', $holderName);
    }

    /**
     * @param string $lastFourDigits
     * @return ResponseCard
     */
    public function setLastFourDigits(string $lastFourDigits): ResponseCard
    {
        return $this->set('lastFourDigits', $lastFourDigits);
    }

    /**
     * @param string $recurringAdvice
     * @return ResponseCard
     */
    public function setRecurringAdvice(string $recurringAdvice): ResponseCard
    {
        return $this->set('recurringAdvice', $recurringAdvice);
    }

    /**
     * @param string $threeDResult
     * @return ResponseCard
     */
    public function setThreeDResult(string $threeDResult): ResponseCard
    {
        return $this->set('threeDResult', $threeDResult);
    }

    /**
     * @return ResponseCardObject
     */
    protected function buildObject(): ResponseCardObject
    {
        return new ResponseCardObject(
            $this->get('approvalCode'),
            $this->get('avsAuthorizationEntity'),
            $this->get('avsResult'),
            $this->get('cvvResult'),
            $this->get('expiryMonth'),
            $this->get('expiryYear'),
            $this->get('firstSixDigits'),
            $this->get('holderName'),
            $this->get('lastFourDigits'),
            $this->get('recurringAdvice'),
            $this->get('threeDResult')
        );
    }
}
