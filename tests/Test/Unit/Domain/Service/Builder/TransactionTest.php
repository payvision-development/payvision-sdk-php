<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
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

    protected function setUp()
    {
        $this->builder = new PaymentRequestTransactionBuilder();
    }

    public function testSimpleTransaction()
    {
        $transaction = $this->builder
            ->setTrackingCode('ABC 123')
            ->setAmount(1.95)
            ->setCurrencyCode('EUR')
            ->setBrandId(3010)
            ->setReturnUrl('http://www.example.com')
            ->build();

        self::assertSame('ABC 123', $transaction->getTrackingCode());
        self::assertSame(1.95, $transaction->getAmount());
        self::assertSame('EUR', $transaction->getCurrencyCode());
        self::assertSame(3010, $transaction->getBrandId());
        self::assertSame('http://www.example.com', $transaction->getReturnUrl());
    }

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

        self::assertNull($transaction->getBrandId());
        self::assertNull($transaction->getReturnUrl());
    }

    public function testNegativeAmount()
    {
        $this->markTestSkipped('Data validation is not yet implemented in generated builders');
        $this->expectException(DataTypeException::class);
        $this->builder->setAmount(-1.00);
    }

    public function testUnknownSource()
    {
        $this->markTestSkipped('Data validation is not yet implemented in generated builders');
        $this->expectException(DataTypeException::class);
        $this->builder->setSource('XX');
    }

    public function testUnknownType()
    {
        $this->markTestSkipped('Data validation is not yet implemented in generated builders');
        $this->expectException(DataTypeException::class);
        $this->builder->setType('UNKNOWN');
    }
}
