<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license proprietary
 */

namespace Payvision\SDK\Test\Unit\Application\Reflection;

use Payvision\SDK\Application\Reflection\JsonToObject;
use Payvision\SDK\Domain\Payments\ValueObject\Response\Request;
use Payvision\SDK\Exception\BuilderException;
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
        $targetObject = Request::class;
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

        /** @var Request $response */
        $response = JsonToObject::build($targetObject, $jsonData);

        $this->assertSame($jsonData['result'], $response->getResult());
        $this->assertSame($jsonData['description'], $response->getDescription());
        $this->assertSame(
            '2018-12-10 10:17:43',
            $response->getHeader()->getRequestTimestamp()->format('Y-m-d h:i:s')
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
}
