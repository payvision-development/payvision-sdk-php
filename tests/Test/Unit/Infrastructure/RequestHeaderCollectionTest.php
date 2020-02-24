<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license proprietary
 */

namespace Payvision\SDK\Test\Unit\Infrastructure;

use Payvision\SDK\Infrastructure\RequestHeaderCollection;
use PHPUnit\Framework\TestCase;

class RequestHeaderCollectionTest extends TestCase
{
    /**
     * @return null
     */
    public function testAddRequestHeaderCollectionSuccessfully()
    {
        $requestHeaders = new RequestHeaderCollection();
        $this->assertEquals(0, $requestHeaders->count());

        $requestHeaders->add(RequestHeaderCollection::HEADER_EXECUTION_MODE, 'test');
        $this->assertEquals(1, $requestHeaders->count());

        foreach ($requestHeaders as $key => $value) {
            $this->assertEquals(RequestHeaderCollection::HEADER_EXECUTION_MODE, $key);
            $this->assertEquals('test', $value);
        }

        $headers = $requestHeaders->getHeaders();
        $this->assertArrayHasKey(RequestHeaderCollection::HEADER_EXECUTION_MODE, $headers);
        $this->assertEquals($headers[RequestHeaderCollection::HEADER_EXECUTION_MODE], 'test');
    }
}
