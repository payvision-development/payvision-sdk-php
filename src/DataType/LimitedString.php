<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\DataType;

use Payvision\SDK\Exception\DataTypeException;

class LimitedString implements DataType
{
    /**
     * @var int
     */
    private $maxLength;

    /**
     * @var string
     */
    private $str;

    /**
     * LimitedString constructor.
     *
     * @param string|null $str
     * @param int $maxLength
     * @throws DataTypeException
     */
    public function __construct(string $str = null, int $maxLength = 255)
    {
        $this->maxLength = $maxLength;
        $this->set($str);
    }

    /**
     * @param string $str
     * @throws DataTypeException
     */
    private function set(string $str = null)
    {
        if (\strlen((string)$str) > $this->maxLength) {
            throw new DataTypeException(
                \sprintf('String exceeds the maximum length of %1$d', $this->maxLength),
                DataTypeException::STRING_TOO_LONG
            );
        }

        $this->str = $str;
    }

    /**
     * @return string|null
     */
    public function get()
    {
        return $this->str;
    }
}
