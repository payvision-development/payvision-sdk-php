<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\DataType;

use Payvision\SDK\Exception\DataTypeException;

class NonNegativeAmount implements DataType
{
    /**
     * @var float
     */
    private $amount;

    /**
     * Amount constructor.
     *
     * @param float $amount
     * @throws DataTypeException
     */
    public function __construct(float $amount = null)
    {
        $this->set($amount);
    }

    /**
     * @param float $amount
     * @throws DataTypeException
     */
    public function set(float $amount = null): void
    {
        if ($amount < 0) {
            throw new DataTypeException(
                'Amount cannot be negative',
                DataTypeException::AMOUNT_CANNOT_BE_NEGATIVE
            );
        }

        $this->amount = $amount;
    }

    /**
     * @return float|null
     */
    public function get(): ?float
    {
        return $this->amount;
    }
}
