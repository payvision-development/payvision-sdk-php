<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license proprietary
 */

// phpcs:ignoreFile

namespace Payvision\SDK\Test\Unit\Application\Reflection;

use Payvision\SDK\Application\Reflection\JsonToObject;
use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\ResponseTransaction;
use Payvision\SDK\Domain\Checkouts\ValueObject\Payment\Response;
use Payvision\SDK\Domain\Checkouts\ValueObject\Status\Response as CheckoutStatusResponse;
use Payvision\SDK\Domain\Checkouts\ValueObject\Status\ResponseBody;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\Response as PaymentResponse;
use Payvision\SDK\Exception\BuilderException;
use Payvision\SDK\Test\Unit\Application\Reflection\Test\Bar\Bazz;
use Payvision\SDK\Test\Unit\Application\Reflection\Test\Foo;
use Payvision\SDK\Test\Unit\Application\Reflection\Test\Foo\Bar;
use Payvision\SDK\Test\Unit\Application\Reflection\Test\ObjectWithArray;
use Payvision\SDK\Test\Unit\Application\Reflection\Test\ObjectWithArrayWithObjects;
use Payvision\SDK\Test\Unit\Application\Reflection\Test\ObjectWithArrayWithObjectsFromDifferentNamespace;
use Payvision\SDK\Test\Unit\Application\Reflection\Test\ObjectWithArrayWithObjectsFromDifferentNamespaces;
use Payvision\SDK\Test\Unit\Application\Reflection\Test\ObjectWithTypedArray;
use PHPUnit\Framework\TestCase;
use ReflectionException;

class JsonToObjectTest extends TestCase
{
    // phpcs:disable ObjectCalisthenics.Files.FunctionLength.ObjectCalisthenics\Sniffs\Files\FunctionLengthSniff
    /**
     * @throws BuilderException
     * @throws ReflectionException
     * @return null
     */
    public function testBuildPaymentResponse()
    {
        $targetObject = PaymentResponse::class;
        $jsonData = [
            "result" => 2,
            "description" => "Pending",
            "header" => [
                "requestTimestamp" => "2018-12-10T10:17:43Z",
            ],
            "body" => [
                "redirect" => [
                    "method" => "GET",
                    "url" => "https=>\/\/idealtest.secure-ing.com",
                ],
                "transaction" => [
                    "descriptor" => "DESC",
                    "amount" => 1,
                    "brandId" => 3010,
                    "currencyCode" => "EUR",
                    "action" => "payment",
                    "id" => "28afca92-e87e-445f-9130-852972a6e360",
                    "trackingCode" => "test.1544437063.8029.582885",
                ],
            ],
        ];

        /** @var PaymentResponse $response */
        $response = JsonToObject::build($targetObject, $jsonData);

        $this->assertSame($jsonData['result'], $response->getResult());
        $this->assertSame($jsonData['description'], $response->getDescription());
        $this->assertSame(
            '2018-12-10T10:17:43Z',
            $response->getHeader()->getRequestTimestamp()->get()
        );
        $this->assertSame($jsonData['body']['redirect']['method'], $response->getBody()->getRedirect()->getMethod());
        $this->assertSame($jsonData['body']['redirect']['url'], $response->getBody()->getRedirect()->getUrl());
        $this->assertSame(
            $jsonData['body']['transaction']['descriptor'],
            $response->getBody()->getTransaction()->getDescriptor()
        );
        $this->assertEquals(
            $jsonData['body']['transaction']['amount'],
            $response->getBody()->getTransaction()->getAmount()
        );
        $this->assertSame(
            $jsonData['body']['transaction']['brandId'],
            $response->getBody()->getTransaction()->getBrandId()
        );
        $this->assertSame(
            $jsonData['body']['transaction']['currencyCode'],
            $response->getBody()->getTransaction()->getCurrencyCode()
        );
        $this->assertSame(
            $jsonData['body']['transaction']['action'],
            $response->getBody()->getTransaction()->getAction()
        );
        $this->assertSame($jsonData['body']['transaction']['id'], $response->getBody()->getTransaction()->getId());
        $this->assertSame(
            $jsonData['body']['transaction']['trackingCode'],
            $response->getBody()->getTransaction()->getTrackingCode()
        );
    }

    // phpcs:enable ObjectCalisthenics.Files.FunctionLength.ObjectCalisthenics\Sniffs\Files\FunctionLengthSniff

    /**
     * @throws BuilderException
     * @throws ReflectionException
     * @return null
     */
    public function testArrayInTargetClass()
    {
        /** @var ObjectWithArray $result */
        $result = JsonToObject::build(
            ObjectWithArray::class,
            [
                "foo" => [100, 200, 300],
            ]
        );

        $this->assertInstanceOf(ObjectWithArray::class, $result);
        $this->assertSame([100, 200, 300], $result->getFoo());
    }

    /**
     * @throws BuilderException
     * @throws ReflectionException
     * @return null
     */
    public function testTypedArrayInTargetClass()
    {
        /** @var ObjectWithTypedArray $result */
        $result = JsonToObject::build(
            ObjectWithTypedArray::class,
            [
                "foo" => [100, 200, 300],
            ]
        );

        $this->assertInstanceOf(ObjectWithTypedArray::class, $result);
        $this->assertSame([100, 200, 300], $result->getFoo());
    }

    /**
     * @throws BuilderException
     * @throws ReflectionException
     * @return null
     */
    public function testArrayWithObjectsInTargetClass()
    {
        $data = [
            0 => ["name" => "Bar"],
            1 => ["name" => "Bazz"],
        ];
        /** @var ObjectWithArrayWithObjects $result */
        $result = JsonToObject::build(
            ObjectWithArrayWithObjects::class,
            [
                "foos" => $data,
            ]
        );

        self::assertInstanceOf(ObjectWithArrayWithObjects::class, $result);
        foreach ($result->getFoos() as $idx => $foo) {
            self::assertInstanceOf(Foo::class, $foo);
            self::assertSame($data[$idx]['name'], $foo->getName());
        }
    }

    /**
     * @throws BuilderException
     * @throws ReflectionException
     * @return null
     */
    public function testArrayWithObjectsFromDifferentNamespaceInTargetClass()
    {
        $barData = [
            0 => ["name" => "Bar 1"],
            1 => ["name" => "Bar 2"],
        ];
        /** @var ObjectWithArrayWithObjectsFromDifferentNamespace $result */
        $result = JsonToObject::build(
            ObjectWithArrayWithObjectsFromDifferentNamespace::class,
            [
                "bars" => $barData,
            ]
        );

        self::assertInstanceOf(ObjectWithArrayWithObjectsFromDifferentNamespace::class, $result);
        foreach ($result->getBars() as $idx => $bar) {
            self::assertInstanceOf(Bar::class, $bar);
            self::assertSame($barData[$idx]['name'], $bar->getName());
        }
    }

    /**
     * @throws BuilderException
     * @throws ReflectionException
     * @return null
     */
    public function testArrayWithObjectsFromDifferentNamespacesInTargetClass()
    {
        $barData = [
            0 => ["name" => "Bar 1"],
            1 => ["name" => "Bar 2"],
        ];
        /** @var ObjectWithArrayWithObjectsFromDifferentNamespaces $result */
        $result = JsonToObject::build(
            ObjectWithArrayWithObjectsFromDifferentNamespaces::class,
            [
                "foo" => ["name" => "Foo"],
                "bazz" => ["name" => "Bazz"],
                "bars" => $barData,
            ]
        );

        self::assertInstanceOf(ObjectWithArrayWithObjectsFromDifferentNamespaces::class, $result);
        self::assertInstanceOf(Foo::class, $result->getFoo());
        self::assertEquals('Foo', $result->getFoo()->getName());
        self::assertInstanceOf(Bazz::class, $result->getBazz());
        self::assertEquals('Bazz', $result->getBazz()->getName());
        foreach ($result->getBars() as $idx => $bar) {
            self::assertInstanceOf(Bar::class, $bar);
            self::assertSame($barData[$idx]['name'], $bar->getName());
        }
    }

    /**
     * @throws BuilderException
     * @throws ReflectionException
     * @return null
     */
    public function testAdvancedUseCase()
    {
        // This is a use case from a real situation:
        $json = \json_decode('{
    "result": 0,
    "description": "Completed",
    "header": {
        "requestTimestamp": "2019-03-27T09:21:20Z"
    },
    "body": {
        "checkout": {
            "checkoutId": "8dbda811-d3d5-4005-933c-664f216f91b6",
            "redirect": {
                "method": "GET",
                "url": "https:\/\/stag.checkout-web.dta.payvision.app\/8dbda811-d3d5-4005-933c-664f216f91b6"
            },
            "brandIds": [
                1010,
                1020,
                1030
            ],
            "expirationTime": "2019-03-27T09:45:32Z",
            "tokenize": "FALSE",
            "threeDSecure": false
        },
        "payments": [
            {
                "result": 0,
                "description": "Ok",
                "header": {
                    "requestTimestamp": "2019-03-27T09:20:30Z",
                    "requestCode": "203.a264d939-9374-4fa3-ac40-d4b150c969b5"
                },
                "body": {
                    "card": {
                        "approvalCode": "857785",
                        "cvvResult": "M",
                        "expiryMonth": "11",
                        "expiryYear": "2021",
                        "firstSixDigits": "420000",
                        "holderName": "Foo Bar",
                        "lastFourDigits": "0000"
                    },
                    "transaction": {
                        "amount": 50,
                        "currencyCode": "EUR",
                        "action": "payment",
                        "id": "9ceeac6a-b27f-4856-8c01-c6487d96e112",
                        "trackingCode": "5c9b3f2f-3c8aa0",
                        "brandId": 1010,
                        "authorizationMode":"FOO"
                    }
                }
            }
        ],
        "transaction": {
            "amount": 50,
            "currencyCode": "EUR",
            "authorizationMode": "PAYMENT",
            "trackingCode": "5c9b3f2f-3c8aa0"
        }
    }
}
', true);

        /** @var CheckoutStatusResponse $result */
        $result = JsonToObject::build(CheckoutStatusResponse::class, $json);

        self::assertInstanceOf(CheckoutStatusResponse::class, $result);
        self::assertInstanceOf(ResponseBody::class, $result->getBody());
        self::assertInstanceOf(ResponseTransaction::class, $result->getBody()->getTransaction());
        self::assertInstanceOf(Response::class, $result->getBody()->getPayments()[0]);
        self::assertInstanceOf(\Payvision\SDK\Domain\Checkouts\ValueObject\Payment\ResponseBody::class,
            $result->getBody()->getPayments()[0]->getBody());
    }
}
