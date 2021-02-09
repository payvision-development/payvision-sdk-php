<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
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
     * @return RequestOrderLine
     */
    public function setCurrencyCode(string $currencyCode): RequestOrderLine
    {
        return $this->set('currencyCode', $currencyCode);
    }

    /**
     * @param string $description
     * @return RequestOrderLine
     */
    public function setDescription(string $description): RequestOrderLine
    {
        return $this->set('description', $description);
    }

    /**
     * @param float $discountAmount
     * @return RequestOrderLine
     */
    public function setDiscountAmount(float $discountAmount): RequestOrderLine
    {
        return $this->set('discountAmount', $discountAmount);
    }

    /**
     * @param float $itemAmount
     * @return RequestOrderLine
     */
    public function setItemAmount(float $itemAmount): RequestOrderLine
    {
        return $this->set('itemAmount', $itemAmount);
    }

    /**
     * @param string $productCode
     * @return RequestOrderLine
     */
    public function setProductCode(string $productCode): RequestOrderLine
    {
        return $this->set('productCode', $productCode);
    }

    /**
     * @param string $productName
     * @return RequestOrderLine
     */
    public function setProductName(string $productName): RequestOrderLine
    {
        return $this->set('productName', $productName);
    }

    /**
     * @param string $purchaseType
     * @return RequestOrderLine
     */
    public function setPurchaseType(string $purchaseType): RequestOrderLine
    {
        return $this->set('purchaseType', $purchaseType);
    }

    /**
     * @param int $quantity
     * @return RequestOrderLine
     */
    public function setQuantity(int $quantity): RequestOrderLine
    {
        return $this->set('quantity', $quantity);
    }

    /**
     * @param int $sequenceNumber
     * @return RequestOrderLine
     */
    public function setSequenceNumber(int $sequenceNumber): RequestOrderLine
    {
        return $this->set('sequenceNumber', $sequenceNumber);
    }

    /**
     * @param float $shippingAmount
     * @return RequestOrderLine
     */
    public function setShippingAmount(float $shippingAmount): RequestOrderLine
    {
        return $this->set('shippingAmount', $shippingAmount);
    }

    /**
     * @param float $taxPercentage
     * @return RequestOrderLine
     */
    public function setTaxPercentage(float $taxPercentage): RequestOrderLine
    {
        return $this->set('taxPercentage', $taxPercentage);
    }

    /**
     * @param float $totalAmount
     * @return RequestOrderLine
     */
    public function setTotalAmount(float $totalAmount): RequestOrderLine
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
