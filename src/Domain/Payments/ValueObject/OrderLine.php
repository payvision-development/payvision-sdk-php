<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
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
     * @param string $productCode
     * @param string $purchaseType
     * @param int $quantity
     * @param float $taxPercentage
     * @param float $totalAmount
     */
    public function __construct(
        string $description,
        string $productCode,
        string $purchaseType,
        int $quantity,
        float $taxPercentage,
        float $totalAmount
    ) {
        $this->description = $description;
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
     * @return float
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }
}
