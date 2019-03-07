<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder;

use Payvision\SDK\Domain\Payments\ValueObject\Customer as CustomerObject;
use Payvision\SDK\Domain\Service\Builder\Basic;
use DateTime;

class Customer extends Basic
{
    public function build(): CustomerObject
    {
        return $this->buildAndReset();
    }

    public function setIpAddress(string $ipAddress): self
    {
        return $this->set('ipAddress', $ipAddress);
    }

    public function setBirthDate(DateTime $birthDate): self
    {
        return $this->set('birthDate', $birthDate);
    }

    public function setCompanyName(string $companyName): self
    {
        return $this->set('companyName', $companyName);
    }

    public function setCustomerId(string $customerId): self
    {
        return $this->set('customerId', $customerId);
    }

    public function setDeviceType(int $deviceType): self
    {
        return $this->set('deviceType', $deviceType);
    }

    public function setEmail(string $email): self
    {
        return $this->set('email', $email);
    }

    public function setFamilyName(string $familyName): self
    {
        return $this->set('familyName', $familyName);
    }

    public function setGivenName(string $givenName): self
    {
        return $this->set('givenName', $givenName);
    }

    public function setHttpUserAgent(string $httpUserAgent): self
    {
        return $this->set('httpUserAgent', $httpUserAgent);
    }

    public function setIdentificationNumber(string $identificationNumber): self
    {
        return $this->set('identificationNumber', $identificationNumber);
    }

    public function setIdentificationTypeId(int $identificationTypeId): self
    {
        return $this->set('identificationTypeId', $identificationTypeId);
    }

    public function setMobileNumber(string $mobileNumber): self
    {
        return $this->set('mobileNumber', $mobileNumber);
    }

    public function setPhoneNumber(string $phoneNumber): self
    {
        return $this->set('phoneNumber', $phoneNumber);
    }

    public function setSex(string $sex): self
    {
        return $this->set('sex', $sex);
    }

    public function setTaxNumber(string $taxNumber): self
    {
        return $this->set('taxNumber', $taxNumber);
    }

    public function setType(int $type): self
    {
        return $this->set('type', $type);
    }

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
