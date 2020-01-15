<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Payment;

use Payvision\SDK\Domain\Payments\ValueObject\Payment\RequestBody as RequestBodyObject;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\RequestTransaction;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\RequestBank;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\RequestBillingAddress;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\RequestCard;
use Payvision\SDK\Domain\Payments\ValueObject\Customer;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\RequestDba;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\RequestOption;
use Payvision\SDK\Domain\Payments\ValueObject\Order;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\RequestQr;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\RequestShippingAddress;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\RequestThreeDSecure;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\RequestWallet;
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
     * @param RequestTransaction $transaction
     * @return self
     */
    public function setTransaction(RequestTransaction $transaction): self
    {
        return $this->set('transaction', $transaction);
    }

    /**
     * @param RequestBank $bank
     * @return self
     */
    public function setBank(RequestBank $bank): self
    {
        return $this->set('bank', $bank);
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
     * @param RequestCard $card
     * @return self
     */
    public function setCard(RequestCard $card): self
    {
        return $this->set('card', $card);
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
     * @param Order $order
     * @return self
     */
    public function setOrder(Order $order): self
    {
        return $this->set('order', $order);
    }

    /**
     * @param RequestQr $qr
     * @return self
     */
    public function setQr(RequestQr $qr): self
    {
        return $this->set('qr', $qr);
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
     * @param RequestThreeDSecure $threeDSecure
     * @return self
     */
    public function setThreeDSecure(RequestThreeDSecure $threeDSecure): self
    {
        return $this->set('threeDSecure', $threeDSecure);
    }

    /**
     * @param RequestWallet $wallet
     * @return self
     */
    public function setWallet(RequestWallet $wallet): self
    {
        return $this->set('wallet', $wallet);
    }

    /**
     * @return RequestBodyObject
     */
    protected function buildObject(): RequestBodyObject
    {
        return new RequestBodyObject(
            $this->get('transaction'),
            $this->get('bank'),
            $this->get('billingAddress'),
            $this->get('card'),
            $this->get('customer'),
            $this->get('dba'),
            $this->get('option'),
            $this->get('order'),
            $this->get('qr'),
            $this->get('shippingAddress'),
            $this->get('threeDSecure'),
            $this->get('wallet')
        );
    }
}
