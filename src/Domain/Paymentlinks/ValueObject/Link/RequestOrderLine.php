<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\ValueObject\Link;

class RequestOrderLine
{
    /**
     * @var string
     */
    private $currencyCode;

    /**
     * @var string
     */
    private $description;

    /**
     * @var float
     */
    private $discountAmount;

    /**
     * @var float
     */
    private $itemAmount;

    /**
     * @var string
     */
    private $productCode;

    /**
     * @var string
     */
    private $productName;

    /**
     * @var string
     */
    private $purchaseType;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @var int
     */
    private $sequenceNumber;

    /**
     * @var float
     */
    private $shippingAmount;

    /**
     * @var float
     */
    private $taxPercentage;

    /**
     * @var float
     */
    private $totalAmount;

    /**
     * RequestOrderLine constructor.
     *
     * @param string $currencyCode
     * @param string $description
     * @param float $discountAmount
     * @param float $itemAmount
     * @param string $productCode
     * @param string $productName
     * @param string $purchaseType
     * @param int $quantity
     * @param int $sequenceNumber
     * @param float $shippingAmount
     * @param float $taxPercentage
     * @param float $totalAmount
     */
    public function __construct(
        string $currencyCode = null,
        string $description = null,
        float $discountAmount = null,
        float $itemAmount = null,
        string $productCode = null,
        string $productName = null,
        string $purchaseType = null,
        int $quantity = null,
        int $sequenceNumber = null,
        float $shippingAmount = null,
        float $taxPercentage = null,
        float $totalAmount = null
    ) {
        $this->currencyCode = $currencyCode;
        $this->description = $description;
        $this->discountAmount = $discountAmount;
        $this->itemAmount = $itemAmount;
        $this->productCode = $productCode;
        $this->productName = $productName;
        $this->purchaseType = $purchaseType;
        $this->quantity = $quantity;
        $this->sequenceNumber = $sequenceNumber;
        $this->shippingAmount = $shippingAmount;
        $this->taxPercentage = $taxPercentage;
        $this->totalAmount = $totalAmount;
    }

    /**
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return float|null
     */
    public function getDiscountAmount()
    {
        return $this->discountAmount;
    }

    /**
     * @return float|null
     */
    public function getItemAmount()
    {
        return $this->itemAmount;
    }

    /**
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * @return string|null
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @return string|null
     */
    public function getPurchaseType()
    {
        return $this->purchaseType;
    }

    /**
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return int|null
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * @return float|null
     */
    public function getShippingAmount()
    {
        return $this->shippingAmount;
    }

    /**
     * @return float|null
     */
    public function getTaxPercentage()
    {
        return $this->taxPercentage;
    }

    /**
     * @return float|null
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }
}
