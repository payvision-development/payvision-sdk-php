<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Test\Unit\DataType;

use Payvision\SDK\DataType\Enumerated;
use Payvision\SDK\Exception\DataTypeException;
use PHPUnit\Framework\TestCase;

class EnumeratedTest extends TestCase
{
    /**
     * @throws DataTypeException
     */
    public function testNullValue(): void
    {
        self::assertNull((new Enumerated(null, []))->get());
    }

    /**
     * @throws DataTypeException
     */
    public function testValidValue(): void
    {
        $enum = (new Enumerated('Foo', ['Foo', 'Bar']))->get();
        self::assertSame('Foo', $enum);
    }

    /**
     * @throws DataTypeException
     */
    public function testInvalidValue(): void
    {
        $this->expectException(DataTypeException::class);
        $this->expectExceptionCode(DataTypeException::VALUE_NOT_ALLOWED);
        (new Enumerated('Baz', ['Foo', 'Bar']))->get();
    }
}
