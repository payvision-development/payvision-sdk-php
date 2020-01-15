<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
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
     * @return null
     */
    public function testNullValue()
    {
        $this->assertNull((new CountryCode(null))->get());
    }

    /**
     * @throws DataTypeException
     * @return null
     */
    public function testKnownCountry()
    {
        $country = new CountryCode('NL');
        $this->assertSame('NL', $country->get());
    }

    /**
     * @throws DataTypeException
     * @return null
     */
    public function testUnknownCountry()
    {
        $this->expectException(DataTypeException::class);
        $this->expectExceptionCode(DataTypeException::UNKNOWN_COUNTRY);
        new CountryCode('XX');
    }
}
