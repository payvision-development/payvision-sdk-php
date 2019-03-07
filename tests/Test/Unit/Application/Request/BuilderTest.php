<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Test\Unit\Application\Request;

use Payvision\SDK\Application\Request\Builder;
use Payvision\SDK\Domain\Payments\Service\Builder\Composite\Request\Object as RequestObjectBuilder;
use Payvision\SDK\Domain\Payments\ValueObject\Card;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\Body;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\Header;
use Payvision\SDK\Domain\Payments\ValueObject\Request\Object;
use PHPUnit\Framework\TestCase;
use ReflectionException;

class BuilderTest extends TestCase
{
    /**
     * @var RequestObjectBuilder
     */
    protected $requestObjectBuilder;

    /**
     * @return null
     */
    protected function setUp()
    {
        $this->requestObjectBuilder = new RequestObjectBuilder();
    }

    /**
     * @throws ReflectionException
     * @return null
     */
    public function testBasicReflection()
    {
        $card = new Card('001', 10, 2020, 'ISAAC', '123', '456');
        $result = Builder::toArray($card);
        $this->assertEquals([
            'cvv' => '001',
            'expiryMonth' => '10',
            'expiryYear' => '2020',
            'holderName' => 'ISAAC',
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
        $requestObject = new Object(
            new Header('abc123'),
            new Body(),
            Object::ACTION_PAYMENT
        );

        $result = Builder::toArray($requestObject);
        $this->assertEquals([
            'header' =>
                [
                    'businessId' => 'abc123',
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
                ],
            'action' => 'payment',
        ], Builder::toArray($this->createFakeRequestObject()));
    }

    private function createFakeRequestObject(): Object
    {
        $this->requestObjectBuilder->header()->setBusinessId('abc123');
        $this->requestObjectBuilder->body()->bank()
            ->setCountryCode('NL')
            ->setIssuerId(20);
        $this->requestObjectBuilder->body()->transaction()
            ->setAmount(1.00)
            ->setTrackingCode('foo456')
            ->setReturnUrl('https://www.example.com')
            ->setBrandId(3010)
            ->setCurrencyCode('EUR');
        $this->requestObjectBuilder->setAction(Object::ACTION_PAYMENT);
        $requestObject = $this->requestObjectBuilder->build();
        return $requestObject;
    }
}
