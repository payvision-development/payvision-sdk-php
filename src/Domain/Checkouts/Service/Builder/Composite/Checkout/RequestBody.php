<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\Service\Builder\Composite\Checkout;

use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\RequestBody as RequestBodyObject;
use Payvision\SDK\Domain\Checkouts\Service\Builder\Composite\Checkout\RequestCheckout as RequestCheckoutBuilder;
use Payvision\SDK\Domain\Checkouts\Service\Builder\Checkout\RequestTransaction as RequestTransactionBuilder;
use Payvision\SDK\Domain\Checkouts\Service\Builder\Checkout\RequestBillingAddress as RequestBillingAddressBuilder;
use Payvision\SDK\Domain\Checkouts\Service\Builder\Customer as CustomerBuilder;
use Payvision\SDK\Domain\Checkouts\Service\Builder\Checkout\RequestDba as RequestDbaBuilder;
use Payvision\SDK\Domain\Checkouts\Service\Builder\Checkout\RequestOption as RequestOptionBuilder;
use Payvision\SDK\Domain\Checkouts\Service\Builder\Checkout\RequestOrder as RequestOrderBuilder;
use Payvision\SDK\Domain\Checkouts\Service\Builder\Composite\Checkout\RequestShippingAddress as RequestShippingAddressBuilder;
use Payvision\SDK\Domain\Service\Builder\Basic;

class RequestBody extends Basic
{
    /**
     * @var RequestCheckoutBuilder
     */
    private $checkoutBuilder;

    /**
     * @var bool
     */
    private $isCheckoutBuilderTouched = false;

    /**
     * @var RequestTransactionBuilder
     */
    private $transactionBuilder;

    /**
     * @var bool
     */
    private $isTransactionBuilderTouched = false;

    /**
     * @var RequestBillingAddressBuilder
     */
    private $billingAddressBuilder;

    /**
     * @var bool
     */
    private $isBillingAddressBuilderTouched = false;

    /**
     * @var CustomerBuilder
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
     * @var RequestOptionBuilder
     */
    private $optionBuilder;

    /**
     * @var bool
     */
    private $isOptionBuilderTouched = false;

    /**
     * @var RequestOrderBuilder
     */
    private $orderBuilder;

    /**
     * @var bool
     */
    private $isOrderBuilderTouched = false;

    /**
     * @var RequestShippingAddressBuilder
     */
    private $shippingAddressBuilder;

    /**
     * @var bool
     */
    private $isShippingAddressBuilderTouched = false;

    public function __construct()
    {
        $this->checkoutBuilder = new RequestCheckoutBuilder();
        $this->transactionBuilder = new RequestTransactionBuilder();
        $this->billingAddressBuilder = new RequestBillingAddressBuilder();
        $this->customerBuilder = new CustomerBuilder();
        $this->dbaBuilder = new RequestDbaBuilder();
        $this->optionBuilder = new RequestOptionBuilder();
        $this->orderBuilder = new RequestOrderBuilder();
        $this->shippingAddressBuilder = new RequestShippingAddressBuilder();
    }

    /**
     * @return RequestBodyObject
     */
    public function build(): RequestBodyObject
    {
        return $this->buildAndReset();
    }

    /**
     * @return RequestCheckoutBuilder
     */
    public function checkout(): RequestCheckoutBuilder
    {
        $this->isCheckoutBuilderTouched = true;
        return $this->checkoutBuilder;
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
     * @return RequestBillingAddressBuilder
     */
    public function billingAddress(): RequestBillingAddressBuilder
    {
        $this->isBillingAddressBuilderTouched = true;
        return $this->billingAddressBuilder;
    }

    /**
     * @return CustomerBuilder
     */
    public function customer(): CustomerBuilder
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
     * @return RequestOptionBuilder
     */
    public function option(): RequestOptionBuilder
    {
        $this->isOptionBuilderTouched = true;
        return $this->optionBuilder;
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
     * @return RequestShippingAddressBuilder
     */
    public function shippingAddress(): RequestShippingAddressBuilder
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
            $this->isCheckoutBuilderTouched ? $this->checkoutBuilder->build() : null,
            $this->isTransactionBuilderTouched ? $this->transactionBuilder->build() : null,
            $this->isBillingAddressBuilderTouched ? $this->billingAddressBuilder->build() : null,
            $this->isCustomerBuilderTouched ? $this->customerBuilder->build() : null,
            $this->isDbaBuilderTouched ? $this->dbaBuilder->build() : null,
            $this->isOptionBuilderTouched ? $this->optionBuilder->build() : null,
            $this->isOrderBuilderTouched ? $this->orderBuilder->build() : null,
            $this->isShippingAddressBuilderTouched ? $this->shippingAddressBuilder->build() : null
        );
    }
}
