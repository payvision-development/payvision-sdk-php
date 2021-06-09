<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Test\Unit\Infrastructure;

use Payvision\SDK\Infrastructure\RequestHeaderCollection;
use PHPUnit\Framework\TestCase;

class RequestHeaderCollectionTest extends TestCase
{
    public function testAddRequestHeaderCollectionSuccessfully(): void
    {
        $requestHeaders = new RequestHeaderCollection();
        self::assertEquals(0, $requestHeaders->count());

        $testHeaders = [
            RequestHeaderCollection::HEADER_EXECUTION_MODE => 'test',
            RequestHeaderCollection::HEADER_PLUGIN_NAME => 'PHP SDK',
            RequestHeaderCollection::HEADER_PLUGIN_DETAILS => 'Version 8.2.0',
        ];

        foreach ($testHeaders as $header => $value) {
            $requestHeaders->add($header, $value);
        }

        self::assertEquals(\count($testHeaders), $requestHeaders->count());
        foreach ($requestHeaders as $key => $value) {
            self::assertEquals($testHeaders[$key], $value);
        }

        $headers = $requestHeaders->getHeaders();
        foreach ($testHeaders as $key => $value) {
            self::assertArrayHasKey($key, $headers);
            self::assertEquals($value, $headers[$key]);
        }
    }
}
