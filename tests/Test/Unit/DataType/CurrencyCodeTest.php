<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Test\Unit\DataType;

use Payvision\SDK\DataType\CurrencyCode;
use Payvision\SDK\Exception\DataTypeException;
use PHPUnit\Framework\TestCase;

class CurrencyCodeTest extends TestCase
{
    /**
     * @throws DataTypeException
     * @return null
     */
    public function testNullValue()
    {
        $this->assertNull((new CurrencyCode(null))->get());
    }

    /**
     * @throws DataTypeException
     * @return null
     */
    public function testKnownCurrency()
    {
        $currency = new CurrencyCode('EUR');
        $this->assertSame('EUR', $currency->get());
    }

    /**
     * @throws DataTypeException
     * @return null
     */
    public function testUnknownCurrency()
    {
        $this->expectException(DataTypeException::class);
        $this->expectExceptionCode(DataTypeException::UNKNOWN_CURRENCY);
        new CurrencyCode('FOO');
    }
}
