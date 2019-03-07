<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Composite\Payment;

use Payvision\SDK\Domain\Payments\ValueObject\Payment\Body as BodyObject;
use Payvision\SDK\Domain\Payments\Service\Builder\Bank as BankBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\BillingAddress as BillingAddressBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Card as CardBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Customer as CustomerBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Dba as DbaBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Option as OptionBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Qr as QrBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\ShippingAddress as ShippingAddressBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\ThreeDSecure as ThreeDSecureBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Transaction as TransactionBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Wallet as WalletBuilder;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Body extends Basic
{
    /**
     * @var BankBuilder
     */
    private $bankBuilder;

    /**
     * @var bool
     */
    private $isBankBuilderTouched = false;

    /**
     * @var BillingAddressBuilder
     */
    private $billingAddressBuilder;

    /**
     * @var bool
     */
    private $isBillingAddressBuilderTouched = false;

    /**
     * @var CardBuilder
     */
    private $cardBuilder;

    /**
     * @var bool
     */
    private $isCardBuilderTouched = false;

    /**
     * @var CustomerBuilder
     */
    private $customerBuilder;

    /**
     * @var bool
     */
    private $isCustomerBuilderTouched = false;

    /**
     * @var DbaBuilder
     */
    private $dbaBuilder;

    /**
     * @var bool
     */
    private $isDbaBuilderTouched = false;

    /**
     * @var OptionBuilder
     */
    private $optionBuilder;

    /**
     * @var bool
     */
    private $isOptionBuilderTouched = false;

    /**
     * @var QrBuilder
     */
    private $qrBuilder;

    /**
     * @var bool
     */
    private $isQrBuilderTouched = false;

    /**
     * @var ShippingAddressBuilder
     */
    private $shippingAddressBuilder;

    /**
     * @var bool
     */
    private $isShippingAddressBuilderTouched = false;

    /**
     * @var ThreeDSecureBuilder
     */
    private $threeDSecureBuilder;

    /**
     * @var bool
     */
    private $isThreeDSecureBuilderTouched = false;

    /**
     * @var TransactionBuilder
     */
    private $transactionBuilder;

    /**
     * @var bool
     */
    private $isTransactionBuilderTouched = false;

    /**
     * @var WalletBuilder
     */
    private $walletBuilder;

    /**
     * @var bool
     */
    private $isWalletBuilderTouched = false;

    public function __construct()
    {
        $this->bankBuilder = new BankBuilder();
        $this->billingAddressBuilder = new BillingAddressBuilder();
        $this->cardBuilder = new CardBuilder();
        $this->customerBuilder = new CustomerBuilder();
        $this->dbaBuilder = new DbaBuilder();
        $this->optionBuilder = new OptionBuilder();
        $this->qrBuilder = new QrBuilder();
        $this->shippingAddressBuilder = new ShippingAddressBuilder();
        $this->threeDSecureBuilder = new ThreeDSecureBuilder();
        $this->transactionBuilder = new TransactionBuilder();
        $this->walletBuilder = new WalletBuilder();
    }

    public function build(): BodyObject
    {
        return $this->buildAndReset();
    }

    public function bank(): BankBuilder
    {
        $this->isBankBuilderTouched = true;
        return $this->bankBuilder;
    }

    public function billingAddress(): BillingAddressBuilder
    {
        $this->isBillingAddressBuilderTouched = true;
        return $this->billingAddressBuilder;
    }

    public function card(): CardBuilder
    {
        $this->isCardBuilderTouched = true;
        return $this->cardBuilder;
    }

    public function customer(): CustomerBuilder
    {
        $this->isCustomerBuilderTouched = true;
        return $this->customerBuilder;
    }

    public function dba(): DbaBuilder
    {
        $this->isDbaBuilderTouched = true;
        return $this->dbaBuilder;
    }

    public function option(): OptionBuilder
    {
        $this->isOptionBuilderTouched = true;
        return $this->optionBuilder;
    }

    public function qr(): QrBuilder
    {
        $this->isQrBuilderTouched = true;
        return $this->qrBuilder;
    }

    public function shippingAddress(): ShippingAddressBuilder
    {
        $this->isShippingAddressBuilderTouched = true;
        return $this->shippingAddressBuilder;
    }

    public function threeDSecure(): ThreeDSecureBuilder
    {
        $this->isThreeDSecureBuilderTouched = true;
        return $this->threeDSecureBuilder;
    }

    public function transaction(): TransactionBuilder
    {
        $this->isTransactionBuilderTouched = true;
        return $this->transactionBuilder;
    }

    public function wallet(): WalletBuilder
    {
        $this->isWalletBuilderTouched = true;
        return $this->walletBuilder;
    }

    protected function buildObject(): BodyObject
    {
        return new BodyObject(
            $this->isBankBuilderTouched ? $this->bankBuilder->build() : null,
            $this->isBillingAddressBuilderTouched ? $this->billingAddressBuilder->build() : null,
            $this->isCardBuilderTouched ? $this->cardBuilder->build() : null,
            $this->isCustomerBuilderTouched ? $this->customerBuilder->build() : null,
            $this->isDbaBuilderTouched ? $this->dbaBuilder->build() : null,
            $this->isOptionBuilderTouched ? $this->optionBuilder->build() : null,
            $this->isQrBuilderTouched ? $this->qrBuilder->build() : null,
            $this->isShippingAddressBuilderTouched ? $this->shippingAddressBuilder->build() : null,
            $this->isThreeDSecureBuilderTouched ? $this->threeDSecureBuilder->build() : null,
            $this->isTransactionBuilderTouched ? $this->transactionBuilder->build() : null,
            $this->isWalletBuilderTouched ? $this->walletBuilder->build() : null
        );
    }
}
