<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license proprietary
 */

namespace Payvision\SDK\Test\Unit\DataType;

use Payvision\SDK\DataType\Enumerated;
use Payvision\SDK\Exception\DataTypeException;
use PHPUnit\Framework\TestCase;

class EnumeratedTest extends TestCase
{
    /**
     * @throws DataTypeException
     * @return null
     */
    public function testNullValue()
    {
        $this->assertNull((new Enumerated(null, []))->get());
    }

    /**
     * @throws DataTypeException
     * @return null
     */
    public function testValidValue()
    {
        $enum = (new Enumerated('Foo', ['Foo', 'Bar']))->get();
        $this->assertSame('Foo', $enum);
    }

    /**
     * @throws DataTypeException
     * @return null
     */
    public function testInvalidValue()
    {
        $this->expectException(DataTypeException::class);
        $this->expectExceptionCode(DataTypeException::VALUE_NOT_ALLOWED);
        (new Enumerated('Baz', ['Foo', 'Bar']))->get();
    }
}
