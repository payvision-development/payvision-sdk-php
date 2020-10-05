<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
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
     */
    public function testNullValue()
    {
        self::assertNull((new LanguageCode(null))->get());
    }

    /**
     * @throws DataTypeException
     */
    public function testKnownCountry()
    {
        $languageCode = new LanguageCode('nl');
        self::assertSame('nl', $languageCode->get());
    }

    /**
     * @throws DataTypeException
     */
    public function testUnknownCountry()
    {
        $this->expectException(DataTypeException::class);
        $this->expectExceptionCode(DataTypeException::UNKNOWN_LANGUAGE);
        new LanguageCode('xx');
    }
}
