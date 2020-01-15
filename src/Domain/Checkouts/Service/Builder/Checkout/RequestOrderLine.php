<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\Service\Builder\Checkout;

use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\RequestOrderLine as RequestOrderLineObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class RequestOrderLine extends Basic
{
    /**
     * @return RequestOrderLineObject
     */
    public function build(): RequestOrderLineObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode(string $currencyCode): self
    {
        return $this->set('currencyCode', $currencyCode);
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
     * @param float $discountAmount
     * @return self
     */
    public function setDiscountAmount(float $discountAmount): self
    {
        return $this->set('discountAmount', $discountAmount);
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
     * @param string $productName
     * @return self
     */
    public function setProductName(string $productName): self
    {
        return $this->set('productName', $productName);
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
     * @param int $sequenceNumber
     * @return self
     */
    public function setSequenceNumber(int $sequenceNumber): self
    {
        return $this->set('sequenceNumber', $sequenceNumber);
    }

    /**
     * @param float $shippingAmount
     * @return self
     */
    public function setShippingAmount(float $shippingAmount): self
    {
        return $this->set('shippingAmount', $shippingAmount);
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
     * @return RequestOrderLineObject
     */
    protected function buildObject(): RequestOrderLineObject
    {
        return new RequestOrderLineObject(
            $this->get('currencyCode'),
            $this->get('description'),
            $this->get('discountAmount'),
            $this->get('itemAmount'),
            $this->get('productCode'),
            $this->get('productName'),
            $this->get('purchaseType'),
            $this->get('quantity'),
            $this->get('sequenceNumber'),
            $this->get('shippingAmount'),
            $this->get('taxPercentage'),
            $this->get('totalAmount')
        );
    }
}
