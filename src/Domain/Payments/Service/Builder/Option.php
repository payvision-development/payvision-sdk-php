<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder;

use Payvision\SDK\Domain\Payments\ValueObject\Option as OptionObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Option extends Basic
{
    public function build(): OptionObject
    {
        return $this->buildAndReset();
    }

    public function setBrandName(string $brandName): self
    {
        return $this->set('brandName', $brandName);
    }

    public function setCartBorderColor(string $cartBorderColor): self
    {
        return $this->set('cartBorderColor', $cartBorderColor);
    }

    public function setCountryRestriction(string $countryRestriction): self
    {
        return $this->set('countryRestriction', $countryRestriction);
    }

    public function setHeaderImage(string $headerImage): self
    {
        return $this->set('headerImage', $headerImage);
    }

    public function setLocale(string $locale): self
    {
        return $this->set('locale', $locale);
    }

    public function setMinAgeRestriction(int $minAgeRestriction): self
    {
        return $this->set('minAgeRestriction', $minAgeRestriction);
    }

    public function setNoShipping(int $noShipping): self
    {
        return $this->set('noShipping', $noShipping);
    }

    public function setProcessingType(int $processingType): self
    {
        return $this->set('processingType', $processingType);
    }

    public function setQuantity(int $quantity): self
    {
        return $this->set('quantity', $quantity);
    }

    protected function buildObject(): OptionObject
    {
        return new OptionObject(
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
