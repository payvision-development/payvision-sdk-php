<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\Service\Builder\Payment;

use Payvision\SDK\Domain\Checkouts\ValueObject\Payment\ResponseBank as ResponseBankObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponseBank extends Basic
{
    /**
     * @return ResponseBankObject
     */
    public function build(): ResponseBankObject
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
     * @param string $iban
     * @return self
     */
    public function setIban(string $iban): self
    {
        return $this->set('iban', $iban);
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
     * @return ResponseBankObject
     */
    protected function buildObject(): ResponseBankObject
    {
        return new ResponseBankObject(
            $this->get('accountHolderName'),
            $this->get('accountNumber'),
            $this->get('bic'),
            $this->get('countryCode'),
            $this->get('iban'),
            $this->get('name')
        );
    }
}
