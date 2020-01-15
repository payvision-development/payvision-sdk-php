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
     * @return self
     */
    public function setBrandName(string $brandName): self
    {
        return $this->set('brandName', $brandName);
    }

    /**
     * @param string $cartBorderColor
     * @return self
     */
    public function setCartBorderColor(string $cartBorderColor): self
    {
        return $this->set('cartBorderColor', $cartBorderColor);
    }

    /**
     * @param string $countryRestriction
     * @return self
     */
    public function setCountryRestriction(string $countryRestriction): self
    {
        return $this->set('countryRestriction', $countryRestriction);
    }

    /**
     * @param string $headerImage
     * @return self
     */
    public function setHeaderImage(string $headerImage): self
    {
        return $this->set('headerImage', $headerImage);
    }

    /**
     * @param string $locale
     * @return self
     */
    public function setLocale(string $locale): self
    {
        return $this->set('locale', $locale);
    }

    /**
     * @param int $minAgeRestriction
     * @return self
     */
    public function setMinAgeRestriction(int $minAgeRestriction): self
    {
        return $this->set('minAgeRestriction', $minAgeRestriction);
    }

    /**
     * @param int $noShipping
     * @return self
     */
    public function setNoShipping(int $noShipping): self
    {
        return $this->set('noShipping', $noShipping);
    }

    /**
     * @param int $processingType
     * @return self
     */
    public function setProcessingType(int $processingType): self
    {
        return $this->set('processingType', $processingType);
    }

    /**
     * @param int $quantity
     * @return self
     */
    public function setQuantity(int $quantity): self
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
