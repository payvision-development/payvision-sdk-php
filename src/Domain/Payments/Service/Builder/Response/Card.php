<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Response;

use Payvision\SDK\Domain\Payments\ValueObject\Response\Card as CardObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Card extends Basic
{
    public function build(): CardObject
    {
        return $this->buildAndReset();
    }

    public function setApprovalCode(string $approvalCode): self
    {
        return $this->set('approvalCode', $approvalCode);
    }

    public function setAvsAuthorizationEntity(string $avsAuthorizationEntity): self
    {
        return $this->set('avsAuthorizationEntity', $avsAuthorizationEntity);
    }

    public function setAvsResult(string $avsResult): self
    {
        return $this->set('avsResult', $avsResult);
    }

    public function setCvvResult(string $cvvResult): self
    {
        return $this->set('cvvResult', $cvvResult);
    }

    public function setExpiryMonth(string $expiryMonth): self
    {
        return $this->set('expiryMonth', $expiryMonth);
    }

    public function setExpiryYear(string $expiryYear): self
    {
        return $this->set('expiryYear', $expiryYear);
    }

    public function setFirstSixDigits(string $firstSixDigits): self
    {
        return $this->set('firstSixDigits', $firstSixDigits);
    }

    public function setHolderName(string $holderName): self
    {
        return $this->set('holderName', $holderName);
    }

    public function setLastFourDigits(string $lastFourDigits): self
    {
        return $this->set('lastFourDigits', $lastFourDigits);
    }

    public function setRecurringAdvice(string $recurringAdvice): self
    {
        return $this->set('recurringAdvice', $recurringAdvice);
    }

    public function setThreeDResult(string $threeDResult): self
    {
        return $this->set('threeDResult', $threeDResult);
    }

    protected function buildObject(): CardObject
    {
        return new CardObject(
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
