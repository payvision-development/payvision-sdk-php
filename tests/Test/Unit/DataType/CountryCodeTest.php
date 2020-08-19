<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Test\Unit\DataType;

use Payvision\SDK\DataType\CountryCode;
use Payvision\SDK\Exception\DataTypeException;
use PHPUnit\Framework\TestCase;

class CountryCodeTest extends TestCase
{
    /**
     * @throws DataTypeException
     */
    public function testNullValue(): void
    {
        self::assertNull((new CountryCode(null))->get());
    }

    /**
     * @throws DataTypeException
     */
    public function testKnownCountry(): void
    {
        $country = new CountryCode('NL');
        self::assertSame('NL', $country->get());
    }

    /**
     * @throws DataTypeException
     */
    public function testUnknownCountry(): void
    {
        $this->expectException(DataTypeException::class);
        $this->expectExceptionCode(DataTypeException::UNKNOWN_COUNTRY);
        new CountryCode('XX');
    }
}
