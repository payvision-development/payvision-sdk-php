<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Payment;

class RequestOption
{
    /**
     * @var string
     */
    private $brandName;

    /**
     * @var string
     */
    private $cartBorderColor;

    /**
     * @var string
     */
    private $countryRestriction;

    /**
     * @var string
     */
    private $headerImage;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var int
     */
    private $minAgeRestriction;

    /**
     * @var int
     */
    private $noShipping;

    /**
     * @var int
     */
    private $processingType;

    /**
     * @var int
     */
    private $quantity;

    /**
     * RequestOption constructor.
     *
     * @param string $brandName
     * @param string $cartBorderColor
     * @param string $countryRestriction
     * @param string $headerImage
     * @param string $locale
     * @param int $minAgeRestriction
     * @param int $noShipping
     * @param int $processingType
     * @param int $quantity
     */
    public function __construct(
        string $brandName = null,
        string $cartBorderColor = null,
        string $countryRestriction = null,
        string $headerImage = null,
        string $locale = null,
        int $minAgeRestriction = null,
        int $noShipping = null,
        int $processingType = null,
        int $quantity = null
    ) {
        $this->brandName = $brandName;
        $this->cartBorderColor = $cartBorderColor;
        $this->countryRestriction = $countryRestriction;
        $this->headerImage = $headerImage;
        $this->locale = $locale;
        $this->minAgeRestriction = $minAgeRestriction;
        $this->noShipping = $noShipping;
        $this->processingType = $processingType;
        $this->quantity = $quantity;
    }

    /**
     * @return string|null
     */
    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * @return string|null
     */
    public function getCartBorderColor()
    {
        return $this->cartBorderColor;
    }

    /**
     * @return string|null
     */
    public function getCountryRestriction()
    {
        return $this->countryRestriction;
    }

    /**
     * @return string|null
     */
    public function getHeaderImage()
    {
        return $this->headerImage;
    }

    /**
     * @return string|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @return int|null
     */
    public function getMinAgeRestriction()
    {
        return $this->minAgeRestriction;
    }

    /**
     * @return int|null
     */
    public function getNoShipping()
    {
        return $this->noShipping;
    }

    /**
     * @return int|null
     */
    public function getProcessingType()
    {
        return $this->processingType;
    }

    /**
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
}
