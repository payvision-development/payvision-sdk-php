<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
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

    protected function setUp(): void
    {
        $this->builder = new BankBuilder();
    }

    public function testValidBank(): void
    {
        $bankObject = $this->builder
            ->setCountryCode('NL')
            ->setIssuerId(20)
            ->build();

        self::assertSame(20, $bankObject->getIssuerId());
        self::assertSame('NL', $bankObject->getCountryCode());
    }
}
