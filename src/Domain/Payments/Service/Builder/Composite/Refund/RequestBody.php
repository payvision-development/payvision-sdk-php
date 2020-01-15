<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Composite\Refund;

use Payvision\SDK\Domain\Payments\ValueObject\Refund\RequestBody as RequestBodyObject;
use Payvision\SDK\Domain\Payments\Service\Builder\Refund\RequestTransaction as RequestTransactionBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Order as OrderBuilder;
use Payvision\SDK\Domain\Service\Builder\Basic;

class RequestBody extends Basic
{
    /**
     * @var RequestTransactionBuilder
     */
    private $transactionBuilder;

    /**
     * @var bool
     */
    private $isTransactionBuilderTouched = false;

    /**
     * @var OrderBuilder
     */
    private $orderBuilder;

    /**
     * @var bool
     */
    private $isOrderBuilderTouched = false;

    public function __construct()
    {
        $this->transactionBuilder = new RequestTransactionBuilder();
        $this->orderBuilder = new OrderBuilder();
    }

    /**
     * @return RequestBodyObject
     */
    public function build(): RequestBodyObject
    {
        return $this->buildAndReset();
    }

    /**
     * @return RequestTransactionBuilder
     */
    public function transaction(): RequestTransactionBuilder
    {
        $this->isTransactionBuilderTouched = true;
        return $this->transactionBuilder;
    }

    /**
     * @return OrderBuilder
     */
    public function order(): OrderBuilder
    {
        $this->isOrderBuilderTouched = true;
        return $this->orderBuilder;
    }

    /**
     * @return RequestBodyObject
     */
    protected function buildObject(): RequestBodyObject
    {
        return new RequestBodyObject(
            $this->isTransactionBuilderTouched ? $this->transactionBuilder->build() : null,
            $this->isOrderBuilderTouched ? $this->orderBuilder->build() : null
        );
    }
}
