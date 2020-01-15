<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Composite\Payment;

use Payvision\SDK\Domain\Payments\ValueObject\Payment\RequestBody as RequestBodyObject;
use Payvision\SDK\Domain\Payments\Service\Builder\Payment\RequestTransaction as RequestTransactionBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Payment\RequestBank as RequestBankBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Payment\RequestBillingAddress as RequestBillingAddressBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Payment\RequestCard as RequestCardBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Customer as CustomerBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Payment\RequestDba as RequestDbaBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Payment\RequestOption as RequestOptionBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Order as OrderBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Payment\RequestQr as RequestQrBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Composite\Payment\RequestShippingAddress as RequestShippingAddressBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Payment\RequestThreeDSecure as RequestThreeDSecureBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Payment\RequestWallet as RequestWalletBuilder;
use Payvision\SDK\Domain\Service\Builder\Basic;

class RequestBody extends Basic
{
    /**
     * @var RequestTransactionBuilder
     */
    private $transactionBuilder;

    /**
     * @var bool
     */
    private $isTransactionBuilderTouched = false;

    /**
     * @var RequestBankBuilder
     */
    private $bankBuilder;

    /**
     * @var bool
     */
    private $isBankBuilderTouched = false;

    /**
     * @var RequestBillingAddressBuilder
     */
    private $billingAddressBuilder;

    /**
     * @var bool
     */
    private $isBillingAddressBuilderTouched = false;

    /**
     * @var RequestCardBuilder
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
     * @var RequestDbaBuilder
     */
    private $dbaBuilder;

    /**
     * @var bool
     */
    private $isDbaBuilderTouched = false;

    /**
     * @var RequestOptionBuilder
     */
    private $optionBuilder;

    /**
     * @var bool
     */
    private $isOptionBuilderTouched = false;

    /**
     * @var OrderBuilder
     */
    private $orderBuilder;

    /**
     * @var bool
     */
    private $isOrderBuilderTouched = false;

    /**
     * @var RequestQrBuilder
     */
    private $qrBuilder;

    /**
     * @var bool
     */
    private $isQrBuilderTouched = false;

    /**
     * @var RequestShippingAddressBuilder
     */
    private $shippingAddressBuilder;

    /**
     * @var bool
     */
    private $isShippingAddressBuilderTouched = false;

    /**
     * @var RequestThreeDSecureBuilder
     */
    private $threeDSecureBuilder;

    /**
     * @var bool
     */
    private $isThreeDSecureBuilderTouched = false;

    /**
     * @var RequestWalletBuilder
     */
    private $walletBuilder;

    /**
     * @var bool
     */
    private $isWalletBuilderTouched = false;

    public function __construct()
    {
        $this->transactionBuilder = new RequestTransactionBuilder();
        $this->bankBuilder = new RequestBankBuilder();
        $this->billingAddressBuilder = new RequestBillingAddressBuilder();
        $this->cardBuilder = new RequestCardBuilder();
        $this->customerBuilder = new CustomerBuilder();
        $this->dbaBuilder = new RequestDbaBuilder();
        $this->optionBuilder = new RequestOptionBuilder();
        $this->orderBuilder = new OrderBuilder();
        $this->qrBuilder = new RequestQrBuilder();
        $this->shippingAddressBuilder = new RequestShippingAddressBuilder();
        $this->threeDSecureBuilder = new RequestThreeDSecureBuilder();
        $this->walletBuilder = new RequestWalletBuilder();
    }

    /**
     * @return RequestBodyObject
     */
    public function build(): RequestBodyObject
    {
        return $this->buildAndReset();
    }

    /**
     * @return RequestTransactionBuilder
     */
    public function transaction(): RequestTransactionBuilder
    {
        $this->isTransactionBuilderTouched = true;
        return $this->transactionBuilder;
    }

    /**
     * @return RequestBankBuilder
     */
    public function bank(): RequestBankBuilder
    {
        $this->isBankBuilderTouched = true;
        return $this->bankBuilder;
    }

    /**
     * @return RequestBillingAddressBuilder
     */
    public function billingAddress(): RequestBillingAddressBuilder
    {
        $this->isBillingAddressBuilderTouched = true;
        return $this->billingAddressBuilder;
    }

    /**
     * @return RequestCardBuilder
     */
    public function card(): RequestCardBuilder
    {
        $this->isCardBuilderTouched = true;
        return $this->cardBuilder;
    }

    /**
     * @return CustomerBuilder
     */
    public function customer(): CustomerBuilder
    {
        $this->isCustomerBuilderTouched = true;
        return $this->customerBuilder;
    }

    /**
     * @return RequestDbaBuilder
     */
    public function dba(): RequestDbaBuilder
    {
        $this->isDbaBuilderTouched = true;
        return $this->dbaBuilder;
    }

    /**
     * @return RequestOptionBuilder
     */
    public function option(): RequestOptionBuilder
    {
        $this->isOptionBuilderTouched = true;
        return $this->optionBuilder;
    }

    /**
     * @return OrderBuilder
     */
    public function order(): OrderBuilder
    {
        $this->isOrderBuilderTouched = true;
        return $this->orderBuilder;
    }

    /**
     * @return RequestQrBuilder
     */
    public function qr(): RequestQrBuilder
    {
        $this->isQrBuilderTouched = true;
        return $this->qrBuilder;
    }

    /**
     * @return RequestShippingAddressBuilder
     */
    public function shippingAddress(): RequestShippingAddressBuilder
    {
        $this->isShippingAddressBuilderTouched = true;
        return $this->shippingAddressBuilder;
    }

    /**
     * @return RequestThreeDSecureBuilder
     */
    public function threeDSecure(): RequestThreeDSecureBuilder
    {
        $this->isThreeDSecureBuilderTouched = true;
        return $this->threeDSecureBuilder;
    }

    /**
     * @return RequestWalletBuilder
     */
    public function wallet(): RequestWalletBuilder
    {
        $this->isWalletBuilderTouched = true;
        return $this->walletBuilder;
    }

    /**
     * @return RequestBodyObject
     */
    protected function buildObject(): RequestBodyObject
    {
        return new RequestBodyObject(
            $this->isTransactionBuilderTouched ? $this->transactionBuilder->build() : null,
            $this->isBankBuilderTouched ? $this->bankBuilder->build() : null,
            $this->isBillingAddressBuilderTouched ? $this->billingAddressBuilder->build() : null,
            $this->isCardBuilderTouched ? $this->cardBuilder->build() : null,
            $this->isCustomerBuilderTouched ? $this->customerBuilder->build() : null,
            $this->isDbaBuilderTouched ? $this->dbaBuilder->build() : null,
            $this->isOptionBuilderTouched ? $this->optionBuilder->build() : null,
            $this->isOrderBuilderTouched ? $this->orderBuilder->build() : null,
            $this->isQrBuilderTouched ? $this->qrBuilder->build() : null,
            $this->isShippingAddressBuilderTouched ? $this->shippingAddressBuilder->build() : null,
            $this->isThreeDSecureBuilderTouched ? $this->threeDSecureBuilder->build() : null,
            $this->isWalletBuilderTouched ? $this->walletBuilder->build() : null
        );
    }
}
