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
     * @return RequestBank
     */
    public function setAccountHolderName(string $accountHolderName): RequestBank
    {
        return $this->set('accountHolderName', $accountHolderName);
    }

    /**
     * @param string $accountNumber
     * @return RequestBank
     */
    public function setAccountNumber(string $accountNumber): RequestBank
    {
        return $this->set('accountNumber', $accountNumber);
    }

    /**
     * @param string $bankCode
     * @return RequestBank
     */
    public function setBankCode(string $bankCode): RequestBank
    {
        return $this->set('bankCode', $bankCode);
    }

    /**
     * @param string $bic
     * @return RequestBank
     */
    public function setBic(string $bic): RequestBank
    {
        return $this->set('bic', $bic);
    }

    /**
     * @param string $countryCode
     * @return RequestBank
     */
    public function setCountryCode(string $countryCode): RequestBank
    {
        return $this->set('countryCode', $countryCode);
    }

    /**
     * @param \Payvision\SDK\DataType\Date $dateCollection
     * @return RequestBank
     */
    public function setDateCollection(\Payvision\SDK\DataType\Date $dateCollection): RequestBank
    {
        return $this->set('dateCollection', $dateCollection);
    }

    /**
     * @param \Payvision\SDK\DataType\Date $dateMandateSigned
     * @return RequestBank
     */
    public function setDateMandateSigned(\Payvision\SDK\DataType\Date $dateMandateSigned): RequestBank
    {
        return $this->set('dateMandateSigned', $dateMandateSigned);
    }

    /**
     * @param string $iban
     * @return RequestBank
     */
    public function setIban(string $iban): RequestBank
    {
        return $this->set('iban', $iban);
    }

    /**
     * @param int $issuerId
     * @return RequestBank
     */
    public function setIssuerId(int $issuerId): RequestBank
    {
        return $this->set('issuerId', $issuerId);
    }

    /**
     * @param string $mandateId
     * @return RequestBank
     */
    public function setMandateId(string $mandateId): RequestBank
    {
        return $this->set('mandateId', $mandateId);
    }

    /**
     * @param string $name
     * @return RequestBank
     */
    public function setName(string $name): RequestBank
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
