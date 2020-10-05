<?php

declare(strict_types=1);

namespace Payvision\SDK\Test\Api;

use Exception;
use Payvision\SDK\Application\Payments\Service\RequestBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Composite\Payment\Request as PaymentRequestBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Composite\Refund\Request as RefundRequestBuilder;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\Request as PaymentRequest;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\Response as PaymentResponse;
use Payvision\SDK\Exception\Api\ErrorResponse;
use Payvision\SDK\Exception\ApiException;
use Payvision\SDK\Exception\BuilderException;
use ReflectionException;

abstract class AbstractPaymentTest extends AbstractTestCase
{
    const BRAND_ID = 0;

    /**
     * @var PaymentRequestBuilder
     */
    protected $paymentRequestBuilder;

    /**
     * @var RefundRequestBuilder
     */
    protected $refundRequestBuilder;

    protected function setUp()
    {
        parent::setUp();

        $this->paymentRequestBuilder = new PaymentRequestBuilder();
        $this->refundRequestBuilder = new RefundRequestBuilder();
    }

    protected function createFakePaymentRequest(): PaymentRequest
    {
        $this->prepareFakePaymentRequest();
        return $this->paymentRequestBuilder->build();
    }

    protected function prepareFakePaymentRequest()
    {
        $this->paymentRequestBuilder->header()
            ->setBusinessId($this->credentials['businessId']);
        $this->paymentRequestBuilder->body()->transaction()
            ->setStoreId(1)
            ->setAmount(1.00)
            ->setPurchaseId('1234')
            ->setTrackingCode($this->generateTrackingCode())
            ->setReturnUrl('https://www.example.com')
            ->setBrandId(static::BRAND_ID)
            ->setDescriptor('DESC')
            ->setCurrencyCode('EUR');
        $this->paymentRequestBuilder->setAction(PaymentRequest::ACTION_PAYMENT);
    }

    /**
     * @throws ApiException
     * @throws BuilderException
     * @throws ErrorResponse
     * @throws ReflectionException
     * @throws Exception
     */
    public function testPaymentCreationSuccessful()
    {
        $requestObject = $this->createFakePaymentRequest();
        $request = RequestBuilder::newPayment($requestObject);

        /** @var PaymentResponse $response */
        $response = $this->apiConnection->execute($request);

        self::assertInstanceOf($request->getResponseObjectByStatusCode(200), $response);
        self::assertEquals(PaymentResponse::PENDING, $response->getResult());
    }

    /**
     * @throws ErrorResponse
     * @throws ApiException
     * @throws BuilderException
     * @throws ReflectionException
     */
    public function testPaymentCreationFailed()
    {
        $this->prepareFakePaymentRequest();
        $this->paymentRequestBuilder->body()->transaction()
            ->setCurrencyCode('FAKE')
            ->setCountryCode('ZZ');

        $requestObject = $this->paymentRequestBuilder->build();
        $request = RequestBuilder::newPayment($requestObject);

        $this->expectException(ErrorResponse::class);

        /** @var PaymentResponse $response */
        $this->apiConnection->execute($request);
    }
}
