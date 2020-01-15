<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Composite\Payment;

use Payvision\SDK\Domain\Payments\ValueObject\Payment\RequestShippingAddress as RequestShippingAddressObject;
use Payvision\SDK\Domain\Payments\Service\Builder\Customer as CustomerBuilder;
use Payvision\SDK\Domain\Service\Builder\Basic;

class RequestShippingAddress extends Basic
{
    /**
     * @var CustomerBuilder
     */
    private $customerBuilder;

    /**
     * @var bool
     */
    private $isCustomerBuilderTouched = false;

    public function __construct()
    {
        $this->customerBuilder = new CustomerBuilder();
    }

    /**
     * @return RequestShippingAddressObject
     */
    public function build(): RequestShippingAddressObject
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
     * @return CustomerBuilder
     */
    public function customer(): CustomerBuilder
    {
        $this->isCustomerBuilderTouched = true;
        return $this->customerBuilder;
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
     * @return RequestShippingAddressObject
     */
    protected function buildObject(): RequestShippingAddressObject
    {
        return new RequestShippingAddressObject(
            $this->get('city'),
            $this->get('countryCode'),
            $this->isCustomerBuilderTouched ? $this->customerBuilder->build() : null,
            $this->get('houseNumber'),
            $this->get('houseNumberSuffix'),
            $this->get('stateCode'),
            $this->get('street'),
            $this->get('streetInfo'),
            $this->get('zip')
        );
    }
}
