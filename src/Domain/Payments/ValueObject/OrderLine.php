<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject;

class OrderLine
{
    /**
     * @var string
     */
    private $description;

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
    private $purchaseType;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @var float
     */
    private $taxPercentage;

    /**
     * @var float
     */
    private $totalAmount;

    /**
     * OrderLine constructor.
     *
     * @param string $description
     * @param float $itemAmount
     * @param string $productCode
     * @param string $purchaseType
     * @param int $quantity
     * @param float $taxPercentage
     * @param float $totalAmount
     */
    public function __construct(
        string $description,
        float $itemAmount,
        string $productCode,
        string $purchaseType,
        int $quantity,
        float $taxPercentage,
        float $totalAmount = null
    ) {
        $this->description = $description;
        $this->itemAmount = $itemAmount;
        $this->productCode = $productCode;
        $this->purchaseType = $purchaseType;
        $this->quantity = $quantity;
        $this->taxPercentage = $taxPercentage;
        $this->totalAmount = $totalAmount;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return float
     */
    public function getItemAmount()
    {
        return $this->itemAmount;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * @return string
     */
    public function getPurchaseType()
    {
        return $this->purchaseType;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return float
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
