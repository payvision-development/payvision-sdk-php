<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder;

use Payvision\SDK\Domain\Payments\ValueObject\BillingAddress as BillingAddressObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class BillingAddress extends Basic
{
    public function build(): BillingAddressObject
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

    public function setHouseNumber(string $houseNumber): self
    {
        return $this->set('houseNumber', $houseNumber);
    }

    public function setHouseNumberSuffix(string $houseNumberSuffix): self
    {
        return $this->set('houseNumberSuffix', $houseNumberSuffix);
    }

    public function setStateCode(string $stateCode): self
    {
        return $this->set('stateCode', $stateCode);
    }

    public function setStreet(string $street): self
    {
        return $this->set('street', $street);
    }

    public function setStreetInfo(string $streetInfo): self
    {
        return $this->set('streetInfo', $streetInfo);
    }

    public function setZip(string $zip): self
    {
        return $this->set('zip', $zip);
    }

    protected function buildObject(): BillingAddressObject
    {
        return new BillingAddressObject(
            $this->get('city'),
            $this->get('countryCode'),
            $this->get('houseNumber'),
            $this->get('houseNumberSuffix'),
            $this->get('stateCode'),
            $this->get('street'),
            $this->get('streetInfo'),
            $this->get('zip')
        );
    }
}
