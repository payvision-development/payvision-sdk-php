<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Test\Test\Api;

use Payvision\SDK\Application\Payments\Service\RequestBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Composite\Payment\Request as PaymentRequestBuilder;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\Response as PaymentResponse;
use Payvision\SDK\Exception\Api\ErrorResponse;
use Payvision\SDK\Exception\ApiException;
use Payvision\SDK\Exception\BuilderException;
use Payvision\SDK\Exception\DataTypeException;
use Payvision\SDK\Test\Api\AbstractTestCase;
use ReflectionException;

class PayPalTest extends AbstractTestCase
{
    /**
     * @var PaymentRequestBuilder
     */
    private $paymentRequestBuilder;

    /**
     * @return null
     * @throws DataTypeException
     */
    protected function setUp()
    {
        parent::setUp();

        $this->paymentRequestBuilder = new PaymentRequestBuilder();
    }

    /**
     * @throws ApiException
     * @throws ErrorResponse
     * @throws BuilderException
     * @throws ReflectionException
     * @return null
     */
    public function testMakePaymentRequest()
    {
        $this->paymentRequestBuilder->setAction('payment');
        $this->paymentRequestBuilder->header()->setBusinessId($this->credentials['businessId']);
        $this->paymentRequestBuilder->body()->transaction()
            ->setAmount(1.00)
            ->setBrandId(4010)
            ->setTrackingCode($this->generateTrackingCode())
            ->setCurrencyCode('EUR')
            ->setReturnUrl('https://www.example.com');

        $requestObject = $this->paymentRequestBuilder->build();
        $apiRequest = RequestBuilder::newPayment($requestObject);
        /** @var PaymentResponse $response */
        $response = $this->apiConnection->execute($apiRequest);

        self::assertInstanceOf(PaymentResponse::class, $response);
        self::assertTrue(\is_array($response->getBody()->getRedirect()->getFields()));
        foreach ($response->getBody()->getRedirect()->getFields() as $key => $value) {
            self::assertTrue(\is_string($key));
            self::assertTrue(\is_string($value));
        }
    }
}
