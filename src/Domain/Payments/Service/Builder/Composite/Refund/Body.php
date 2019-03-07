<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Composite\Refund;

use Payvision\SDK\Domain\Payments\ValueObject\Refund\Body as BodyObject;
use Payvision\SDK\Domain\Payments\Service\Builder\Refund\Transaction as TransactionBuilder;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Body extends Basic
{
    /**
     * @var TransactionBuilder
     */
    private $transactionBuilder;

    /**
     * @var bool
     */
    private $isTransactionBuilderTouched = false;

    public function __construct()
    {
        $this->transactionBuilder = new TransactionBuilder();
    }

    public function build(): BodyObject
    {
        return $this->buildAndReset();
    }

    public function transaction(): TransactionBuilder
    {
        $this->isTransactionBuilderTouched = true;
        return $this->transactionBuilder;
    }

    protected function buildObject(): BodyObject
    {
        return new BodyObject(
            $this->isTransactionBuilderTouched ? $this->transactionBuilder->build() : null
        );
    }
}
