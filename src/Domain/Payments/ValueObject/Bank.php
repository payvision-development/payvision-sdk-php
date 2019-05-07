<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject;

use DateTime;

class Bank
{
    /**
     * @var string
     */
    private $accountHolderName;

    /**
     * @var string
     */
    private $accountNumber;

    /**
     * @var string
     */
    private $bankCode;

    /**
     * @var string
     */
    private $bic;

    /**
     * @var string
     */
    private $countryCode;

    /**
     * @var DateTime
     */
    private $dateCollection;

    /**
     * @var DateTime
     */
    private $dateMandateSigned;

    /**
     * @var string
     */
    private $iban;

    /**
     * @var int
     */
    private $issuerId;

    /**
     * @var string
     */
    private $mandateId;

    /**
     * @var string
     */
    private $name;

    /**
     * Bank constructor.
     *
     * @param string $accountHolderName
     * @param string $accountNumber
     * @param string $bankCode
     * @param string $bic
     * @param string $countryCode
     * @param DateTime $dateCollection
     * @param DateTime $dateMandateSigned
     * @param string $iban
     * @param int $issuerId
     * @param string $mandateId
     * @param string $name
     */
    public function __construct(
        string $accountHolderName = null,
        string $accountNumber = null,
        string $bankCode = null,
        string $bic = null,
        string $countryCode = null,
        DateTime $dateCollection = null,
        DateTime $dateMandateSigned = null,
        string $iban = null,
        int $issuerId = null,
        string $mandateId = null,
        string $name = null
    ) {
        $this->accountHolderName = $accountHolderName;
        $this->accountNumber = $accountNumber;
        $this->bankCode = $bankCode;
        $this->bic = $bic;
        $this->countryCode = $countryCode;
        $this->dateCollection = $dateCollection;
        $this->dateMandateSigned = $dateMandateSigned;
        $this->iban = $iban;
        $this->issuerId = $issuerId;
        $this->mandateId = $mandateId;
        $this->name = $name;
    }

    /**
    * @return string|null
    */
    public function getAccountHolderName()
    {
        return $this->accountHolderName;
    }

    /**
    * @return string|null
    */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
    * @return string|null
    */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
    * @return string|null
    */
    public function getBic()
    {
        return $this->bic;
    }

    /**
    * @return string|null
    */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
    * @return DateTime|null
    */
    public function getDateCollection()
    {
        return $this->dateCollection;
    }

    /**
    * @return DateTime|null
    */
    public function getDateMandateSigned()
    {
        return $this->dateMandateSigned;
    }

    /**
    * @return string|null
    */
    public function getIban()
    {
        return $this->iban;
    }

    /**
    * @return int|null
    */
    public function getIssuerId()
    {
        return $this->issuerId;
    }

    /**
    * @return string|null
    */
    public function getMandateId()
    {
        return $this->mandateId;
    }

    /**
    * @return string|null
    */
    public function getName()
    {
        return $this->name;
    }
}
