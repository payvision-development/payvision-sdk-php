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
     * @return OrderLine
     */
    public function setDescription(string $description): OrderLine
    {
        return $this->set('description', $description);
    }

    /**
     * @param float $itemAmount
     * @return OrderLine
     */
    public function setItemAmount(float $itemAmount): OrderLine
    {
        return $this->set('itemAmount', $itemAmount);
    }

    /**
     * @param string $productCode
     * @return OrderLine
     */
    public function setProductCode(string $productCode): OrderLine
    {
        return $this->set('productCode', $productCode);
    }

    /**
     * @param string $purchaseType
     * @return OrderLine
     */
    public function setPurchaseType(string $purchaseType): OrderLine
    {
        return $this->set('purchaseType', $purchaseType);
    }

    /**
     * @param int $quantity
     * @return OrderLine
     */
    public function setQuantity(int $quantity): OrderLine
    {
        return $this->set('quantity', $quantity);
    }

    /**
     * @param float $taxPercentage
     * @return OrderLine
     */
    public function setTaxPercentage(float $taxPercentage): OrderLine
    {
        return $this->set('taxPercentage', $taxPercentage);
    }

    /**
     * @param float $totalAmount
     * @return OrderLine
     */
    public function setTotalAmount(float $totalAmount): OrderLine
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
