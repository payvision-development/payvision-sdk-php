<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
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
     * @return null
     */
    public function __construct(float $amount = null)
    {
        $this->set($amount);
    }

    /**
     * @param float $amount
     * @throws DataTypeException
     * @return null
     */
    public function set(float $amount = null)
    {
        if ($amount < 0) {
            throw new DataTypeException(
                'Amount cannot be negative',
                DataTypeException::AMOUNT_CANNOT_BE_NEGATIVE
            );
        }

        $this->amount = $amount;
    }

    // phpcs:disable SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint

    /**
     * @return float|null
     */
    public function get()
    {
        return $this->amount;
    }
    // phpcs:enable SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint
}
