<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

// phpcs:ignoreFile

namespace Payvision\SDK\Test\Api;

use Payvision\SDK\Application\Payments\Service\RequestBuilder;
use Payvision\SDK\DataType\Date;
use Payvision\SDK\Domain\Payments\Service\Builder\Composite\Payment\Request as PaymentRequestBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\OrderLine as OrderLineBuilder;
use Payvision\SDK\Domain\Payments\ValueObject\Customer;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\Response as PaymentResponse;
use Payvision\SDK\Exception\Api\ErrorResponse;
use Payvision\SDK\Exception\ApiException;
use Payvision\SDK\Exception\BuilderException;
use ReflectionException;

class AfterpayTest extends AbstractTestCase
{
    /**
     * @var PaymentRequestBuilder
     */
    private $paymentRequestBuilder;

    /**
     * @var OrderLineBuilder
     */
    private $orderLineBuilder;

    protected function setUp()
    {
        parent::setUp();

        $this->paymentRequestBuilder = new PaymentRequestBuilder();
        $this->orderLineBuilder = new OrderLineBuilder();
    }

    /**
     * @throws ApiException
     * @throws BuilderException
     * @throws ErrorResponse
     * @throws ReflectionException
     */
    public function testMakePaymentRequest()
    {
        $this->paymentRequestBuilder->setAction('payment');
        $this->paymentRequestBuilder->header()->setBusinessId($this->credentials['businessId']);
        $this->paymentRequestBuilder->body()->transaction()
            ->setStoreId(1)
            ->setLanguageCode('nl')
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
            ->setSex(Customer::SEX_MALE)
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
        $this->paymentRequestBuilder->body()->shippingAddress()->customer()
            ->setIpAddress('127.0.0.1')
            ->setGivenName('John')
            ->setFamilyName('Doe')
            ->setSex(Customer::SEX_MALE)
            ->setBirthDate((new Date('35 years ago')))
            ->setEmail('john.doe@example.com')
            ->setPhoneNumber('+31 (0)40 1234567');
        $this->paymentRequestBuilder->body()->order()->setOrderLines([
            $this->orderLineBuilder
                ->setDescription('Order Line')
                ->setItemAmount(50.00)
                ->setTotalAmount(50.00)
                ->setProductCode('ABC123')
                ->setQuantity(1)
                ->setPurchaseType('4') // Temporary value, needs to be deleted as soon as the backend of payvision is fixed
                ->setTaxPercentage(21.00)
                ->build(),
        ]);

        $requestObject = $this->paymentRequestBuilder->build();
        $apiRequest = RequestBuilder::newPayment($requestObject);
        /** @var PaymentResponse $response */
        $response = $this->apiConnection->execute($apiRequest);

        self::assertInstanceOf(PaymentResponse::class, $response);
        self::assertSame(PaymentResponse::OK, $response->getResult());
    }
}
