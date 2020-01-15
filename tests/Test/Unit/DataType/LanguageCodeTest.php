<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Test\Unit\DataType;

use Payvision\SDK\DataType\LanguageCode;
use Payvision\SDK\Exception\DataTypeException;
use PHPUnit\Framework\TestCase;

class LanguageCodeTest extends TestCase
{
    /**
     * @throws DataTypeException
     * @return null
     */
    public function testNullValue()
    {
        $this->assertNull((new LanguageCode(null))->get());
    }

    /**
     * @throws DataTypeException
     * @return null
     */
    public function testKnownCountry()
    {
        $languageCode = new LanguageCode('nl');
        $this->assertSame('nl', $languageCode->get());
    }

    /**
     * @throws DataTypeException
     * @return null
     */
    public function testUnknownCountry()
    {
        $this->expectException(DataTypeException::class);
        $this->expectExceptionCode(DataTypeException::UNKNOWN_LANGUAGE);
        new LanguageCode('xx');
    }
}
