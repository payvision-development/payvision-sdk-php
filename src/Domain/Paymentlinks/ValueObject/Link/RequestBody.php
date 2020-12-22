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
     * @var RequestLink
     */
    private $link;

    /**
     * @var RequestTransaction
     */
    private $transaction;

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
     * @var RequestThreeDSecure
     */
    private $threeDSecure;

    /**
     * RequestBody constructor.
     *
     * @param RequestLink $link
     * @param RequestTransaction $transaction
     * @param BasicAddress $billingAddress
     * @param BasicCustomer $customer
     * @param RequestDba $dba
     * @param RequestOrder $order
     * @param BasicAddress $shippingAddress
     * @param RequestThreeDSecure $threeDSecure
     */
    public function __construct(
        RequestLink $link,
        RequestTransaction $transaction,
        BasicAddress $billingAddress = null,
        BasicCustomer $customer = null,
        RequestDba $dba = null,
        RequestOrder $order = null,
        BasicAddress $shippingAddress = null,
        RequestThreeDSecure $threeDSecure = null
    ) {
        $this->link = $link;
        $this->transaction = $transaction;
        $this->billingAddress = $billingAddress;
        $this->customer = $customer;
        $this->dba = $dba;
        $this->order = $order;
        $this->shippingAddress = $shippingAddress;
        $this->threeDSecure = $threeDSecure;
    }

    /**
     * @return RequestLink
     */
    public function getLink(): RequestLink
    {
        return $this->link;
    }

    /**
     * @return RequestTransaction
     */
    public function getTransaction(): RequestTransaction
    {
        return $this->transaction;
    }

    /**
     * @return BasicAddress|null
     */
    public function getBillingAddress(): ?BasicAddress
    {
        return $this->billingAddress;
    }

    /**
     * @return BasicCustomer|null
     */
    public function getCustomer(): ?BasicCustomer
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
     * @return RequestOrder|null
     */
    public function getOrder(): ?RequestOrder
    {
        return $this->order;
    }

    /**
     * @return BasicAddress|null
     */
    public function getShippingAddress(): ?BasicAddress
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
