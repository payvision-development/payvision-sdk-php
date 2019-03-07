<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder;

use Payvision\SDK\Domain\Payments\ValueObject\BasicResponseBank as BasicResponseBankObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class BasicResponseBank extends Basic
{
    public function build(): BasicResponseBankObject
    {
        return $this->buildAndReset();
    }

    public function setAccountHolderName(string $accountHolderName): self
    {
        return $this->set('accountHolderName', $accountHolderName);
    }

    public function setBic(string $bic): self
    {
        return $this->set('bic', $bic);
    }

    public function setCountryCode(string $countryCode): self
    {
        return $this->set('countryCode', $countryCode);
    }

    public function setIban(string $iban): self
    {
        return $this->set('iban', $iban);
    }

    public function setName(string $name): self
    {
        return $this->set('name', $name);
    }

    protected function buildObject(): BasicResponseBankObject
    {
        return new BasicResponseBankObject(
            $this->get('accountHolderName'),
            $this->get('bic'),
            $this->get('countryCode'),
            $this->get('iban'),
            $this->get('name')
        );
    }
}
