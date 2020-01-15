<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license proprietary
 */

namespace Payvision\SDK\Test\Unit\Infrastructure;

// phpcs:disable
require_once __DIR__ . '/../Application/Response/Fake.php';
require_once __DIR__ . '/../Application/Response/Fake/Header.php';

// phpcs:enable
// phpcs:disable ObjectCalisthenics.Files.FunctionLength

use GuzzleHttp\Client;
use Payvision\SDK\Application\ApiRequest;
use Payvision\SDK\Domain\Request;
use Payvision\SDK\Exception\Api\ErrorResponse;
use Payvision\SDK\Exception\ApiException;
use Payvision\SDK\Exception\BuilderException;
use Payvision\SDK\Infrastructure\ApiConnection;
use Payvision\SDK\Test\Unit\Application\Response\Fake as FakeResponse;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use ReflectionException;
use ReflectionObject;

class ApiConnectionTest extends TestCase
{
    /**
     * @var ApiConnection
     */
    protected $subject;

    /**
     * @var Client|MockObject
     */
    protected $mockedClient;

    /**
     * @var ResponseInterface|MockObject
     */
    protected $mockedResponse;

    /**
     * @var StreamInterface|MockObject
     */
    protected $mockedStream;

    /**
     * @throws ReflectionException
     * @return null
     */
    protected function setUp()
    {
        $this->subject = new ApiConnection(
            'username',
            'password'
        );

        // Mock the client:
        $this->mockedClient = $this->getMockBuilder(Client::class)
            ->disableOriginalConstructor()
            ->setMethods(['get', 'post'])
            ->getMock();

        $this->mockedResponse = $this->getMockBuilder(ResponseInterface::class)->getMock();
        $this->mockedStream = $this->getMockBuilder(StreamInterface::class)->getMock();
        $this->mockedResponse->method('getBody')->willReturn($this->mockedStream);

        $this->mockedClient->method('get')->willReturn($this->mockedResponse);
        $this->mockedClient->method('post')->willReturn($this->mockedResponse);

        $reflection = new ReflectionObject($this->subject);
        $reflectionClient = $reflection->getProperty('client');
        $reflectionClient->setAccessible(true);
        $reflectionClient->setValue($this->subject, $this->mockedClient);
    }

    /**
     * @throws ApiException
     * @throws BuilderException
     * @throws ErrorResponse
     * @return null
     */
    public function testPostRequest()
    {
        // Setup:
        $request = $this->createApiRequestObject(Request::METHOD_POST);

        // Exercise:
        $this->mockedClient
            ->expects($this->once())
            ->method('post')
            ->with(
                'endpoint',
                [
                    'json' => [
                        'foo' => 'bar',
                        'header' => [
                            'abc' => '123',
                        ],
                        'body' => [
                            'xyz' => '456',
                        ],
                    ],
                    'query' => [
                        'id' => '67890',
                    ],
                ]
            );
        $this->mockedResponse->method('getStatusCode')->willReturn(200);
        $this->mockedStream->method('getContents')->willReturn(\json_encode([
            'result' => 2,
            'description' => 'Example',
            'header' => [
                'requestTimestamp' => '2018-12-10T10:17:43Z',
                'testArgument' => 'Hello World',
            ],
        ]));

        // Validate:
        /** @var FakeResponse $response */
        $response = $this->subject->execute($request);

        $this->assertInstanceOf(FakeResponse::class, $response);
        $this->assertSame(2, $response->getResult());
        $this->assertSame('Hello World', $response->getHeader()->getTestArgument());
        $this->assertSame('Example', $response->getDescription());
        $this->assertSame('2018-12-10 10:17:43', $response->getHeader()->getRequestTimestamp()->format('Y-m-d H:i:s'));
    }

    /**
     * @throws ApiException
     * @throws BuilderException
     * @throws ErrorResponse
     * @return null
     */
    public function testGetRequest()
    {
        // Setup:
        $request = $this->createApiRequestObject(Request::METHOD_GET);

        // Exercise:
        $this->mockedClient
            ->expects($this->once())
            ->method('get')
            ->with(
                'endpoint',
                [
                    'query' => [
                        'id' => '67890',
                    ],
                ]
            );
        $this->mockedResponse->method('getStatusCode')->willReturn(200);
        $this->mockedStream->method('getContents')->willReturn(\json_encode([
            'result' => 2,
            'description' => 'Example',
            'header' => [
                'requestTimestamp' => '2018-12-10T10:17:43Z',
                'testArgument' => 'Hello World',
            ],
        ]));

        // Validate:
        /** @var FakeResponse $response */
        $response = $this->subject->execute($request);

        $this->assertInstanceOf(FakeResponse::class, $response);
        $this->assertSame(2, $response->getResult());
        $this->assertSame('Hello World', $response->getHeader()->getTestArgument());
        $this->assertSame('Example', $response->getDescription());
        $this->assertSame('2018-12-10 10:17:43', $response->getHeader()->getRequestTimestamp()->format('Y-m-d H:i:s'));
    }

    /**
     * @throws ApiException
     * @throws BuilderException
     * @throws ErrorResponse
     * @return null
     */
    public function testMissingResponseObject()
    {
        // Setup:
        $request = $this->createApiRequestObject(Request::METHOD_GET, []);

        // Exercise:
        $this->expectException(ApiException::class);
        $this->mockedClient
            ->expects($this->never())
            ->method('get');
        $this->mockedClient
            ->expects($this->never())
            ->method('post');

        // Validate:
        $this->subject->execute($request);
    }

    /**
     * @throws ApiException
     * @throws BuilderException
     * @throws ErrorResponse
     * @return null
     */
    public function testInvalidResponseShouldThrowError()
    {
        // Setup:
        $request = $this->createApiRequestObject(Request::METHOD_GET, [400 => FakeResponse::class]);

        // Exercise:
        $this->mockedResponse->method('getStatusCode')->willReturn(400);
        $this->mockedStream->method('getContents')->willReturn(\json_encode([
            'result' => -1,
            'description' => 'Example Error',
            'header' => [
                'requestTimestamp' => '2018-12-10T10:17:43Z',
            ],
            'body' => [
                'error' => [
                    'code' => 1337,
                    'message' => 'Test Message',
                ],
            ],
        ]));

        // Validate:
        $this->expectException(ErrorResponse::class);
        $this->subject->execute($request);
    }

    /**
     * @throws ApiException
     * @throws BuilderException
     * @throws ErrorResponse
     * @return null
     */
    public function testNonJsonResponseShouldThrowException()
    {
        // Setup:
        $request = $this->createApiRequestObject(Request::METHOD_GET, [400 => FakeResponse::class]);

        // Exercise:
        $this->mockedResponse->method('getStatusCode')->willReturn(400);
        $this->mockedStream->method('getContents')->willReturn('Hi there, I am not JSON!');

        $this->expectException(ApiException::class);
        $this->expectExceptionCode(ApiException::INVALID_RESPONSE);
        $this->subject->execute($request);
    }

    /**
     * @throws ApiException
     * @throws BuilderException
     * @throws ErrorResponse
     * @return null
     */
    public function testTolerantReader()
    {
        // Setup:
        $request = $this->createApiRequestObject();

        // Exercise:
        $this->mockedClient
            ->expects($this->once())
            ->method('post')
            ->with(
                'endpoint',
                [
                    'json' => [
                        'foo' => 'bar',
                        'header' => [
                            'abc' => '123',
                        ],
                        'body' => [
                            'xyz' => '456',
                        ],
                    ],
                    'query' => [
                        'id' => '67890',
                    ],
                ]
            );
        $this->mockedResponse->method('getStatusCode')->willReturn(200);
        $this->mockedStream->method('getContents')->willReturn(\json_encode([
            'result' => 2,
            'description' => 'Example',
            'header' => [
                'requestTimestamp' => '2018-12-10T10:17:43Z',
                'newProperty1' => 'Hello',
            ],
            'body' => [
                'newProperty2' => 'World',
                'newProperty3' => [
                    'name' => 'I should not fail',
                ],
            ],
        ]));

        // Validate:
        /** @var FakeResponse $response */
        $response = $this->subject->execute($request);

        $this->assertInstanceOf(FakeResponse::class, $response);
        $this->assertSame(2, $response->getResult());
        $this->assertSame('Example', $response->getDescription());
        $this->assertSame('2018-12-10 10:17:43', $response->getHeader()->getRequestTimestamp()->format('Y-m-d H:i:s'));
    }

    /**
     * @throws ApiException
     * @throws BuilderException
     * @throws ErrorResponse
     * @return null
     */
    public function testExceptionOnMissingRequiredField()
    {
        // Setup:
        $request = $this->createApiRequestObject();

        // Exercise:
        $this->mockedClient
            ->expects($this->once())
            ->method('post')
            ->with(
                'endpoint',
                [
                    'json' => [
                        'foo' => 'bar',
                        'header' => [
                            'abc' => '123',
                        ],
                        'body' => [
                            'xyz' => '456',
                        ],
                    ],
                    'query' => [
                        'id' => '67890',
                    ],
                ]
            );
        $this->mockedResponse->method('getStatusCode')->willReturn(200);
        $this->mockedStream->method('getContents')->willReturn(\json_encode([
            'result' => 2,
            'description' => 'Example',
            'header' => [
                'testArgument' => 'Hello World',
            ],
        ]));

        // Validate:
        /** @var FakeResponse $response */
        $this->expectException(BuilderException::class);
        $this->expectExceptionCode(BuilderException::MISSING_RESPONSE_PROPERTY);
        $this->subject->execute($request);
    }

    private function createApiRequestObject(
        string $method = Request::METHOD_POST,
        array $responseObjectTypes = [200 => FakeResponse::class]
    ): ApiRequest {
        $request = new ApiRequest(
            'endpoint',
            $method,
            ['foo' => 'bar'],
            ['abc' => '123'],
            ['xyz' => '456'],
            ['id' => '67890'],
            $responseObjectTypes
        );
        return $request;
    }
}
