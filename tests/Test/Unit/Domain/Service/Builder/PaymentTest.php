<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license proprietary
 */

namespace Payvision\SDK\Test\Unit\Domain\Service\Builder;

use Payvision\SDK\Domain\Payments\Service\Builder\Request\Object as RequestObjectBuilder;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\Body;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\Header;
use Payvision\SDK\Domain\Payments\ValueObject\Request\Object as PaymentObject;
use Payvision\SDK\Exception\BuilderException;
use Payvision\SDK\Exception\DataTypeException;
use PHPUnit\Framework\TestCase;

class PaymentTest extends TestCase
{
    /**
     * @var RequestObjectBuilder
     */
    private $builder;

    /**
     * @return null
     */
    protected function setUp()
    {
        $this->builder = new RequestObjectBuilder();
    }

    /**
     * @return null
     */
    public function testValidPaymentObject()
    {
        $paymentObject = $this->builder
            ->setHeader(new Header('abc123'))
            ->setBody(new Body())
            ->setAction(PaymentObject::ACTION_PAYMENT)
            ->build();

        $this->assertSame(PaymentObject::ACTION_PAYMENT, $paymentObject->getAction());
    }

    /**
     * @return null
     */
    public function testInvalidPaymentObject()
    {
        $this->markTestSkipped('Data validation is not yet implemented in generated builders');
        $this->expectException(DataTypeException::class);
        $this->builder
            ->setAction('Foo')
            ->build();
    }

    /**
     * @return null
     */
    public function testMissingParameters()
    {
        $this->markTestSkipped('Data validation is not yet implemented in generated builders');
        $this->expectException(BuilderException::class);
        $this->builder->build();
    }
}
