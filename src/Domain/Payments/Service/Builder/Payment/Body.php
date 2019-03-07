<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Payment;

use Payvision\SDK\Domain\Payments\ValueObject\Payment\Body as BodyObject;
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
use Payvision\SDK\Domain\Service\Builder\Basic;

class Body extends Basic
{
    public function build(): BodyObject
    {
        return $this->buildAndReset();
    }

    public function setBank(Bank $bank): self
    {
        return $this->set('bank', $bank);
    }

    public function setBillingAddress(BillingAddress $billingAddress): self
    {
        return $this->set('billingAddress', $billingAddress);
    }

    public function setCard(Card $card): self
    {
        return $this->set('card', $card);
    }

    public function setCustomer(Customer $customer): self
    {
        return $this->set('customer', $customer);
    }

    public function setDba(Dba $dba): self
    {
        return $this->set('dba', $dba);
    }

    public function setOption(Option $option): self
    {
        return $this->set('option', $option);
    }

    public function setQr(Qr $qr): self
    {
        return $this->set('qr', $qr);
    }

    public function setShippingAddress(ShippingAddress $shippingAddress): self
    {
        return $this->set('shippingAddress', $shippingAddress);
    }

    public function setThreeDSecure(ThreeDSecure $threeDSecure): self
    {
        return $this->set('threeDSecure', $threeDSecure);
    }

    public function setTransaction(Transaction $transaction): self
    {
        return $this->set('transaction', $transaction);
    }

    public function setWallet(Wallet $wallet): self
    {
        return $this->set('wallet', $wallet);
    }

    protected function buildObject(): BodyObject
    {
        return new BodyObject(
            $this->get('bank'),
            $this->get('billingAddress'),
            $this->get('card'),
            $this->get('customer'),
            $this->get('dba'),
            $this->get('option'),
            $this->get('qr'),
            $this->get('shippingAddress'),
            $this->get('threeDSecure'),
            $this->get('transaction'),
            $this->get('wallet')
        );
    }
}
