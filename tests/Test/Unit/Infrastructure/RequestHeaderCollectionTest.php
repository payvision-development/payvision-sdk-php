<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Test\Unit\Infrastructure;

use Payvision\SDK\Infrastructure\RequestHeaderCollection;
use PHPUnit\Framework\TestCase;

class RequestHeaderCollectionTest extends TestCase
{
    public function testAddRequestHeaderCollectionSuccessfully()
    {
        $requestHeaders = new RequestHeaderCollection();
        self::assertEquals(0, $requestHeaders->count());

        $requestHeaders->add(RequestHeaderCollection::HEADER_EXECUTION_MODE, 'test');
        self::assertEquals(1, $requestHeaders->count());

        foreach ($requestHeaders as $key => $value) {
            self::assertEquals(RequestHeaderCollection::HEADER_EXECUTION_MODE, $key);
            self::assertEquals('test', $value);
        }

        $headers = $requestHeaders->getHeaders();
        self::assertArrayHasKey(RequestHeaderCollection::HEADER_EXECUTION_MODE, $headers);
        self::assertEquals('test', $headers[RequestHeaderCollection::HEADER_EXECUTION_MODE]);
    }
}
