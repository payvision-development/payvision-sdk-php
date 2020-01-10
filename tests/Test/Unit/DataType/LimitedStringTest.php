<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Test\Unit\DataType;

use Payvision\SDK\DataType\LimitedString;
use Payvision\SDK\Exception\DataTypeException;
use PHPUnit\Framework\TestCase;

class LimitedStringTest extends TestCase
{
    /**
     * @throws DataTypeException
     * @return null
     */
    public function testNullValue()
    {
        $this->assertNull((new LimitedString(null, 255))->get());
    }

    /**
     * @param string $input
     * @param string $expectedResult
     * @param bool $expectException
     * @throws DataTypeException
     * @dataProvider stringDataProvider50()
     * @return null
     */
    public function testInput(string $input, string $expectedResult, bool $expectException = false)
    {
        if ($expectException) {
            $this->expectException(DataTypeException::class);
            $this->expectExceptionCode(DataTypeException::STRING_TOO_LONG);
        }

        $str = new LimitedString($input, 50);

        if (!$expectException) {
            $this->assertSame($expectedResult, $str->get());
        }
    }

    public function stringDataProvider50(): array
    {
        return $this->createDataProviderData(50);
    }

    private function createDataProviderData(int $count): array
    {
        $str1 = $this->createString($count - 1);
        $str2 = $this->createString($count);
        $str3 = $this->createString($count + 1);

        return [
            'empty string' => ['', ''],
            'small string' => ['Foo', 'Foo'],
            ($count - 1) . ' characters' => [$str1, $str1,],
            $count . ' characters' => [$str2, $str2],
            ($count + 1) . ' characters' => [$str3, $str3, true],
        ];
    }

    private function createString(int $length): string
    {
        $chars = 'abcdefghijklmnopqrstuvwxyz     1234567890';
        $str = '';

        for ($i = 0; $i < $length; $i += 1) {
            $str .= $chars[\rand(0, \strlen($chars) - 1)];
        }

        return $str;
    }
}
