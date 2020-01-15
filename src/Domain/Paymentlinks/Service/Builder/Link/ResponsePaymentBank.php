<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\Service\Builder\Link;

use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\ResponsePaymentBank as ResponsePaymentBankObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponsePaymentBank extends Basic
{
    /**
     * @return ResponsePaymentBankObject
     */
    public function build(): ResponsePaymentBankObject
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
     * @return ResponsePaymentBankObject
     */
    protected function buildObject(): ResponsePaymentBankObject
    {
        return new ResponsePaymentBankObject(
            $this->get('accountHolderName'),
            $this->get('bic'),
            $this->get('countryCode'),
            $this->get('iban'),
            $this->get('name')
        );
    }
}
