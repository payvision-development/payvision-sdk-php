<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Test\Unit\DataType;

use Payvision\SDK\DataType\Url;
use Payvision\SDK\Exception\DataTypeException;
use PHPUnit\Framework\TestCase;

class UrlTest extends TestCase
{
    /**
     * @throws DataTypeException
     * @return null
     */
    public function testNullValue()
    {
        $this->assertNull((new Url(null))->get());
    }

    /**
     * @param string $input
     * @throws DataTypeException
     * @dataProvider validUrlDataProvider()
     * @return null
     */
    public function testValidUrl(string $input)
    {
        $url = new Url($input);
        $this->assertSame($input, $url->get());
    }

    /**
     * @param string $input
     * @throws DataTypeException
     * @dataProvider invalidUrlDataProvider()
     * @return null
     */
    public function testInvalidUrl(string $input)
    {
        $this->expectException(DataTypeException::class);
        $this->expectExceptionCode(DataTypeException::INVALID_URL);
        new Url($input);
    }

    public function validUrlDataProvider(): array
    {
        return [
            ['http://www.example.com'],
            ['http://example.com'],
            ['https://www.example.com'],
            ['https://example.com'],
        ];
    }

    public function invalidUrlDataProvider(): array
    {
        return [
            ['www.example.com'],
            ['http:\\\\example.com'],
            ['http:/example.com'],
            ['http://www.éxample.com'],
            ['https://example.com_'],
        ];
    }
}
