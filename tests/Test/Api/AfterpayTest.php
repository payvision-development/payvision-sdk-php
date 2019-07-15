<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

// phpcs:ignoreFile

namespace Payvision\SDK\Test\Api;

use Payvision\SDK\Application\Payments\Service\RequestBuilder;
use Payvision\SDK\DataType\Date;
use Payvision\SDK\Domain\Payments\Service\Builder\Composite\Payment\Request as PaymentRequestBuilder;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\Response as PaymentResponse;
use Payvision\SDK\Exception\Api\ErrorResponse;
use Payvision\SDK\Exception\ApiException;
use Payvision\SDK\Exception\BuilderException;
use Payvision\SDK\Exception\DataTypeException;

class AfterpayTest extends AbstractTestCase
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
     * @return null
     */
    public function testMakePaymentRequest()
    {
        $this->paymentRequestBuilder->setAction('payment');
        $this->paymentRequestBuilder->header()->setBusinessId($this->credentials['businessId']);
        $this->paymentRequestBuilder->body()->transaction()
            ->setAmount(50.00)
            ->setBrandId(5020)
            ->setTrackingCode($this->generateTrackingCode())
            ->setCurrencyCode('EUR')
            ->setCountryCode('NL')
            ->setReturnUrl('https://www.example.com');
        $this->paymentRequestBuilder->body()->customer()
            ->setIpAddress('127.0.0.1')
            ->setGivenName('John')
            ->setFamilyName('Doe')
            ->setBirthDate((new Date('35 years ago')))
            ->setEmail('john.doe@example.com')
            ->setPhoneNumber('+31 (0)40 1234567');
        $this->paymentRequestBuilder->body()->billingAddress()
            ->setCountryCode('NL')
            ->setCity('Eindhoven')
            ->setStreet('Marconilaan')
            ->setHouseNumber('16')
            ->setZip('5621 AA');
        $this->paymentRequestBuilder->body()->shippingAddress()
            ->setCountryCode('NL')
            ->setCity('Eindhoven')
            ->setStreet('Marconilaan')
            ->setHouseNumber('16')
            ->setZip('5621 AA');

        $requestObject = $this->paymentRequestBuilder->build();
        $apiRequest = RequestBuilder::newPayment($requestObject);
        /** @var PaymentResponse $response */
        $response = $this->apiConnection->execute($apiRequest);

        self::assertInstanceOf(PaymentResponse::class, $response);
        self::assertSame(PaymentResponse::OK, $response->getResult());
    }
}
