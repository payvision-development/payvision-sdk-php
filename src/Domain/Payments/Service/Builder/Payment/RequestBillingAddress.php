<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Payment;

use Payvision\SDK\Domain\Payments\ValueObject\Payment\RequestBillingAddress as RequestBillingAddressObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class RequestBillingAddress extends Basic
{
    /**
     * @return RequestBillingAddressObject
     */
    public function build(): RequestBillingAddressObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param string $city
     * @return self
     */
    public function setCity(string $city): self
    {
        return $this->set('city', $city);
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
     * @param string $houseNumber
     * @return self
     */
    public function setHouseNumber(string $houseNumber): self
    {
        return $this->set('houseNumber', $houseNumber);
    }

    /**
     * @param string $houseNumberSuffix
     * @return self
     */
    public function setHouseNumberSuffix(string $houseNumberSuffix): self
    {
        return $this->set('houseNumberSuffix', $houseNumberSuffix);
    }

    /**
     * @param string $stateCode
     * @return self
     */
    public function setStateCode(string $stateCode): self
    {
        return $this->set('stateCode', $stateCode);
    }

    /**
     * @param string $street
     * @return self
     */
    public function setStreet(string $street): self
    {
        return $this->set('street', $street);
    }

    /**
     * @param string $streetInfo
     * @return self
     */
    public function setStreetInfo(string $streetInfo): self
    {
        return $this->set('streetInfo', $streetInfo);
    }

    /**
     * @param string $zip
     * @return self
     */
    public function setZip(string $zip): self
    {
        return $this->set('zip', $zip);
    }

    /**
     * @return RequestBillingAddressObject
     */
    protected function buildObject(): RequestBillingAddressObject
    {
        return new RequestBillingAddressObject(
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
