<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\ValueObject\Link;

class ResponsePaymentBank
{
    /**
     * @var string
     */
    private $accountHolderName;

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
     * ResponsePaymentBank constructor.
     *
     * @param string $accountHolderName
     * @param string $bic
     * @param string $countryCode
     * @param string $iban
     * @param string $name
     */
    public function __construct(
        string $accountHolderName = null,
        string $bic = null,
        string $countryCode = null,
        string $iban = null,
        string $name = null
    ) {
        $this->accountHolderName = $accountHolderName;
        $this->bic = $bic;
        $this->countryCode = $countryCode;
        $this->iban = $iban;
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getAccountHolderName(): ?string
    {
        return $this->accountHolderName;
    }

    /**
     * @return string|null
     */
    public function getBic(): ?string
    {
        return $this->bic;
    }

    /**
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * @return string|null
     */
    public function getIban(): ?string
    {
        return $this->iban;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
}
