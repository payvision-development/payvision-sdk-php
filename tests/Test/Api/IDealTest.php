<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Test\Api;

use Payvision\SDK\Application\Payments\Service\RequestBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Composite\Payment\Request as PaymentRequestBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Composite\Refund\Request as RefundRequestBuilder;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\Request as PaymentRequest;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\Response as PaymentResponse;
use Payvision\SDK\Domain\Payments\ValueObject\Refund\Response as RefundResponseRequest;
use Payvision\SDK\Exception\Api\ErrorResponse;
use Payvision\SDK\Exception\ApiException;
use Payvision\SDK\Exception\BuilderException;
use Payvision\SDK\Exception\DataTypeException;

class IDealTest extends AbstractTestCase
{
    /**
     * @var PaymentRequestBuilder
     */
    protected $paymentRequestBuilder;

    /**
     * @var RefundRequestBuilder
     */
    protected $refundRequestBuilder;

    /**
     * @return null
     * @throws DataTypeException
     */
    protected function setUp()
    {
        parent::setUp();

        $this->paymentRequestBuilder = new PaymentRequestBuilder();
        $this->refundRequestBuilder = new RefundRequestBuilder();
    }

    /**
     * @return array
     * @throws ApiException
     * @throws BuilderException
     * @throws ErrorResponse
     */
    public function testNewIdealPaymentShouldBePending(): array
    {
        // what to do with the business ID? It is required for the header, so it is required in the builder process,
        // but the API adds it automatically. Who's responsibility is it to supply the business ID?
        // Is it part of the initialization of the API or part of the request (as specified)?
        $requestObject = $this->createFakePaymentRequest();

        $request = RequestBuilder::newPayment($requestObject);

        /** @var PaymentResponse $response */
        $response = $this->apiConnection->execute($request);

        $this->assertInstanceOf($request->getResponseObjectByStatusCode(200), $response);
        $this->assertEquals(PaymentResponse::PENDING, $response->getResult());

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
        $request = RequestBuilder::getTransactionStatus($input['id'], $this->credentials['businessId']);

        /** @var PaymentResponse $response */
        $response = $this->apiConnection->execute($request);
        $this->assertInstanceOf($request->getResponseObjectByStatusCode(200), $response);
        $this->assertEquals(PaymentResponse::OK, $response->getResult());
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
        $request = RequestBuilder::getPayments($this->credentials['businessId'], $input['trackingCode']);

        $responses = $this->apiConnection->executeAndReturnArray($request);
        $this->assertCount(1, $responses);
        /** @var PaymentResponse $response */
        $response = $responses[0];
        $this->assertInstanceOf($request->getResponseObjectByStatusCode(200), $response);
        $this->assertEquals(PaymentResponse::OK, $response->getResult());
        $this->assertSame($input['id'], $response->getBody()->getTransaction()->getId());
    }

    /**
     * @depends testNewIdealPaymentShouldBePending
     * @param array $input
     * @throws ApiException
     * @throws BuilderException
     * @throws ErrorResponse
     * @return null
     */
    public function testIdealRefund(array $input)
    {
        $this->refundRequestBuilder->header()->setBusinessId($this->credentials['businessId']);
        $this->refundRequestBuilder->body()->transaction()
            ->setCurrencyCode('EUR')
            ->setAmount(1.00)
            ->setTrackingcode($this->generateTrackingCode());
        $requestObject = $this->refundRequestBuilder->build();

        $request = RequestBuilder::refundTransaction($requestObject, $input['id']);
        /** @var RefundResponseRequest $response */
        $response = $this->apiConnection->execute($request);
        $this->assertInstanceOf($request->getResponseObjectByStatusCode(200), $response);
        $this->assertEquals(PaymentResponse::OK, $response->getResult());
        $this->assertEquals('refund', $response->getBody()->getTransaction()->getAction());
    }

    private function createFakePaymentRequest(): PaymentRequest
    {
        $this->paymentRequestBuilder->header()->setBusinessId($this->credentials['businessId']);
        $this->paymentRequestBuilder->body()->bank()
            ->setCountryCode('NL')
            ->setIssuerId(20);
        $this->paymentRequestBuilder->body()->transaction()
            ->setAmount(1.00)
            ->setPurchaseId('1234')
            ->setTrackingCode($this->generateTrackingCode())
            ->setReturnUrl('https://www.example.com')
            ->setBrandId(3010)
            ->setDescriptor('DESC')
            ->setCurrencyCode('EUR');
        $this->paymentRequestBuilder->setAction(PaymentRequest::ACTION_PAYMENT);
        $requestObject = $this->paymentRequestBuilder->build();
        return $requestObject;
    }
}
