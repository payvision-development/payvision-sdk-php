<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Payment;

use Payvision\SDK\Domain\Payments\ValueObject\Customer;
use Payvision\SDK\Domain\Payments\ValueObject\Order;

class RequestBody
{
    /**
     * @var RequestTransaction
     */
    private $transaction;

    /**
     * @var RequestBank
     */
    private $bank;

    /**
     * @var RequestBillingAddress
     */
    private $billingAddress;

    /**
     * @var RequestCard
     */
    private $card;

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
     * @var Order
     */
    private $order;

    /**
     * @var RequestQr
     */
    private $qr;

    /**
     * @var RequestShippingAddress
     */
    private $shippingAddress;

    /**
     * @var RequestThreeDSecure
     */
    private $threeDSecure;

    /**
     * @var RequestWallet
     */
    private $wallet;

    /**
     * RequestBody constructor.
     *
     * @param RequestTransaction $transaction
     * @param RequestBank $bank
     * @param RequestBillingAddress $billingAddress
     * @param RequestCard $card
     * @param Customer $customer
     * @param RequestDba $dba
     * @param RequestOption $option
     * @param Order $order
     * @param RequestQr $qr
     * @param RequestShippingAddress $shippingAddress
     * @param RequestThreeDSecure $threeDSecure
     * @param RequestWallet $wallet
     */
    public function __construct(
        RequestTransaction $transaction,
        RequestBank $bank = null,
        RequestBillingAddress $billingAddress = null,
        RequestCard $card = null,
        Customer $customer = null,
        RequestDba $dba = null,
        RequestOption $option = null,
        Order $order = null,
        RequestQr $qr = null,
        RequestShippingAddress $shippingAddress = null,
        RequestThreeDSecure $threeDSecure = null,
        RequestWallet $wallet = null
    ) {
        $this->transaction = $transaction;
        $this->bank = $bank;
        $this->billingAddress = $billingAddress;
        $this->card = $card;
        $this->customer = $customer;
        $this->dba = $dba;
        $this->option = $option;
        $this->order = $order;
        $this->qr = $qr;
        $this->shippingAddress = $shippingAddress;
        $this->threeDSecure = $threeDSecure;
        $this->wallet = $wallet;
    }

    /**
     * @return RequestTransaction
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * @return RequestBank|null
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * @return RequestBillingAddress|null
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @return RequestCard|null
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * @return Customer|null
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
     * @return RequestOption|null
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * @return Order|null
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @return RequestQr|null
     */
    public function getQr()
    {
        return $this->qr;
    }

    /**
     * @return RequestShippingAddress|null
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * @return RequestThreeDSecure|null
     */
    public function getThreeDSecure()
    {
        return $this->threeDSecure;
    }

    /**
     * @return RequestWallet|null
     */
    public function getWallet()
    {
        return $this->wallet;
    }
}
