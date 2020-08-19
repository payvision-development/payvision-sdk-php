<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Payment;

use Payvision\SDK\Domain\Payments\ValueObject\Payment\RequestOption as RequestOptionObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class RequestOption extends Basic
{
    /**
     * @return RequestOptionObject
     */
    public function build(): RequestOptionObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param string $brandName
     * @return RequestOption
     */
    public function setBrandName(string $brandName): RequestOption
    {
        return $this->set('brandName', $brandName);
    }

    /**
     * @param string $cartBorderColor
     * @return RequestOption
     */
    public function setCartBorderColor(string $cartBorderColor): RequestOption
    {
        return $this->set('cartBorderColor', $cartBorderColor);
    }

    /**
     * @param string $countryRestriction
     * @return RequestOption
     */
    public function setCountryRestriction(string $countryRestriction): RequestOption
    {
        return $this->set('countryRestriction', $countryRestriction);
    }

    /**
     * @param string $headerImage
     * @return RequestOption
     */
    public function setHeaderImage(string $headerImage): RequestOption
    {
        return $this->set('headerImage', $headerImage);
    }

    /**
     * @param string $locale
     * @return RequestOption
     */
    public function setLocale(string $locale): RequestOption
    {
        return $this->set('locale', $locale);
    }

    /**
     * @param int $minAgeRestriction
     * @return RequestOption
     */
    public function setMinAgeRestriction(int $minAgeRestriction): RequestOption
    {
        return $this->set('minAgeRestriction', $minAgeRestriction);
    }

    /**
     * @param int $noShipping
     * @return RequestOption
     */
    public function setNoShipping(int $noShipping): RequestOption
    {
        return $this->set('noShipping', $noShipping);
    }

    /**
     * @param int $processingType
     * @return RequestOption
     */
    public function setProcessingType(int $processingType): RequestOption
    {
        return $this->set('processingType', $processingType);
    }

    /**
     * @param int $quantity
     * @return RequestOption
     */
    public function setQuantity(int $quantity): RequestOption
    {
        return $this->set('quantity', $quantity);
    }

    /**
     * @return RequestOptionObject
     */
    protected function buildObject(): RequestOptionObject
    {
        return new RequestOptionObject(
            $this->get('brandName'),
            $this->get('cartBorderColor'),
            $this->get('countryRestriction'),
            $this->get('headerImage'),
            $this->get('locale'),
            $this->get('minAgeRestriction'),
            $this->get('noShipping'),
            $this->get('processingType'),
            $this->get('quantity')
        );
    }
}
