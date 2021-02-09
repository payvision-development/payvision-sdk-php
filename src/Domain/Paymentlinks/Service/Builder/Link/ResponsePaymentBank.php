<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
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
     * @return ResponsePaymentBank
     */
    public function setAccountHolderName(string $accountHolderName): ResponsePaymentBank
    {
        return $this->set('accountHolderName', $accountHolderName);
    }

    /**
     * @param string $bic
     * @return ResponsePaymentBank
     */
    public function setBic(string $bic): ResponsePaymentBank
    {
        return $this->set('bic', $bic);
    }

    /**
     * @param string $countryCode
     * @return ResponsePaymentBank
     */
    public function setCountryCode(string $countryCode): ResponsePaymentBank
    {
        return $this->set('countryCode', $countryCode);
    }

    /**
     * @param string $iban
     * @return ResponsePaymentBank
     */
    public function setIban(string $iban): ResponsePaymentBank
    {
        return $this->set('iban', $iban);
    }

    /**
     * @param string $name
     * @return ResponsePaymentBank
     */
    public function setName(string $name): ResponsePaymentBank
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
