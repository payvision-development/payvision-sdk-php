<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Capture;

use Payvision\SDK\Domain\Payments\ValueObject\Capture\ResponseBank as ResponseBankObject;
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
     * @return ResponseBank
     */
    public function setAccountHolderName(string $accountHolderName): ResponseBank
    {
        return $this->set('accountHolderName', $accountHolderName);
    }

    /**
     * @param string $bic
     * @return ResponseBank
     */
    public function setBic(string $bic): ResponseBank
    {
        return $this->set('bic', $bic);
    }

    /**
     * @param string $countryCode
     * @return ResponseBank
     */
    public function setCountryCode(string $countryCode): ResponseBank
    {
        return $this->set('countryCode', $countryCode);
    }

    /**
     * @param string $iban
     * @return ResponseBank
     */
    public function setIban(string $iban): ResponseBank
    {
        return $this->set('iban', $iban);
    }

    /**
     * @param string $name
     * @return ResponseBank
     */
    public function setName(string $name): ResponseBank
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
            $this->get('bic'),
            $this->get('countryCode'),
            $this->get('iban'),
            $this->get('name')
        );
    }
}
