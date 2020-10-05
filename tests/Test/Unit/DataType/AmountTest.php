<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Test\Unit\DataType;

use Payvision\SDK\DataType\NonNegativeAmount;
use Payvision\SDK\Exception\DataTypeException;
use PHPUnit\Framework\TestCase;

class AmountTest extends TestCase
{
    /**
     * @throws DataTypeException
     */
    public function testNullValue()
    {
        self::assertNull((new NonNegativeAmount(null))->get());
    }

    /**
     * @throws DataTypeException
     */
    public function testPositiveAmount()
    {
        $amount = new NonNegativeAmount(10.50);
        self::assertEquals(10.50, $amount->get());
        self::assertSame(10.50, $amount->get());
    }

    /**
     * @throws DataTypeException
     */
    public function testNegativeAmount()
    {
        $this->expectException(DataTypeException::class);
        $this->expectExceptionCode(DataTypeException::AMOUNT_CANNOT_BE_NEGATIVE);
        new NonNegativeAmount(10.00 * -1);
    }
}
