<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\Service\Builder\Composite\Link;

use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\ResponsePaymentBody as ResponsePaymentBodyObject;
use Payvision\SDK\Domain\Paymentlinks\Service\Builder\Link\ResponsePaymentBank as ResponsePaymentBankBuilder;
use Payvision\SDK\Domain\Paymentlinks\Service\Builder\Link\ResponsePaymentCard as ResponsePaymentCardBuilder;
use Payvision\SDK\Domain\Paymentlinks\Service\Builder\Link\ResponsePaymentError as ResponsePaymentErrorBuilder;
use Payvision\SDK\Domain\Paymentlinks\Service\Builder\Link\ResponsePaymentTransaction as ResponsePaymentTransactionBuilder;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponsePaymentBody extends Basic
{
    /**
     * @var ResponsePaymentBankBuilder
     */
    private $bankBuilder;

    /**
     * @var bool
     */
    private $isBankBuilderTouched = false;

    /**
     * @var ResponsePaymentCardBuilder
     */
    private $cardBuilder;

    /**
     * @var bool
     */
    private $isCardBuilderTouched = false;

    /**
     * @var ResponsePaymentErrorBuilder
     */
    private $errorBuilder;

    /**
     * @var bool
     */
    private $isErrorBuilderTouched = false;

    /**
     * @var ResponsePaymentTransactionBuilder
     */
    private $transactionBuilder;

    /**
     * @var bool
     */
    private $isTransactionBuilderTouched = false;

    public function __construct()
    {
        $this->bankBuilder = new ResponsePaymentBankBuilder();
        $this->cardBuilder = new ResponsePaymentCardBuilder();
        $this->errorBuilder = new ResponsePaymentErrorBuilder();
        $this->transactionBuilder = new ResponsePaymentTransactionBuilder();
    }

    /**
     * @return ResponsePaymentBodyObject
     */
    public function build(): ResponsePaymentBodyObject
    {
        return $this->buildAndReset();
    }

    /**
     * @return ResponsePaymentBankBuilder
     */
    public function bank(): ResponsePaymentBankBuilder
    {
        $this->isBankBuilderTouched = true;
        return $this->bankBuilder;
    }

    /**
     * @return ResponsePaymentCardBuilder
     */
    public function card(): ResponsePaymentCardBuilder
    {
        $this->isCardBuilderTouched = true;
        return $this->cardBuilder;
    }

    /**
     * @return ResponsePaymentErrorBuilder
     */
    public function error(): ResponsePaymentErrorBuilder
    {
        $this->isErrorBuilderTouched = true;
        return $this->errorBuilder;
    }

    /**
     * @return ResponsePaymentTransactionBuilder
     */
    public function transaction(): ResponsePaymentTransactionBuilder
    {
        $this->isTransactionBuilderTouched = true;
        return $this->transactionBuilder;
    }

    /**
     * @return ResponsePaymentBodyObject
     */
    protected function buildObject(): ResponsePaymentBodyObject
    {
        return new ResponsePaymentBodyObject(
            $this->isBankBuilderTouched ? $this->bankBuilder->build() : null,
            $this->isCardBuilderTouched ? $this->cardBuilder->build() : null,
            $this->isErrorBuilderTouched ? $this->errorBuilder->build() : null,
            $this->isTransactionBuilderTouched ? $this->transactionBuilder->build() : null
        );
    }
}
