<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\Service\Builder\Checkout;

use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\RequestShippingAddress as RequestShippingAddressObject;
use Payvision\SDK\Domain\Checkouts\ValueObject\Customer;
use Payvision\SDK\Domain\Service\Builder\Basic;

class RequestShippingAddress extends Basic
{
    /**
     * @return RequestShippingAddressObject
     */
    public function build(): RequestShippingAddressObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param string $city
     * @return RequestShippingAddress
     */
    public function setCity(string $city): RequestShippingAddress
    {
        return $this->set('city', $city);
    }

    /**
     * @param string $countryCode
     * @return RequestShippingAddress
     */
    public function setCountryCode(string $countryCode): RequestShippingAddress
    {
        return $this->set('countryCode', $countryCode);
    }

    /**
     * @param Customer $customer
     * @return RequestShippingAddress
     */
    public function setCustomer(Customer $customer): RequestShippingAddress
    {
        return $this->set('customer', $customer);
    }

    /**
     * @param string $houseNumber
     * @return RequestShippingAddress
     */
    public function setHouseNumber(string $houseNumber): RequestShippingAddress
    {
        return $this->set('houseNumber', $houseNumber);
    }

    /**
     * @param string $houseNumberSuffix
     * @return RequestShippingAddress
     */
    public function setHouseNumberSuffix(string $houseNumberSuffix): RequestShippingAddress
    {
        return $this->set('houseNumberSuffix', $houseNumberSuffix);
    }

    /**
     * @param string $stateCode
     * @return RequestShippingAddress
     */
    public function setStateCode(string $stateCode): RequestShippingAddress
    {
        return $this->set('stateCode', $stateCode);
    }

    /**
     * @param string $street
     * @return RequestShippingAddress
     */
    public function setStreet(string $street): RequestShippingAddress
    {
        return $this->set('street', $street);
    }

    /**
     * @param string $streetInfo
     * @return RequestShippingAddress
     */
    public function setStreetInfo(string $streetInfo): RequestShippingAddress
    {
        return $this->set('streetInfo', $streetInfo);
    }

    /**
     * @param string $zip
     * @return RequestShippingAddress
     */
    public function setZip(string $zip): RequestShippingAddress
    {
        return $this->set('zip', $zip);
    }

    /**
     * @return RequestShippingAddressObject
     */
    protected function buildObject(): RequestShippingAddressObject
    {
        return new RequestShippingAddressObject(
            $this->get('city'),
            $this->get('countryCode'),
            $this->get('customer'),
            $this->get('houseNumber'),
            $this->get('houseNumberSuffix'),
            $this->get('stateCode'),
            $this->get('street'),
            $this->get('streetInfo'),
            $this->get('zip')
        );
    }
}
