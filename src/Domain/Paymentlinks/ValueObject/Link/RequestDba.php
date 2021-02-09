<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\ValueObject\Link;

class RequestDba
{
    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $countryCode;

    /**
     * @var string
     */
    private $email;

    /**
     * @var int
     */
    private $merchantCategoryCode;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * @var string
     */
    private $shortName;

    /**
     * @var string
     */
    private $stateCode;

    /**
     * @var string
     */
    private $street;

    /**
     * @var string
     */
    private $subMerchantId;

    /**
     * @var string
     */
    private $website;

    /**
     * @var string
     */
    private $zip;

    /**
     * RequestDba constructor.
     *
     * @param string $city
     * @param string $countryCode
     * @param string $email
     * @param int $merchantCategoryCode
     * @param string $name
     * @param string $phoneNumber
     * @param string $shortName
     * @param string $stateCode
     * @param string $street
     * @param string $subMerchantId
     * @param string $website
     * @param string $zip
     */
    public function __construct(
        string $city = null,
        string $countryCode = null,
        string $email = null,
        int $merchantCategoryCode = null,
        string $name = null,
        string $phoneNumber = null,
        string $shortName = null,
        string $stateCode = null,
        string $street = null,
        string $subMerchantId = null,
        string $website = null,
        string $zip = null
    ) {
        $this->city = $city;
        $this->countryCode = $countryCode;
        $this->email = $email;
        $this->merchantCategoryCode = $merchantCategoryCode;
        $this->name = $name;
        $this->phoneNumber = $phoneNumber;
        $this->shortName = $shortName;
        $this->stateCode = $stateCode;
        $this->street = $street;
        $this->subMerchantId = $subMerchantId;
        $this->website = $website;
        $this->zip = $zip;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @return int|null
     */
    public function getMerchantCategoryCode(): ?int
    {
        return $this->merchantCategoryCode;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * @return string|null
     */
    public function getShortName(): ?string
    {
        return $this->shortName;
    }

    /**
     * @return string|null
     */
    public function getStateCode(): ?string
    {
        return $this->stateCode;
    }

    /**
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @return string|null
     */
    public function getSubMerchantId(): ?string
    {
        return $this->subMerchantId;
    }

    /**
     * @return string|null
     */
    public function getWebsite(): ?string
    {
        return $this->website;
    }

    /**
     * @return string|null
     */
    public function getZip(): ?string
    {
        return $this->zip;
    }
}
