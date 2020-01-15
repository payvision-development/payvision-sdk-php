<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
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
     * @return self
     */
    public function setApprovalCode(string $approvalCode): self
    {
        return $this->set('approvalCode', $approvalCode);
    }

    /**
     * @param string $avsAuthorizationEntity
     * @return self
     */
    public function setAvsAuthorizationEntity(string $avsAuthorizationEntity): self
    {
        return $this->set('avsAuthorizationEntity', $avsAuthorizationEntity);
    }

    /**
     * @param string $avsResult
     * @return self
     */
    public function setAvsResult(string $avsResult): self
    {
        return $this->set('avsResult', $avsResult);
    }

    /**
     * @param string $cvvResult
     * @return self
     */
    public function setCvvResult(string $cvvResult): self
    {
        return $this->set('cvvResult', $cvvResult);
    }

    /**
     * @param string $expiryMonth
     * @return self
     */
    public function setExpiryMonth(string $expiryMonth): self
    {
        return $this->set('expiryMonth', $expiryMonth);
    }

    /**
     * @param string $expiryYear
     * @return self
     */
    public function setExpiryYear(string $expiryYear): self
    {
        return $this->set('expiryYear', $expiryYear);
    }

    /**
     * @param string $firstSixDigits
     * @return self
     */
    public function setFirstSixDigits(string $firstSixDigits): self
    {
        return $this->set('firstSixDigits', $firstSixDigits);
    }

    /**
     * @param string $holderName
     * @return self
     */
    public function setHolderName(string $holderName): self
    {
        return $this->set('holderName', $holderName);
    }

    /**
     * @param string $lastFourDigits
     * @return self
     */
    public function setLastFourDigits(string $lastFourDigits): self
    {
        return $this->set('lastFourDigits', $lastFourDigits);
    }

    /**
     * @param string $recurringAdvice
     * @return self
     */
    public function setRecurringAdvice(string $recurringAdvice): self
    {
        return $this->set('recurringAdvice', $recurringAdvice);
    }

    /**
     * @param string $threeDResult
     * @return self
     */
    public function setThreeDResult(string $threeDResult): self
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
