<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
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
     * @return RequestBillingAddress
     */
    public function setCity(string $city): RequestBillingAddress
    {
        return $this->set('city', $city);
    }

    /**
     * @param string $countryCode
     * @return RequestBillingAddress
     */
    public function setCountryCode(string $countryCode): RequestBillingAddress
    {
        return $this->set('countryCode', $countryCode);
    }

    /**
     * @param string $houseNumber
     * @return RequestBillingAddress
     */
    public function setHouseNumber(string $houseNumber): RequestBillingAddress
    {
        return $this->set('houseNumber', $houseNumber);
    }

    /**
     * @param string $houseNumberSuffix
     * @return RequestBillingAddress
     */
    public function setHouseNumberSuffix(string $houseNumberSuffix): RequestBillingAddress
    {
        return $this->set('houseNumberSuffix', $houseNumberSuffix);
    }

    /**
     * @param string $stateCode
     * @return RequestBillingAddress
     */
    public function setStateCode(string $stateCode): RequestBillingAddress
    {
        return $this->set('stateCode', $stateCode);
    }

    /**
     * @param string $street
     * @return RequestBillingAddress
     */
    public function setStreet(string $street): RequestBillingAddress
    {
        return $this->set('street', $street);
    }

    /**
     * @param string $streetInfo
     * @return RequestBillingAddress
     */
    public function setStreetInfo(string $streetInfo): RequestBillingAddress
    {
        return $this->set('streetInfo', $streetInfo);
    }

    /**
     * @param string $zip
     * @return RequestBillingAddress
     */
    public function setZip(string $zip): RequestBillingAddress
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
