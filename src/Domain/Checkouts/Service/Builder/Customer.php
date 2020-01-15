<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\Service\Builder;

use Payvision\SDK\Domain\Checkouts\ValueObject\Customer as CustomerObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Customer extends Basic
{
    /**
     * @return CustomerObject
     */
    public function build(): CustomerObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param string $ipAddress
     * @return self
     */
    public function setIpAddress(string $ipAddress): self
    {
        return $this->set('ipAddress', $ipAddress);
    }

    /**
     * @param \Payvision\SDK\DataType\Date $birthDate
     * @return self
     */
    public function setBirthDate(\Payvision\SDK\DataType\Date $birthDate): self
    {
        return $this->set('birthDate', $birthDate);
    }

    /**
     * @param string $companyName
     * @return self
     */
    public function setCompanyName(string $companyName): self
    {
        return $this->set('companyName', $companyName);
    }

    /**
     * @param string $customerId
     * @return self
     */
    public function setCustomerId(string $customerId): self
    {
        return $this->set('customerId', $customerId);
    }

    /**
     * @param string $deviceType
     * @return self
     */
    public function setDeviceType(string $deviceType): self
    {
        return $this->set('deviceType', $deviceType);
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
     * @param string $familyName
     * @return self
     */
    public function setFamilyName(string $familyName): self
    {
        return $this->set('familyName', $familyName);
    }

    /**
     * @param string $givenName
     * @return self
     */
    public function setGivenName(string $givenName): self
    {
        return $this->set('givenName', $givenName);
    }

    /**
     * @param string $httpUserAgent
     * @return self
     */
    public function setHttpUserAgent(string $httpUserAgent): self
    {
        return $this->set('httpUserAgent', $httpUserAgent);
    }

    /**
     * @param string $identificationNumber
     * @return self
     */
    public function setIdentificationNumber(string $identificationNumber): self
    {
        return $this->set('identificationNumber', $identificationNumber);
    }

    /**
     * @param int $identificationTypeId
     * @return self
     */
    public function setIdentificationTypeId(int $identificationTypeId): self
    {
        return $this->set('identificationTypeId', $identificationTypeId);
    }

    /**
     * @param string $mobileNumber
     * @return self
     */
    public function setMobileNumber(string $mobileNumber): self
    {
        return $this->set('mobileNumber', $mobileNumber);
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
     * @param string $sex
     * @return self
     */
    public function setSex(string $sex): self
    {
        return $this->set('sex', $sex);
    }

    /**
     * @param string $taxNumber
     * @return self
     */
    public function setTaxNumber(string $taxNumber): self
    {
        return $this->set('taxNumber', $taxNumber);
    }

    /**
     * @param int $type
     * @return self
     */
    public function setType(int $type): self
    {
        return $this->set('type', $type);
    }

    /**
     * @return CustomerObject
     */
    protected function buildObject(): CustomerObject
    {
        return new CustomerObject(
            $this->get('ipAddress'),
            $this->get('birthDate'),
            $this->get('companyName'),
            $this->get('customerId'),
            $this->get('deviceType'),
            $this->get('email'),
            $this->get('familyName'),
            $this->get('givenName'),
            $this->get('httpUserAgent'),
            $this->get('identificationNumber'),
            $this->get('identificationTypeId'),
            $this->get('mobileNumber'),
            $this->get('phoneNumber'),
            $this->get('sex'),
            $this->get('taxNumber'),
            $this->get('type')
        );
    }
}
