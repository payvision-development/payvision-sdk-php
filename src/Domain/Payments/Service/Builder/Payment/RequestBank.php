<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Payment;

use Payvision\SDK\Domain\Payments\ValueObject\Payment\RequestBank as RequestBankObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class RequestBank extends Basic
{
    /**
     * @return RequestBankObject
     */
    public function build(): RequestBankObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param string $accountHolderName
     * @return self
     */
    public function setAccountHolderName(string $accountHolderName): self
    {
        return $this->set('accountHolderName', $accountHolderName);
    }

    /**
     * @param string $accountNumber
     * @return self
     */
    public function setAccountNumber(string $accountNumber): self
    {
        return $this->set('accountNumber', $accountNumber);
    }

    /**
     * @param string $bankCode
     * @return self
     */
    public function setBankCode(string $bankCode): self
    {
        return $this->set('bankCode', $bankCode);
    }

    /**
     * @param string $bic
     * @return self
     */
    public function setBic(string $bic): self
    {
        return $this->set('bic', $bic);
    }

    /**
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode(string $countryCode): self
    {
        return $this->set('countryCode', $countryCode);
    }

    /**
     * @param \Payvision\SDK\DataType\Date $dateCollection
     * @return self
     */
    public function setDateCollection(\Payvision\SDK\DataType\Date $dateCollection): self
    {
        return $this->set('dateCollection', $dateCollection);
    }

    /**
     * @param \Payvision\SDK\DataType\Date $dateMandateSigned
     * @return self
     */
    public function setDateMandateSigned(\Payvision\SDK\DataType\Date $dateMandateSigned): self
    {
        return $this->set('dateMandateSigned', $dateMandateSigned);
    }

    /**
     * @param string $iban
     * @return self
     */
    public function setIban(string $iban): self
    {
        return $this->set('iban', $iban);
    }

    /**
     * @param int $issuerId
     * @return self
     */
    public function setIssuerId(int $issuerId): self
    {
        return $this->set('issuerId', $issuerId);
    }

    /**
     * @param string $mandateId
     * @return self
     */
    public function setMandateId(string $mandateId): self
    {
        return $this->set('mandateId', $mandateId);
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(string $name): self
    {
        return $this->set('name', $name);
    }

    /**
     * @return RequestBankObject
     */
    protected function buildObject(): RequestBankObject
    {
        return new RequestBankObject(
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
