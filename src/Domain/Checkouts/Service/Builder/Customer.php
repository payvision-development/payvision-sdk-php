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
     * @return Customer
     */
    public function setIpAddress(string $ipAddress): Customer
    {
        return $this->set('ipAddress', $ipAddress);
    }

    /**
     * @param \Payvision\SDK\DataType\Date $birthDate
     * @return Customer
     */
    public function setBirthDate(\Payvision\SDK\DataType\Date $birthDate): Customer
    {
        return $this->set('birthDate', $birthDate);
    }

    /**
     * @param string $companyName
     * @return Customer
     */
    public function setCompanyName(string $companyName): Customer
    {
        return $this->set('companyName', $companyName);
    }

    /**
     * @param string $customerId
     * @return Customer
     */
    public function setCustomerId(string $customerId): Customer
    {
        return $this->set('customerId', $customerId);
    }

    /**
     * @param string $deviceType
     * @return Customer
     */
    public function setDeviceType(string $deviceType): Customer
    {
        return $this->set('deviceType', $deviceType);
    }

    /**
     * @param string $email
     * @return Customer
     */
    public function setEmail(string $email): Customer
    {
        return $this->set('email', $email);
    }

    /**
     * @param string $familyName
     * @return Customer
     */
    public function setFamilyName(string $familyName): Customer
    {
        return $this->set('familyName', $familyName);
    }

    /**
     * @param string $givenName
     * @return Customer
     */
    public function setGivenName(string $givenName): Customer
    {
        return $this->set('givenName', $givenName);
    }

    /**
     * @param string $httpUserAgent
     * @return Customer
     */
    public function setHttpUserAgent(string $httpUserAgent): Customer
    {
        return $this->set('httpUserAgent', $httpUserAgent);
    }

    /**
     * @param string $identificationNumber
     * @return Customer
     */
    public function setIdentificationNumber(string $identificationNumber): Customer
    {
        return $this->set('identificationNumber', $identificationNumber);
    }

    /**
     * @param int $identificationTypeId
     * @return Customer
     */
    public function setIdentificationTypeId(int $identificationTypeId): Customer
    {
        return $this->set('identificationTypeId', $identificationTypeId);
    }

    /**
     * @param string $mobileNumber
     * @return Customer
     */
    public function setMobileNumber(string $mobileNumber): Customer
    {
        return $this->set('mobileNumber', $mobileNumber);
    }

    /**
     * @param string $phoneNumber
     * @return Customer
     */
    public function setPhoneNumber(string $phoneNumber): Customer
    {
        return $this->set('phoneNumber', $phoneNumber);
    }

    /**
     * @param string $sex
     * @return Customer
     */
    public function setSex(string $sex): Customer
    {
        return $this->set('sex', $sex);
    }

    /**
     * @param string $taxNumber
     * @return Customer
     */
    public function setTaxNumber(string $taxNumber): Customer
    {
        return $this->set('taxNumber', $taxNumber);
    }

    /**
     * @param int $type
     * @return Customer
     */
    public function setType(int $type): Customer
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
