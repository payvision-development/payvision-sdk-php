<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject;

class ThreeDSecureRecurringInfo
{
    /**
     * @var \Payvision\SDK\DataType\DateTime
     */
    private $purchaseDate;

    /**
     * @var \Payvision\SDK\DataType\Date
     */
    private $recurringEnd;

    /**
     * @var int
     */
    private $recurringFrequency;

    /**
     * ThreeDSecureRecurringInfo constructor.
     *
     * @param \Payvision\SDK\DataType\DateTime $purchaseDate
     * @param \Payvision\SDK\DataType\Date $recurringEnd
     * @param int $recurringFrequency
     */
    public function __construct(
        \Payvision\SDK\DataType\DateTime $purchaseDate = null,
        \Payvision\SDK\DataType\Date $recurringEnd = null,
        int $recurringFrequency = null
    ) {
        $this->purchaseDate = $purchaseDate;
        $this->recurringEnd = $recurringEnd;
        $this->recurringFrequency = $recurringFrequency;
    }

    /**
     * @return \Payvision\SDK\DataType\DateTime|null
     */
    public function getPurchaseDate(): ?\Payvision\SDK\DataType\DateTime
    {
        return $this->purchaseDate;
    }

    /**
     * @return \Payvision\SDK\DataType\Date|null
     */
    public function getRecurringEnd(): ?\Payvision\SDK\DataType\Date
    {
        return $this->recurringEnd;
    }

    /**
     * @return int|null
     */
    public function getRecurringFrequency(): ?int
    {
        return $this->recurringFrequency;
    }
}
