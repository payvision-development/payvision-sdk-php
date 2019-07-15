<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license proprietary
 */

namespace Payvision\SDK\Test\Unit\Domain\Service\Builder;

use Payvision\SDK\Domain\Payments\Service\Builder\Payment\RequestTransaction as PaymentRequestTransactionBuilder;
use Payvision\SDK\Exception\DataTypeException;
use PHPUnit\Framework\TestCase;

class TransactionTest extends TestCase
{
    /**
     * @var PaymentRequestTransactionBuilder
     */
    protected $builder;

    /**
     * @return null
     */
    protected function setUp()
    {
        $this->builder = new PaymentRequestTransactionBuilder();
    }

    /**
     * @return null
     */
    public function testSimpleTransaction()
    {
        $transaction = $this->builder
            ->setTrackingCode('ABC 123')
            ->setAmount(1.95)
            ->setCurrencyCode('EUR')
            ->setBrandId(3010)
            ->setReturnUrl('http://www.example.com')
            ->build();

        $this->assertSame('ABC 123', $transaction->getTrackingCode());
        $this->assertSame(1.95, $transaction->getAmount());
        $this->assertSame('EUR', $transaction->getCurrencyCode());
        $this->assertSame(3010, $transaction->getBrandId());
        $this->assertSame('http://www.example.com', $transaction->getReturnUrl());
    }

    /**
     * @return null
     */
    public function testReset()
    {
        // First build a transaction with brand ID and return URL:
        $this->builder
            ->setTrackingCode('ABC 123')
            ->setAmount(1.95)
            ->setCurrencyCode('EUR')
            ->setBrandId(3010)
            ->setReturnUrl('http://www.example.com')
            ->build();

        // Build a new transaction:
        $transaction = $this->builder
            ->setTrackingCode('ABC 123')
            ->setAmount(1.95)
            ->setCurrencyCode('EUR')
            ->build();

        $this->assertNull($transaction->getBrandId());
        $this->assertNull($transaction->getReturnUrl());
    }

    /**
     * @return null
     */
    public function testNegativeAmount()
    {
        $this->markTestSkipped('Data validation is not yet implemented in generated builders');
        $this->expectException(DataTypeException::class);
        $this->builder->setAmount(-1.00);
    }

    /**
     * @return null
     */
    public function testUnknownSource()
    {
        $this->markTestSkipped('Data validation is not yet implemented in generated builders');
        $this->expectException(DataTypeException::class);
        $this->builder->setSource('XX');
    }

    /**
     * @return null
     */
    public function testUnknownType()
    {
        $this->markTestSkipped('Data validation is not yet implemented in generated builders');
        $this->expectException(DataTypeException::class);
        $this->builder->setType('UNKNOWN');
    }
}
