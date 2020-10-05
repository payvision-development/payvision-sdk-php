<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Payment;

class ResponseBank
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
    private $bic;

    /**
     * @var string
     */
    private $countryCode;

    /**
     * @var string
     */
    private $iban;

    /**
     * @var string
     */
    private $name;

    /**
     * ResponseBank constructor.
     *
     * @param string $accountHolderName
     * @param string $accountNumber
     * @param string $bic
     * @param string $countryCode
     * @param string $iban
     * @param string $name
     */
    public function __construct(
        string $accountHolderName = null,
        string $accountNumber = null,
        string $bic = null,
        string $countryCode = null,
        string $iban = null,
        string $name = null
    ) {
        $this->accountHolderName = $accountHolderName;
        $this->accountNumber = $accountNumber;
        $this->bic = $bic;
        $this->countryCode = $countryCode;
        $this->iban = $iban;
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
     * @return string|null
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
}
