<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\ValueObject\Link;

use Payvision\SDK\Domain\Paymentlinks\ValueObject\BasicAddress;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\BasicCustomer;

class RequestBody
{
    /**
     * @var RequestTransaction
     */
    private $transaction;

    /**
     * @var RequestLink
     */
    private $link;

    /**
     * @var BasicAddress
     */
    private $billingAddress;

    /**
     * @var BasicCustomer
     */
    private $customer;

    /**
     * @var RequestDba
     */
    private $dba;

    /**
     * @var RequestOrder
     */
    private $order;

    /**
     * @var BasicAddress
     */
    private $shippingAddress;

    /**
     * RequestBody constructor.
     *
     * @param RequestTransaction $transaction
     * @param RequestLink $link
     * @param BasicAddress $billingAddress
     * @param BasicCustomer $customer
     * @param RequestDba $dba
     * @param RequestOrder $order
     * @param BasicAddress $shippingAddress
     */
    public function __construct(
        RequestTransaction $transaction,
        RequestLink $link,
        BasicAddress $billingAddress = null,
        BasicCustomer $customer = null,
        RequestDba $dba = null,
        RequestOrder $order = null,
        BasicAddress $shippingAddress = null
    ) {
        $this->transaction = $transaction;
        $this->link = $link;
        $this->billingAddress = $billingAddress;
        $this->customer = $customer;
        $this->dba = $dba;
        $this->order = $order;
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * @return RequestTransaction
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * @return RequestLink
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @return BasicAddress|null
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @return BasicCustomer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @return RequestDba|null
     */
    public function getDba()
    {
        return $this->dba;
    }

    /**
     * @return RequestOrder|null
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @return BasicAddress|null
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }
}
