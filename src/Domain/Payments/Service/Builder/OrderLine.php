<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder;

use Payvision\SDK\Domain\Payments\ValueObject\OrderLine as OrderLineObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class OrderLine extends Basic
{
    /**
     * @return OrderLineObject
     */
    public function build(): OrderLineObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param string $description
     * @return self
     */
    public function setDescription(string $description): self
    {
        return $this->set('description', $description);
    }

    /**
     * @param float $itemAmount
     * @return self
     */
    public function setItemAmount(float $itemAmount): self
    {
        return $this->set('itemAmount', $itemAmount);
    }

    /**
     * @param string $productCode
     * @return self
     */
    public function setProductCode(string $productCode): self
    {
        return $this->set('productCode', $productCode);
    }

    /**
     * @param string $purchaseType
     * @return self
     */
    public function setPurchaseType(string $purchaseType): self
    {
        return $this->set('purchaseType', $purchaseType);
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
     * @param float $taxPercentage
     * @return self
     */
    public function setTaxPercentage(float $taxPercentage): self
    {
        return $this->set('taxPercentage', $taxPercentage);
    }

    /**
     * @param float $totalAmount
     * @return self
     */
    public function setTotalAmount(float $totalAmount): self
    {
        return $this->set('totalAmount', $totalAmount);
    }

    /**
     * @return OrderLineObject
     */
    protected function buildObject(): OrderLineObject
    {
        return new OrderLineObject(
            $this->get('description'),
            $this->get('itemAmount'),
            $this->get('productCode'),
            $this->get('purchaseType'),
            $this->get('quantity'),
            $this->get('taxPercentage'),
            $this->get('totalAmount')
        );
    }
}
