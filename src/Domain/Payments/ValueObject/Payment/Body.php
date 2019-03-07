<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Payment;

use Payvision\SDK\Domain\Payments\ValueObject\Bank;
use Payvision\SDK\Domain\Payments\ValueObject\BillingAddress;
use Payvision\SDK\Domain\Payments\ValueObject\Card;
use Payvision\SDK\Domain\Payments\ValueObject\Customer;
use Payvision\SDK\Domain\Payments\ValueObject\Dba;
use Payvision\SDK\Domain\Payments\ValueObject\Option;
use Payvision\SDK\Domain\Payments\ValueObject\Qr;
use Payvision\SDK\Domain\Payments\ValueObject\ShippingAddress;
use Payvision\SDK\Domain\Payments\ValueObject\ThreeDSecure;
use Payvision\SDK\Domain\Payments\ValueObject\Transaction;
use Payvision\SDK\Domain\Payments\ValueObject\Wallet;

class Body
{
    /**
     * @var Bank
     */
    private $bank;

    /**
     * @var BillingAddress
     */
    private $billingAddress;

    /**
     * @var Card
     */
    private $card;

    /**
     * @var Customer
     */
    private $customer;

    /**
     * @var Dba
     */
    private $dba;

    /**
     * @var Option
     */
    private $option;

    /**
     * @var Qr
     */
    private $qr;

    /**
     * @var ShippingAddress
     */
    private $shippingAddress;

    /**
     * @var ThreeDSecure
     */
    private $threeDSecure;

    /**
     * @var Transaction
     */
    private $transaction;

    /**
     * @var Wallet
     */
    private $wallet;

    /**
     * Body constructor.
     *
     * @param Bank $bank
     * @param BillingAddress $billingAddress
     * @param Card $card
     * @param Customer $customer
     * @param Dba $dba
     * @param Option $option
     * @param Qr $qr
     * @param ShippingAddress $shippingAddress
     * @param ThreeDSecure $threeDSecure
     * @param Transaction $transaction
     * @param Wallet $wallet
     */
    public function __construct(
        Bank $bank = null,
        BillingAddress $billingAddress = null,
        Card $card = null,
        Customer $customer = null,
        Dba $dba = null,
        Option $option = null,
        Qr $qr = null,
        ShippingAddress $shippingAddress = null,
        ThreeDSecure $threeDSecure = null,
        Transaction $transaction = null,
        Wallet $wallet = null
    ) {
        $this->bank = $bank;
        $this->billingAddress = $billingAddress;
        $this->card = $card;
        $this->customer = $customer;
        $this->dba = $dba;
        $this->option = $option;
        $this->qr = $qr;
        $this->shippingAddress = $shippingAddress;
        $this->threeDSecure = $threeDSecure;
        $this->transaction = $transaction;
        $this->wallet = $wallet;
    }

    /**
    * @return Bank|null
    */
    public function getBank()
    {
        return $this->bank;
    }

    /**
    * @return BillingAddress|null
    */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
    * @return Card|null
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
    * @return Dba|null
    */
    public function getDba()
    {
        return $this->dba;
    }

    /**
    * @return Option|null
    */
    public function getOption()
    {
        return $this->option;
    }

    /**
    * @return Qr|null
    */
    public function getQr()
    {
        return $this->qr;
    }

    /**
    * @return ShippingAddress|null
    */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
    * @return ThreeDSecure|null
    */
    public function getThreeDSecure()
    {
        return $this->threeDSecure;
    }

    /**
    * @return Transaction|null
    */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
    * @return Wallet|null
    */
    public function getWallet()
    {
        return $this->wallet;
    }
}
