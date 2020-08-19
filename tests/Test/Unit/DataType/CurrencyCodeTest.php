<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
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
     */
    public function testNullValue(): void
    {
        self::assertNull((new CurrencyCode(null))->get());
    }

    /**
     * @throws DataTypeException
     */
    public function testKnownCurrency(): void
    {
        $currency = new CurrencyCode('EUR');
        self::assertSame('EUR', $currency->get());
    }

    /**
     * @throws DataTypeException
     */
    public function testUnknownCurrency(): void
    {
        $this->expectException(DataTypeException::class);
        $this->expectExceptionCode(DataTypeException::UNKNOWN_CURRENCY);
        new CurrencyCode('FOO');
    }
}
