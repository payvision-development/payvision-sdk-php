<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\Service\Builder\Checkout;

use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\RequestBody as RequestBodyObject;
use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\RequestCheckout;
use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\RequestTransaction;
use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\RequestBillingAddress;
use Payvision\SDK\Domain\Checkouts\ValueObject\Customer;
use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\RequestDba;
use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\RequestOption;
use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\RequestOrder;
use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\RequestShippingAddress;
use Payvision\SDK\Domain\Service\Builder\Basic;

class RequestBody extends Basic
{
    /**
     * @return RequestBodyObject
     */
    public function build(): RequestBodyObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param RequestCheckout $checkout
     * @return self
     */
    public function setCheckout(RequestCheckout $checkout): self
    {
        return $this->set('checkout', $checkout);
    }

    /**
     * @param RequestTransaction $transaction
     * @return self
     */
    public function setTransaction(RequestTransaction $transaction): self
    {
        return $this->set('transaction', $transaction);
    }

    /**
     * @param RequestBillingAddress $billingAddress
     * @return self
     */
    public function setBillingAddress(RequestBillingAddress $billingAddress): self
    {
        return $this->set('billingAddress', $billingAddress);
    }

    /**
     * @param Customer $customer
     * @return self
     */
    public function setCustomer(Customer $customer): self
    {
        return $this->set('customer', $customer);
    }

    /**
     * @param RequestDba $dba
     * @return self
     */
    public function setDba(RequestDba $dba): self
    {
        return $this->set('dba', $dba);
    }

    /**
     * @param RequestOption $option
     * @return self
     */
    public function setOption(RequestOption $option): self
    {
        return $this->set('option', $option);
    }

    /**
     * @param RequestOrder $order
     * @return self
     */
    public function setOrder(RequestOrder $order): self
    {
        return $this->set('order', $order);
    }

    /**
     * @param RequestShippingAddress $shippingAddress
     * @return self
     */
    public function setShippingAddress(RequestShippingAddress $shippingAddress): self
    {
        return $this->set('shippingAddress', $shippingAddress);
    }

    /**
     * @return RequestBodyObject
     */
    protected function buildObject(): RequestBodyObject
    {
        return new RequestBodyObject(
            $this->get('checkout'),
            $this->get('transaction'),
            $this->get('billingAddress'),
            $this->get('customer'),
            $this->get('dba'),
            $this->get('option'),
            $this->get('order'),
            $this->get('shippingAddress')
        );
    }
}
