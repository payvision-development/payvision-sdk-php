<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\Service\Builder\Link;

use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\RequestDba as RequestDbaObject;
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
     * @param string $email
     * @return self
     */
    public function setEmail(string $email): self
    {
        return $this->set('email', $email);
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(string $name): self
    {
        return $this->set('name', $name);
    }

    /**
     * @param string $phoneNumber
     * @return self
     */
    public function setPhoneNumber(string $phoneNumber): self
    {
        return $this->set('phoneNumber', $phoneNumber);
    }

    /**
     * @param string $shortName
     * @return self
     */
    public function setShortName(string $shortName): self
    {
        return $this->set('shortName', $shortName);
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
     * @param string $subMerchantId
     * @return self
     */
    public function setSubMerchantId(string $subMerchantId): self
    {
        return $this->set('subMerchantId', $subMerchantId);
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
