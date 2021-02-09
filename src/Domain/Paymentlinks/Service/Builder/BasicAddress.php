<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\Service\Builder;

use Payvision\SDK\Domain\Paymentlinks\ValueObject\BasicAddress as BasicAddressObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class BasicAddress extends Basic
{
    /**
     * @return BasicAddressObject
     */
    public function build(): BasicAddressObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param string $ipAddress
     * @return BasicAddress
     */
    public function setIpAddress(string $ipAddress): BasicAddress
    {
        return $this->set('ipAddress', $ipAddress);
    }

    /**
     * @param \Payvision\SDK\DataType\Date $birthDate
     * @return BasicAddress
     */
    public function setBirthDate(\Payvision\SDK\DataType\Date $birthDate): BasicAddress
    {
        return $this->set('birthDate', $birthDate);
    }

    /**
     * @param string $companyName
     * @return BasicAddress
     */
    public function setCompanyName(string $companyName): BasicAddress
    {
        return $this->set('companyName', $companyName);
    }

    /**
     * @param string $customerId
     * @return BasicAddress
     */
    public function setCustomerId(string $customerId): BasicAddress
    {
        return $this->set('customerId', $customerId);
    }

    /**
     * @param string $deviceType
     * @return BasicAddress
     */
    public function setDeviceType(string $deviceType): BasicAddress
    {
        return $this->set('deviceType', $deviceType);
    }

    /**
     * @param string $email
     * @return BasicAddress
     */
    public function setEmail(string $email): BasicAddress
    {
        return $this->set('email', $email);
    }

    /**
     * @param string $familyName
     * @return BasicAddress
     */
    public function setFamilyName(string $familyName): BasicAddress
    {
        return $this->set('familyName', $familyName);
    }

    /**
     * @param string $givenName
     * @return BasicAddress
     */
    public function setGivenName(string $givenName): BasicAddress
    {
        return $this->set('givenName', $givenName);
    }

    /**
     * @param string $httpUserAgent
     * @return BasicAddress
     */
    public function setHttpUserAgent(string $httpUserAgent): BasicAddress
    {
        return $this->set('httpUserAgent', $httpUserAgent);
    }

    /**
     * @param string $identificationNumber
     * @return BasicAddress
     */
    public function setIdentificationNumber(string $identificationNumber): BasicAddress
    {
        return $this->set('identificationNumber', $identificationNumber);
    }

    /**
     * @param int $identificationTypeId
     * @return BasicAddress
     */
    public function setIdentificationTypeId(int $identificationTypeId): BasicAddress
    {
        return $this->set('identificationTypeId', $identificationTypeId);
    }

    /**
     * @param string $mobileNumber
     * @return BasicAddress
     */
    public function setMobileNumber(string $mobileNumber): BasicAddress
    {
        return $this->set('mobileNumber', $mobileNumber);
    }

    /**
     * @param string $phoneNumber
     * @return BasicAddress
     */
    public function setPhoneNumber(string $phoneNumber): BasicAddress
    {
        return $this->set('phoneNumber', $phoneNumber);
    }

    /**
     * @param string $sex
     * @return BasicAddress
     */
    public function setSex(string $sex): BasicAddress
    {
        return $this->set('sex', $sex);
    }

    /**
     * @param string $taxNumber
     * @return BasicAddress
     */
    public function setTaxNumber(string $taxNumber): BasicAddress
    {
        return $this->set('taxNumber', $taxNumber);
    }

    /**
     * @param int $type
     * @return BasicAddress
     */
    public function setType(int $type): BasicAddress
    {
        return $this->set('type', $type);
    }

    /**
     * @return BasicAddressObject
     */
    protected function buildObject(): BasicAddressObject
    {
        return new BasicAddressObject(
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
