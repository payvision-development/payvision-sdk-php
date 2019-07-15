<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
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
     * @return null
     */
    public function testNullValue()
    {
        $this->assertNull((new NonNegativeAmount(null))->get());
    }

    /**
     * @throws DataTypeException
     * @return null
     */
    public function testPositiveAmount()
    {
        $amount = new NonNegativeAmount(10.50);
        $this->assertEquals(10.50, $amount->get());
        $this->assertSame(10.50, $amount->get());
    }

    /**
     * @throws DataTypeException
     * @return null
     */
    public function testNegativeAmount()
    {
        $this->expectException(DataTypeException::class);
        $this->expectExceptionCode(DataTypeException::AMOUNT_CANNOT_BE_NEGATIVE);
        new NonNegativeAmount(10.00 * -1);
    }
}
