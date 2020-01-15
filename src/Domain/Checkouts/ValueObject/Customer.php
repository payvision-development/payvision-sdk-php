<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\ValueObject;

class Customer
{
    const SEX_MALE = 'M';
    const SEX_FEMALE = 'F';

    const IDENTIFICATION_TYPE_PASSPORT = 1;
    const IDENTIFICATION_TYPE_DRIVERS_LICENCE = 2;
    const IDENTIFICATION_TYPE_ID_CARD = 3;
    const IDENTIFICATION_TYPE_TAX_STATEMENT = 4;

    const CUSTOMER_TYPE_PERSONAL = 1;
    const CUSTOMER_TYPE_COMPANY = 2;

    const DEVICE_TYPE_DESKTOP_WEB = 1;
    const DEVICE_TYPE_DESKTOP_APP = 2;
    const DEVICE_TYPE_MOBILE_WEB = 3;
    const DEVICE_TYPE_MOBILE_APP = 4;
    const DEVICE_TYPE_TABLET_WEB = 5;
    const DEVICE_TYPE_TABLET_APP = 6;

    /**
     * @var string
     */
    private $ipAddress;

    /**
     * @var \Payvision\SDK\DataType\Date
     */
    private $birthDate;

    /**
     * @var string
     */
    private $companyName;

    /**
     * @var string
     */
    private $customerId;

    /**
     * @var string
     */
    private $deviceType;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $familyName;

    /**
     * @var string
     */
    private $givenName;

    /**
     * @var string
     */
    private $httpUserAgent;

    /**
     * @var string
     */
    private $identificationNumber;

    /**
     * @var int
     */
    private $identificationTypeId;

    /**
     * @var string
     */
    private $mobileNumber;

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * @var string
     */
    private $sex;

    /**
     * @var string
     */
    private $taxNumber;

    /**
     * @var int
     */
    private $type;

    /**
     * Customer constructor.
     *
     * @param string $ipAddress
     * @param \Payvision\SDK\DataType\Date $birthDate
     * @param string $companyName
     * @param string $customerId
     * @param string $deviceType
     * @param string $email
     * @param string $familyName
     * @param string $givenName
     * @param string $httpUserAgent
     * @param string $identificationNumber
     * @param int $identificationTypeId
     * @param string $mobileNumber
     * @param string $phoneNumber
     * @param string $sex
     * @param string $taxNumber
     * @param int $type
     */
    public function __construct(
        string $ipAddress,
        \Payvision\SDK\DataType\Date $birthDate = null,
        string $companyName = null,
        string $customerId = null,
        string $deviceType = null,
        string $email = null,
        string $familyName = null,
        string $givenName = null,
        string $httpUserAgent = null,
        string $identificationNumber = null,
        int $identificationTypeId = null,
        string $mobileNumber = null,
        string $phoneNumber = null,
        string $sex = null,
        string $taxNumber = null,
        int $type = null
    ) {
        $this->ipAddress = $ipAddress;
        $this->birthDate = $birthDate;
        $this->companyName = $companyName;
        $this->customerId = $customerId;
        $this->deviceType = $deviceType;
        $this->email = $email;
        $this->familyName = $familyName;
        $this->givenName = $givenName;
        $this->httpUserAgent = $httpUserAgent;
        $this->identificationNumber = $identificationNumber;
        $this->identificationTypeId = $identificationTypeId;
        $this->mobileNumber = $mobileNumber;
        $this->phoneNumber = $phoneNumber;
        $this->sex = $sex;
        $this->taxNumber = $taxNumber;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @return \Payvision\SDK\DataType\Date|null
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @return string|null
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @return string|null
     */
    public function getDeviceType()
    {
        return $this->deviceType;
    }

    /**
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string|null
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * @return string|null
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * @return string|null
     */
    public function getHttpUserAgent()
    {
        return $this->httpUserAgent;
    }

    /**
     * @return string|null
     */
    public function getIdentificationNumber()
    {
        return $this->identificationNumber;
    }

    /**
     * @return int|null
     */
    public function getIdentificationTypeId()
    {
        return $this->identificationTypeId;
    }

    /**
     * @return string|null
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber;
    }

    /**
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @return string|null
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @return string|null
     */
    public function getTaxNumber()
    {
        return $this->taxNumber;
    }

    /**
     * @return int|null
     */
    public function getType()
    {
        return $this->type;
    }
}
