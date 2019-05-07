<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder;

use Payvision\SDK\Domain\Payments\ValueObject\Card as CardObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Card extends Basic
{
    public function build(): CardObject
    {
        return $this->buildAndReset();
    }

    public function setCvv(string $cvv): self
    {
        return $this->set('cvv', $cvv);
    }

    public function setExpiryMonth(int $expiryMonth): self
    {
        return $this->set('expiryMonth', $expiryMonth);
    }

    public function setExpiryYear(int $expiryYear): self
    {
        return $this->set('expiryYear', $expiryYear);
    }

    public function setHolderName(string $holderName): self
    {
        return $this->set('holderName', $holderName);
    }

    public function setIssueNumber(string $issueNumber): self
    {
        return $this->set('issueNumber', $issueNumber);
    }

    public function setNumber(string $number): self
    {
        return $this->set('number', $number);
    }

    protected function buildObject(): CardObject
    {
        return new CardObject(
            $this->get('cvv'),
            $this->get('expiryMonth'),
            $this->get('expiryYear'),
            $this->get('holderName'),
            $this->get('issueNumber'),
            $this->get('number')
        );
    }
}
