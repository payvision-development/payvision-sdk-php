<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Composite\Response;

use Payvision\SDK\Domain\Payments\ValueObject\Response\Body as BodyObject;
use Payvision\SDK\Domain\Payments\Service\Builder\Response\Bank as BankBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Response\Card as CardBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Response\Qr as QrBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Composite\Response\Redirect as RedirectBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Response\ThreeDSecure as ThreeDSecureBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Response\Token as TokenBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Response\Transaction as TransactionBuilder;
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
     * @var CardBuilder
     */
    private $cardBuilder;

    /**
     * @var bool
     */
    private $isCardBuilderTouched = false;

    /**
     * @var QrBuilder
     */
    private $qrBuilder;

    /**
     * @var bool
     */
    private $isQrBuilderTouched = false;

    /**
     * @var RedirectBuilder
     */
    private $redirectBuilder;

    /**
     * @var bool
     */
    private $isRedirectBuilderTouched = false;

    /**
     * @var ThreeDSecureBuilder
     */
    private $threeDSecureBuilder;

    /**
     * @var bool
     */
    private $isThreeDSecureBuilderTouched = false;

    /**
     * @var TokenBuilder
     */
    private $tokenBuilder;

    /**
     * @var bool
     */
    private $isTokenBuilderTouched = false;

    /**
     * @var TransactionBuilder
     */
    private $transactionBuilder;

    /**
     * @var bool
     */
    private $isTransactionBuilderTouched = false;

    public function __construct()
    {
        $this->bankBuilder = new BankBuilder();
        $this->cardBuilder = new CardBuilder();
        $this->qrBuilder = new QrBuilder();
        $this->redirectBuilder = new RedirectBuilder();
        $this->threeDSecureBuilder = new ThreeDSecureBuilder();
        $this->tokenBuilder = new TokenBuilder();
        $this->transactionBuilder = new TransactionBuilder();
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

    public function card(): CardBuilder
    {
        $this->isCardBuilderTouched = true;
        return $this->cardBuilder;
    }

    public function qr(): QrBuilder
    {
        $this->isQrBuilderTouched = true;
        return $this->qrBuilder;
    }

    public function redirect(): RedirectBuilder
    {
        $this->isRedirectBuilderTouched = true;
        return $this->redirectBuilder;
    }

    public function threeDSecure(): ThreeDSecureBuilder
    {
        $this->isThreeDSecureBuilderTouched = true;
        return $this->threeDSecureBuilder;
    }

    public function token(): TokenBuilder
    {
        $this->isTokenBuilderTouched = true;
        return $this->tokenBuilder;
    }

    public function transaction(): TransactionBuilder
    {
        $this->isTransactionBuilderTouched = true;
        return $this->transactionBuilder;
    }

    protected function buildObject(): BodyObject
    {
        return new BodyObject(
            $this->isBankBuilderTouched ? $this->bankBuilder->build() : null,
            $this->isCardBuilderTouched ? $this->cardBuilder->build() : null,
            $this->isQrBuilderTouched ? $this->qrBuilder->build() : null,
            $this->isRedirectBuilderTouched ? $this->redirectBuilder->build() : null,
            $this->isThreeDSecureBuilderTouched ? $this->threeDSecureBuilder->build() : null,
            $this->isTokenBuilderTouched ? $this->tokenBuilder->build() : null,
            $this->isTransactionBuilderTouched ? $this->transactionBuilder->build() : null
        );
    }
}
