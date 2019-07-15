<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license proprietary
 */

namespace Payvision\SDK\Test\Unit\Domain\Service\Builder;

use Payvision\SDK\Domain\Payments\Service\Builder\Payment\RequestBank as BankBuilder;
use PHPUnit\Framework\TestCase;

class BankTest extends TestCase
{
    /**
     * @var BankBuilder
     */
    private $builder;

    /**
     * @return null
     */
    protected function setUp()
    {
        $this->builder = new BankBuilder();
    }

    /**
     * @return null
     */
    public function testValidBank()
    {
        $bankObject = $this->builder
            ->setCountryCode('NL')
            ->setIssuerId(20)
            ->build();

        $this->assertSame(20, $bankObject->getIssuerId());
        $this->assertSame('NL', $bankObject->getCountryCode());
    }
}
