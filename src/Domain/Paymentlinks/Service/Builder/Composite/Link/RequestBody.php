<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\Service\Builder\Composite\Link;

use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\RequestBody as RequestBodyObject;
use Payvision\SDK\Domain\Paymentlinks\Service\Builder\Link\RequestTransaction as RequestTransactionBuilder;
use Payvision\SDK\Domain\Paymentlinks\Service\Builder\Link\RequestLink as RequestLinkBuilder;
use Payvision\SDK\Domain\Paymentlinks\Service\Builder\BasicAddress as BasicAddressBuilder;
use Payvision\SDK\Domain\Paymentlinks\Service\Builder\BasicCustomer as BasicCustomerBuilder;
use Payvision\SDK\Domain\Paymentlinks\Service\Builder\Link\RequestDba as RequestDbaBuilder;
use Payvision\SDK\Domain\Paymentlinks\Service\Builder\Link\RequestOrder as RequestOrderBuilder;
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
     * @var RequestLinkBuilder
     */
    private $linkBuilder;

    /**
     * @var bool
     */
    private $isLinkBuilderTouched = false;

    /**
     * @var BasicAddressBuilder
     */
    private $billingAddressBuilder;

    /**
     * @var bool
     */
    private $isBillingAddressBuilderTouched = false;

    /**
     * @var BasicCustomerBuilder
     */
    private $customerBuilder;

    /**
     * @var bool
     */
    private $isCustomerBuilderTouched = false;

    /**
     * @var RequestDbaBuilder
     */
    private $dbaBuilder;

    /**
     * @var bool
     */
    private $isDbaBuilderTouched = false;

    /**
     * @var RequestOrderBuilder
     */
    private $orderBuilder;

    /**
     * @var bool
     */
    private $isOrderBuilderTouched = false;

    /**
     * @var BasicAddressBuilder
     */
    private $shippingAddressBuilder;

    /**
     * @var bool
     */
    private $isShippingAddressBuilderTouched = false;

    public function __construct()
    {
        $this->transactionBuilder = new RequestTransactionBuilder();
        $this->linkBuilder = new RequestLinkBuilder();
        $this->billingAddressBuilder = new BasicAddressBuilder();
        $this->customerBuilder = new BasicCustomerBuilder();
        $this->dbaBuilder = new RequestDbaBuilder();
        $this->orderBuilder = new RequestOrderBuilder();
        $this->shippingAddressBuilder = new BasicAddressBuilder();
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
     * @return RequestLinkBuilder
     */
    public function link(): RequestLinkBuilder
    {
        $this->isLinkBuilderTouched = true;
        return $this->linkBuilder;
    }

    /**
     * @return BasicAddressBuilder
     */
    public function billingAddress(): BasicAddressBuilder
    {
        $this->isBillingAddressBuilderTouched = true;
        return $this->billingAddressBuilder;
    }

    /**
     * @return BasicCustomerBuilder
     */
    public function customer(): BasicCustomerBuilder
    {
        $this->isCustomerBuilderTouched = true;
        return $this->customerBuilder;
    }

    /**
     * @return RequestDbaBuilder
     */
    public function dba(): RequestDbaBuilder
    {
        $this->isDbaBuilderTouched = true;
        return $this->dbaBuilder;
    }

    /**
     * @return RequestOrderBuilder
     */
    public function order(): RequestOrderBuilder
    {
        $this->isOrderBuilderTouched = true;
        return $this->orderBuilder;
    }

    /**
     * @return BasicAddressBuilder
     */
    public function shippingAddress(): BasicAddressBuilder
    {
        $this->isShippingAddressBuilderTouched = true;
        return $this->shippingAddressBuilder;
    }

    /**
     * @return RequestBodyObject
     */
    protected function buildObject(): RequestBodyObject
    {
        return new RequestBodyObject(
            $this->isTransactionBuilderTouched ? $this->transactionBuilder->build() : null,
            $this->isLinkBuilderTouched ? $this->linkBuilder->build() : null,
            $this->isBillingAddressBuilderTouched ? $this->billingAddressBuilder->build() : null,
            $this->isCustomerBuilderTouched ? $this->customerBuilder->build() : null,
            $this->isDbaBuilderTouched ? $this->dbaBuilder->build() : null,
            $this->isOrderBuilderTouched ? $this->orderBuilder->build() : null,
            $this->isShippingAddressBuilderTouched ? $this->shippingAddressBuilder->build() : null
        );
    }
}
