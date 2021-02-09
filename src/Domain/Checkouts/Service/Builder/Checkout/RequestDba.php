<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\Service\Builder\Checkout;

use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\RequestDba as RequestDbaObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class RequestDba extends Basic
{
    /**
     * @return RequestDbaObject
     */
    public function build(): RequestDbaObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param string $city
     * @return RequestDba
     */
    public function setCity(string $city): RequestDba
    {
        return $this->set('city', $city);
    }

    /**
     * @param string $countryCode
     * @return RequestDba
     */
    public function setCountryCode(string $countryCode): RequestDba
    {
        return $this->set('countryCode', $countryCode);
    }

    /**
     * @param string $email
     * @return RequestDba
     */
    public function setEmail(string $email): RequestDba
    {
        return $this->set('email', $email);
    }

    /**
     * @param string $name
     * @return RequestDba
     */
    public function setName(string $name): RequestDba
    {
        return $this->set('name', $name);
    }

    /**
     * @param string $phoneNumber
     * @return RequestDba
     */
    public function setPhoneNumber(string $phoneNumber): RequestDba
    {
        return $this->set('phoneNumber', $phoneNumber);
    }

    /**
     * @param string $shortName
     * @return RequestDba
     */
    public function setShortName(string $shortName): RequestDba
    {
        return $this->set('shortName', $shortName);
    }

    /**
     * @param string $stateCode
     * @return RequestDba
     */
    public function setStateCode(string $stateCode): RequestDba
    {
        return $this->set('stateCode', $stateCode);
    }

    /**
     * @param string $street
     * @return RequestDba
     */
    public function setStreet(string $street): RequestDba
    {
        return $this->set('street', $street);
    }

    /**
     * @param string $subMerchantId
     * @return RequestDba
     */
    public function setSubMerchantId(string $subMerchantId): RequestDba
    {
        return $this->set('subMerchantId', $subMerchantId);
    }

    /**
     * @param string $zip
     * @return RequestDba
     */
    public function setZip(string $zip): RequestDba
    {
        return $this->set('zip', $zip);
    }

    /**
     * @return RequestDbaObject
     */
    protected function buildObject(): RequestDbaObject
    {
        return new RequestDbaObject(
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
