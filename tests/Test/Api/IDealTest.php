<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 */

namespace Payvision\SDK\Test\Api;

use Payvision\SDK\Application\Payments\Service\RequestBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Composite\Request\Object as RequestObjectBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Composite\Request\Refund as RefundObjectBuilder;
use Payvision\SDK\Domain\Payments\ValueObject\Capture\ResponseRequest as CaptureResponseRequest;
use Payvision\SDK\Domain\Payments\ValueObject\Request\Object;
use Payvision\SDK\Domain\Payments\ValueObject\Response\Request as ResponseRequest;
use Payvision\SDK\Exception\Api\ErrorResponse;
use Payvision\SDK\Exception\ApiException;
use Payvision\SDK\Exception\BuilderException;
use Payvision\SDK\Exception\DataTypeException;
use Payvision\SDK\Infrastructure\ApiConnection;
use PHPUnit\Framework\TestCase;
use ReflectionException;

class IDealTest extends TestCase
{
    /**
     * @var ApiConnection
     */
    protected $apiConnection;

    /**
     * @var RequestObjectBuilder
     */
    protected $requestObjectBuilder;

    /**
     * @var RefundObjectBuilder
     */
    protected $refundObjectBuilder;

    /**
     * @throws DataTypeException
     * @return null
     */
    protected function setUp()
    {
        $envFile = __DIR__ . '/../../../.env.php';
        if (!\file_exists($envFile)) {
            $this->fail(".env.php not found. Please create one in order to run the API tests");
        }
        $credentials = include $envFile;
        $this->apiConnection = new ApiConnection(
            $credentials['username'],
            $credentials['password'],
            $credentials['businessId'],
            ApiConnection::URI_TEST,
            false
        );

        $this->requestObjectBuilder = new RequestObjectBuilder();
        $this->refundObjectBuilder = new RefundObjectBuilder();
    }

    /**
     * @return array
     * @throws ApiException
     * @throws BuilderException
     * @throws ErrorResponse
     * @throws ReflectionException
     */
    public function testNewIdealPaymentShouldBePending(): array
    {
        // what to do with the business ID? It is required for the header, so it is required in the builder process,
        // but the API adds it automatically. Who's responsibility is it to supply the business ID?
        // Is it part of the initialization of the API or part of the request (as specified)?
        $requestObject = $this->createFakeRequestObject();

        $request = RequestBuilder::newPayment($requestObject);

        /** @var ResponseRequest $response */
        $response = $this->apiConnection->execute($request);

        $this->assertInstanceOf($request->getResponseObjectByStatusCode(200), $response);
        $this->assertEquals(ResponseRequest::PENDING, $response->getResult());

        return [
            'id' => $response->getBody()->getTransaction()->getId(),
            'url' => $response->getBody()->getRedirect()->getUrl(),
            'trackingCode' => $response->getBody()->getTransaction()->getTrackingCode(),
        ];
    }

    /**
     * @depends testNewIdealPaymentShouldBePending
     * @param array $input
     * @throws ApiException
     * @throws BuilderException
     * @throws ErrorResponse
     * @return null
     */
    public function testIdealPaymentWith1EuroShouldBeSuccessful(array $input)
    {
        $request = RequestBuilder::getTransactionStatus($input['id']);

        /** @var ResponseRequest $response */
        $response = $this->apiConnection->execute($request);
        $this->assertInstanceOf($request->getResponseObjectByStatusCode(200), $response);
        $this->assertEquals(ResponseRequest::OK, $response->getResult());
    }

    /**
     * @depends testNewIdealPaymentShouldBePending
     * @param array $input
     * @throws ApiException
     * @throws BuilderException
     * @throws ErrorResponse
     * @return null
     */
    public function testIdealPaymentWith1EuroShouldHaveTransactions(array $input)
    {
        $this->markTestSkipped('getPayments() is not yet implemented');
        $request = RequestBuilder::getPayments($input['trackingCode']);

        $responses = $this->apiConnection->executeAndReturnArray($request);
        $this->assertCount(1, $responses);
        /** @var ResponseRequest $response */
        $response = $responses[0];
        $this->assertInstanceOf($request->getResponseObjectByStatusCode(200), $response);
        $this->assertEquals(ResponseRequest::OK, $response->getResult());
        $this->assertSame($input['id'], $response->getBody()->getTransaction()->getId());
    }

    /**
     * @depends testNewIdealPaymentShouldBePending
     * @param array $input
     * @throws ApiException
     * @throws BuilderException
     * @throws ErrorResponse
     * @throws ReflectionException
     * @return null
     */
    public function testIdealRefund(array $input)
    {
        $this->refundObjectBuilder->header()->setBusinessId('abc123');
        $this->refundObjectBuilder->body()->transaction()
            ->setCurrencyCode('EUR')
            ->setAmount(1.00)
            ->setTrackingcode($this->generateTrackingCode());
        $requestObject = $this->refundObjectBuilder->build();

        $request = RequestBuilder::refundTransaction($requestObject, $input['id']);
        /** @var CaptureResponseRequest $response */
        $response = $this->apiConnection->execute($request);
        $this->assertInstanceOf($request->getResponseObjectByStatusCode(200), $response);
        $this->assertEquals(ResponseRequest::OK, $response->getResult());
        $this->assertEquals('refund', $response->getBody()->getTransaction()->getAction());
    }

    protected function generateTrackingCode(): string
    {
        return 'test.' . \microtime(true) . '.' . \rand(100000, 999999);
    }

    /**
     * @return Object
     */
    private function createFakeRequestObject(): Object
    {
        $this->requestObjectBuilder->header()->setBusinessId('abc123');
        $this->requestObjectBuilder->body()->bank()
            ->setCountryCode('NL')
            ->setIssuerId(20);
        $this->requestObjectBuilder->body()->transaction()
            ->setAmount(1.00)
            ->setPurchaseId('1234')
            ->setTrackingCode($this->generateTrackingCode())
            ->setReturnUrl('https://www.example.com')
            ->setBrandId(3010)
            ->setDescriptor('DESC')
            ->setCurrencyCode('EUR');
        $this->requestObjectBuilder->setAction(Object::ACTION_PAYMENT);
        $requestObject = $this->requestObjectBuilder->build();
        return $requestObject;
    }
}
