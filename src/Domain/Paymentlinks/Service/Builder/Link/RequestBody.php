<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\Service\Builder\Link;

use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\RequestBody as RequestBodyObject;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\RequestLink;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\RequestTransaction;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\BasicAddress;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\BasicCustomer;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\RequestDba;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\RequestOrder;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\RequestThreeDSecure;
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
     * @param RequestLink $link
     * @return RequestBody
     */
    public function setLink(RequestLink $link): RequestBody
    {
        return $this->set('link', $link);
    }

    /**
     * @param RequestTransaction $transaction
     * @return RequestBody
     */
    public function setTransaction(RequestTransaction $transaction): RequestBody
    {
        return $this->set('transaction', $transaction);
    }

    /**
     * @param BasicAddress $billingAddress
     * @return RequestBody
     */
    public function setBillingAddress(BasicAddress $billingAddress): RequestBody
    {
        return $this->set('billingAddress', $billingAddress);
    }

    /**
     * @param BasicCustomer $customer
     * @return RequestBody
     */
    public function setCustomer(BasicCustomer $customer): RequestBody
    {
        return $this->set('customer', $customer);
    }

    /**
     * @param RequestDba $dba
     * @return RequestBody
     */
    public function setDba(RequestDba $dba): RequestBody
    {
        return $this->set('dba', $dba);
    }

    /**
     * @param RequestOrder $order
     * @return RequestBody
     */
    public function setOrder(RequestOrder $order): RequestBody
    {
        return $this->set('order', $order);
    }

    /**
     * @param BasicAddress $shippingAddress
     * @return RequestBody
     */
    public function setShippingAddress(BasicAddress $shippingAddress): RequestBody
    {
        return $this->set('shippingAddress', $shippingAddress);
    }

    /**
     * @param RequestThreeDSecure $threeDSecure
     * @return RequestBody
     */
    public function setThreeDSecure(RequestThreeDSecure $threeDSecure): RequestBody
    {
        return $this->set('threeDSecure', $threeDSecure);
    }

    /**
     * @return RequestBodyObject
     */
    protected function buildObject(): RequestBodyObject
    {
        return new RequestBodyObject(
            $this->get('link'),
            $this->get('transaction'),
            $this->get('billingAddress'),
            $this->get('customer'),
            $this->get('dba'),
            $this->get('order'),
            $this->get('shippingAddress'),
            $this->get('threeDSecure')
        );
    }
}
