<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\ValueObject\Checkout;

use Payvision\SDK\Domain\Checkouts\ValueObject\Customer;

class RequestBody
{
    /**
     * @var RequestCheckout
     */
    private $checkout;

    /**
     * @var RequestTransaction
     */
    private $transaction;

    /**
     * @var RequestBillingAddress
     */
    private $billingAddress;

    /**
     * @var Customer
     */
    private $customer;

    /**
     * @var RequestDba
     */
    private $dba;

    /**
     * @var RequestOption
     */
    private $option;

    /**
     * @var RequestOrder
     */
    private $order;

    /**
     * @var RequestShippingAddress
     */
    private $shippingAddress;

    /**
     * @var RequestThreeDSecure
     */
    private $threeDSecure;

    /**
     * RequestBody constructor.
     *
     * @param RequestCheckout $checkout
     * @param RequestTransaction $transaction
     * @param RequestBillingAddress $billingAddress
     * @param Customer $customer
     * @param RequestDba $dba
     * @param RequestOption $option
     * @param RequestOrder $order
     * @param RequestShippingAddress $shippingAddress
     * @param RequestThreeDSecure $threeDSecure
     */
    public function __construct(
        RequestCheckout $checkout,
        RequestTransaction $transaction,
        RequestBillingAddress $billingAddress = null,
        Customer $customer = null,
        RequestDba $dba = null,
        RequestOption $option = null,
        RequestOrder $order = null,
        RequestShippingAddress $shippingAddress = null,
        RequestThreeDSecure $threeDSecure = null
    ) {
        $this->checkout = $checkout;
        $this->transaction = $transaction;
        $this->billingAddress = $billingAddress;
        $this->customer = $customer;
        $this->dba = $dba;
        $this->option = $option;
        $this->order = $order;
        $this->shippingAddress = $shippingAddress;
        $this->threeDSecure = $threeDSecure;
    }

    /**
     * @return RequestCheckout
     */
    public function getCheckout(): RequestCheckout
    {
        return $this->checkout;
    }

    /**
     * @return RequestTransaction
     */
    public function getTransaction(): RequestTransaction
    {
        return $this->transaction;
    }

    /**
     * @return RequestBillingAddress|null
     */
    public function getBillingAddress(): ?RequestBillingAddress
    {
        return $this->billingAddress;
    }

    /**
     * @return Customer|null
     */
    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    /**
     * @return RequestDba|null
     */
    public function getDba(): ?RequestDba
    {
        return $this->dba;
    }

    /**
     * @return RequestOption|null
     */
    public function getOption(): ?RequestOption
    {
        return $this->option;
    }

    /**
     * @return RequestOrder|null
     */
    public function getOrder(): ?RequestOrder
    {
        return $this->order;
    }

    /**
     * @return RequestShippingAddress|null
     */
    public function getShippingAddress(): ?RequestShippingAddress
    {
        return $this->shippingAddress;
    }

    /**
     * @return RequestThreeDSecure|null
     */
    public function getThreeDSecure(): ?RequestThreeDSecure
    {
        return $this->threeDSecure;
    }
}
