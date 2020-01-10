<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license proprietary
 */

namespace Payvision\SDK\DataType;

use Payvision\SDK\Exception\DataTypeException;

class Enumerated implements DataType
{
    /**
     * @var null|mixed
     */
    private $value;

    /**
     * Enumerated constructor.
     *
     * @param null $value
     * @param array $allowedValues
     * @throws DataTypeException
     */
    public function __construct($value = null, array $allowedValues = [])
    {
        if ($value !== null && !\in_array($value, $allowedValues)) {
            throw new DataTypeException(
                \sprintf(
                    'Value "%1$s" is not allowed. Allowed values are: %2$s',
                    $value,
                    \implode(', ', $allowedValues)
                ),
                DataTypeException::VALUE_NOT_ALLOWED
            );
        }

        $this->value = $value;
    }

    // phpcs:disable SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint

    /**
     * @return mixed|null
     */
    public function get()
    {
        return $this->value;
    }
    // phpcs:enable SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint
}
