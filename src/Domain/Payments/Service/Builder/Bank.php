<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder;

use Payvision\SDK\Domain\Payments\ValueObject\Bank as BankObject;
use Payvision\SDK\Domain\Service\Builder\Basic;
use DateTime;

class Bank extends Basic
{
    public function build(): BankObject
    {
        return $this->buildAndReset();
    }

    public function setAccountHolderName(string $accountHolderName): self
    {
        return $this->set('accountHolderName', $accountHolderName);
    }

    public function setAccountNumber(string $accountNumber): self
    {
        return $this->set('accountNumber', $accountNumber);
    }

    public function setBankCode(string $bankCode): self
    {
        return $this->set('bankCode', $bankCode);
    }

    public function setBic(string $bic): self
    {
        return $this->set('bic', $bic);
    }

    public function setCountryCode(string $countryCode): self
    {
        return $this->set('countryCode', $countryCode);
    }

    public function setDateCollection(DateTime $dateCollection): self
    {
        return $this->set('dateCollection', $dateCollection);
    }

    public function setDateMandateSigned(DateTime $dateMandateSigned): self
    {
        return $this->set('dateMandateSigned', $dateMandateSigned);
    }

    public function setIban(string $iban): self
    {
        return $this->set('iban', $iban);
    }

    public function setIssuerId(int $issuerId): self
    {
        return $this->set('issuerId', $issuerId);
    }

    public function setMandateId(string $mandateId): self
    {
        return $this->set('mandateId', $mandateId);
    }

    public function setName(string $name): self
    {
        return $this->set('name', $name);
    }

    protected function buildObject(): BankObject
    {
        return new BankObject(
            $this->get('accountHolderName'),
            $this->get('accountNumber'),
            $this->get('bankCode'),
            $this->get('bic'),
            $this->get('countryCode'),
            $this->get('dateCollection'),
            $this->get('dateMandateSigned'),
            $this->get('iban'),
            $this->get('issuerId'),
            $this->get('mandateId'),
            $this->get('name')
        );
    }
}
