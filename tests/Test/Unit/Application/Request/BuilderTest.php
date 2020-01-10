<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

// phpcs:disable ObjectCalisthenics.Files.FunctionLength.ObjectCalisthenics\Sniffs\Files\FunctionLengthSniff

namespace Payvision\SDK\Test\Unit\Application\Request;

use Payvision\SDK\Application\Request\Builder;
use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\Request as CheckoutRequest;
use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\RequestBody as CheckoutRequestBody;
use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\RequestCheckout as CheckoutRequestCheckout;
use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\RequestTransaction as Transaction;
use Payvision\SDK\Domain\Checkouts\ValueObject\Request\Header as CheckoutRequestHeader;
use Payvision\SDK\Domain\Payments\Service\Builder\Composite\Payment\Request as PaymentRequestBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\OrderLine as OrderLineBuilder;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\Request as PaymentRequest;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\RequestBody as PaymentRequestBody;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\RequestCard as PaymentRequestCard;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\RequestTransaction as PaymentRequestTransaction;
use Payvision\SDK\Domain\Payments\ValueObject\Request\Header as PaymentRequestHeader;
use PHPUnit\Framework\TestCase;
use ReflectionException;

class BuilderTest extends TestCase
{
    /**
     * @var PaymentRequestBuilder
     */
    private $paymentRequestBuilder;

    /**
     * @var OrderLineBuilder
     */
    private $orderLineBuilder;

    /**
     * @return null
     */
    protected function setUp()
    {
        $this->paymentRequestBuilder = new PaymentRequestBuilder();
        $this->orderLineBuilder = new OrderLineBuilder();
    }

    /**
     * @throws ReflectionException
     * @return null
     */
    public function testBasicReflection()
    {
        $card = new PaymentRequestCard('001', 10, 2020, 'Foo', '123', '456');
        $result = Builder::toArray($card);
        $this->assertEquals([
            'cvv' => '001',
            'expiryMonth' => '10',
            'expiryYear' => '2020',
            'holderName' => 'Foo',
            'issueNumber' => '123',
            'number' => '456',
        ], $result);
    }

    /**
     * @throws ReflectionException
     * @return null
     */
    public function testNestedReflection()
    {
        $requestObject = new PaymentRequest(
            PaymentRequest::ACTION_PAYMENT,
            new PaymentRequestBody(
                new PaymentRequestTransaction(1.00, 'XXX', 'EUR')
            ),
            new PaymentRequestHeader('abc123')
        );

        $result = Builder::toArray($requestObject);
        $this->assertEquals([
            'header' =>
                [
                    'businessId' => 'abc123',
                ],
            'body' => [
                'transaction' => [
                    'amount' => 1.00,
                    'trackingCode' => 'XXX',
                    'currencyCode' => 'EUR',
                ],
            ],
            'action' => 'payment',
        ], $result);
    }

    /**
     * @throws ReflectionException
     * @return null
     */
    public function testPaymentRequest()
    {
        $this->assertEquals([
            'header' =>
                [
                    'businessId' => 'abc123',
                ],
            'body' =>
                [
                    'bank' =>
                        [
                            'countryCode' => 'NL',
                            'issuerId' => '20',
                        ],
                    'transaction' =>
                        [
                            'amount' => '1',
                            'trackingCode' => 'foo456',
                            'returnUrl' => 'https://www.example.com',
                            'brandId' => '3010',
                            'currencyCode' => 'EUR',
                        ],
                    'order' =>
                        [
                            'orderLines' =>
                                [
                                    [
                                        'description' => 'Description #1',
                                        'productCode' => 'SKU-1',
                                        'purchaseType' => 'PT1',
                                        'quantity' => 1,
                                        'taxPercentage' => 19,
                                        'itemAmount' => 10.0,
                                    ],
                                    [
                                        'description' => 'Description #2',
                                        'productCode' => 'SKU-2',
                                        'purchaseType' => 'PT2',
                                        'quantity' => 2,
                                        'taxPercentage' => 21,
                                        'itemAmount' => 15.0,
                                    ],
                                ],
                        ],
                ],
            'action' => 'payment',
        ], Builder::toArray($this->createFakeRequestObject()));
    }

    /**
     * @throws ReflectionException
     * @return null
     */
    public function testCheckoutRequest()
    {
        $this->assertEquals([
            'header' =>
                [
                    'businessId' => 'abc123',
                ],
            'body' =>
                [
                    'checkout' =>
                        [
                            'brandIds' => [0 => '1010', 1 => '1020', 2 => '1030'],
                            'returnUrl' => 'http://www.example.com',
                        ],
                    'transaction' =>
                        [
                            'amount' => '60',
                            'authorizationMode' => 'payment',
                            'currencyCode' => 'EUR',
                            'trackingCode' => 'foo456',
                        ],
                ],
        ], Builder::toArray($this->createFakeCheckoutRequest()));
    }

    private function createFakeRequestObject(): PaymentRequest
    {
        $this->paymentRequestBuilder->header()->setBusinessId('abc123');
        $this->paymentRequestBuilder->body()->bank()
            ->setCountryCode('NL')
            ->setIssuerId(20);
        $this->paymentRequestBuilder->body()->transaction()
            ->setAmount(1.00)
            ->setTrackingCode('foo456')
            ->setReturnUrl('https://www.example.com')
            ->setBrandId(3010)
            ->setCurrencyCode('EUR');
        $this->paymentRequestBuilder->body()->order()
            ->setOrderLines([
                $this->orderLineBuilder
                    ->setDescription('Description #1')
                    ->setProductCode('SKU-1')
                    ->setPurchaseType('PT1')
                    ->setQuantity(1)
                    ->setTaxPercentage(19)
                    ->setItemAmount(10.00)
                    ->build(),
                $this->orderLineBuilder
                    ->setDescription('Description #2')
                    ->setProductCode('SKU-2')
                    ->setPurchaseType('PT2')
                    ->setQuantity(2)
                    ->setTaxPercentage(21)
                    ->setItemAmount(15.00)
                    ->build(),
            ]);
        $this->paymentRequestBuilder->setAction(PaymentRequest::ACTION_PAYMENT);
        $requestObject = $this->paymentRequestBuilder->build();
        return $requestObject;
    }

    private function createFakeCheckoutRequest(): CheckoutRequest
    {
        return new CheckoutRequest(
            new CheckoutRequestBody(
                new CheckoutRequestCheckout(
                    ['1010', '1020', '1030'],
                    'http://www.example.com'
                ),
                new Transaction(
                    60.00,
                    'payment',
                    'EUR',
                    'foo456'
                )
            ),
            new CheckoutRequestHeader('abc123')
        );
    }
}
