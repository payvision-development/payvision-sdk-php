<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\Service\Builder;

use Payvision\SDK\Domain\Paymentlinks\ValueObject\BasicCustomer as BasicCustomerObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class BasicCustomer extends Basic
{
    /**
     * @return BasicCustomerObject
     */
    public function build(): BasicCustomerObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param string $ipAddress
     * @return BasicCustomer
     */
    public function setIpAddress(string $ipAddress): BasicCustomer
    {
        return $this->set('ipAddress', $ipAddress);
    }

    /**
     * @param \Payvision\SDK\DataType\Date $birthDate
     * @return BasicCustomer
     */
    public function setBirthDate(\Payvision\SDK\DataType\Date $birthDate): BasicCustomer
    {
        return $this->set('birthDate', $birthDate);
    }

    /**
     * @param string $companyName
     * @return BasicCustomer
     */
    public function setCompanyName(string $companyName): BasicCustomer
    {
        return $this->set('companyName', $companyName);
    }

    /**
     * @param string $customerId
     * @return BasicCustomer
     */
    public function setCustomerId(string $customerId): BasicCustomer
    {
        return $this->set('customerId', $customerId);
    }

    /**
     * @param string $deviceType
     * @return BasicCustomer
     */
    public function setDeviceType(string $deviceType): BasicCustomer
    {
        return $this->set('deviceType', $deviceType);
    }

    /**
     * @param string $email
     * @return BasicCustomer
     */
    public function setEmail(string $email): BasicCustomer
    {
        return $this->set('email', $email);
    }

    /**
     * @param string $familyName
     * @return BasicCustomer
     */
    public function setFamilyName(string $familyName): BasicCustomer
    {
        return $this->set('familyName', $familyName);
    }

    /**
     * @param string $givenName
     * @return BasicCustomer
     */
    public function setGivenName(string $givenName): BasicCustomer
    {
        return $this->set('givenName', $givenName);
    }

    /**
     * @param string $httpUserAgent
     * @return BasicCustomer
     */
    public function setHttpUserAgent(string $httpUserAgent): BasicCustomer
    {
        return $this->set('httpUserAgent', $httpUserAgent);
    }

    /**
     * @param string $identificationNumber
     * @return BasicCustomer
     */
    public function setIdentificationNumber(string $identificationNumber): BasicCustomer
    {
        return $this->set('identificationNumber', $identificationNumber);
    }

    /**
     * @param int $identificationTypeId
     * @return BasicCustomer
     */
    public function setIdentificationTypeId(int $identificationTypeId): BasicCustomer
    {
        return $this->set('identificationTypeId', $identificationTypeId);
    }

    /**
     * @param string $mobileNumber
     * @return BasicCustomer
     */
    public function setMobileNumber(string $mobileNumber): BasicCustomer
    {
        return $this->set('mobileNumber', $mobileNumber);
    }

    /**
     * @param string $phoneNumber
     * @return BasicCustomer
     */
    public function setPhoneNumber(string $phoneNumber): BasicCustomer
    {
        return $this->set('phoneNumber', $phoneNumber);
    }

    /**
     * @param string $sex
     * @return BasicCustomer
     */
    public function setSex(string $sex): BasicCustomer
    {
        return $this->set('sex', $sex);
    }

    /**
     * @param string $taxNumber
     * @return BasicCustomer
     */
    public function setTaxNumber(string $taxNumber): BasicCustomer
    {
        return $this->set('taxNumber', $taxNumber);
    }

    /**
     * @param int $type
     * @return BasicCustomer
     */
    public function setType(int $type): BasicCustomer
    {
        return $this->set('type', $type);
    }

    /**
     * @return BasicCustomerObject
     */
    protected function buildObject(): BasicCustomerObject
    {
        return new BasicCustomerObject(
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
