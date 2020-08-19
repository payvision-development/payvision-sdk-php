<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\Service\Builder\Link;

use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\ResponsePaymentCard as ResponsePaymentCardObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponsePaymentCard extends Basic
{
    /**
     * @return ResponsePaymentCardObject
     */
    public function build(): ResponsePaymentCardObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param string $approvalCode
     * @return ResponsePaymentCard
     */
    public function setApprovalCode(string $approvalCode): ResponsePaymentCard
    {
        return $this->set('approvalCode', $approvalCode);
    }

    /**
     * @param string $avsAuthorizationEntity
     * @return ResponsePaymentCard
     */
    public function setAvsAuthorizationEntity(string $avsAuthorizationEntity): ResponsePaymentCard
    {
        return $this->set('avsAuthorizationEntity', $avsAuthorizationEntity);
    }

    /**
     * @param string $avsResult
     * @return ResponsePaymentCard
     */
    public function setAvsResult(string $avsResult): ResponsePaymentCard
    {
        return $this->set('avsResult', $avsResult);
    }

    /**
     * @param string $cvvResult
     * @return ResponsePaymentCard
     */
    public function setCvvResult(string $cvvResult): ResponsePaymentCard
    {
        return $this->set('cvvResult', $cvvResult);
    }

    /**
     * @param string $expiryMonth
     * @return ResponsePaymentCard
     */
    public function setExpiryMonth(string $expiryMonth): ResponsePaymentCard
    {
        return $this->set('expiryMonth', $expiryMonth);
    }

    /**
     * @param string $expiryYear
     * @return ResponsePaymentCard
     */
    public function setExpiryYear(string $expiryYear): ResponsePaymentCard
    {
        return $this->set('expiryYear', $expiryYear);
    }

    /**
     * @param string $firstSixDigits
     * @return ResponsePaymentCard
     */
    public function setFirstSixDigits(string $firstSixDigits): ResponsePaymentCard
    {
        return $this->set('firstSixDigits', $firstSixDigits);
    }

    /**
     * @param string $holderName
     * @return ResponsePaymentCard
     */
    public function setHolderName(string $holderName): ResponsePaymentCard
    {
        return $this->set('holderName', $holderName);
    }

    /**
     * @param string $lastFourDigits
     * @return ResponsePaymentCard
     */
    public function setLastFourDigits(string $lastFourDigits): ResponsePaymentCard
    {
        return $this->set('lastFourDigits', $lastFourDigits);
    }

    /**
     * @param string $recurringAdvice
     * @return ResponsePaymentCard
     */
    public function setRecurringAdvice(string $recurringAdvice): ResponsePaymentCard
    {
        return $this->set('recurringAdvice', $recurringAdvice);
    }

    /**
     * @param string $threeDResult
     * @return ResponsePaymentCard
     */
    public function setThreeDResult(string $threeDResult): ResponsePaymentCard
    {
        return $this->set('threeDResult', $threeDResult);
    }

    /**
     * @return ResponsePaymentCardObject
     */
    protected function buildObject(): ResponsePaymentCardObject
    {
        return new ResponsePaymentCardObject(
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
