<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder;

use Payvision\SDK\Domain\Payments\ValueObject\Dba as DbaObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Dba extends Basic
{
    public function build(): DbaObject
    {
        return $this->buildAndReset();
    }

    public function setCity(string $city): self
    {
        return $this->set('city', $city);
    }

    public function setCountryCode(string $countryCode): self
    {
        return $this->set('countryCode', $countryCode);
    }

    public function setEmail(string $email): self
    {
        return $this->set('email', $email);
    }

    public function setName(string $name): self
    {
        return $this->set('name', $name);
    }

    public function setPhoneNumber(string $phoneNumber): self
    {
        return $this->set('phoneNumber', $phoneNumber);
    }

    public function setShortName(string $shortName): self
    {
        return $this->set('shortName', $shortName);
    }

    public function setStateCode(string $stateCode): self
    {
        return $this->set('stateCode', $stateCode);
    }

    public function setStreet(string $street): self
    {
        return $this->set('street', $street);
    }

    public function setSubMerchantId(string $subMerchantId): self
    {
        return $this->set('subMerchantId', $subMerchantId);
    }

    public function setZip(string $zip): self
    {
        return $this->set('zip', $zip);
    }

    protected function buildObject(): DbaObject
    {
        return new DbaObject(
            $this->get('city'),
            $this->get('countryCode'),
            $this->get('email'),
            $this->get('name'),
            $this->get('phoneNumber'),
            $this->get('shortName'),
            $this->get('stateCode'),
            $this->get('street'),
            $this->get('subMerchantId'),
            $this->get('zip')
        );
    }
}
