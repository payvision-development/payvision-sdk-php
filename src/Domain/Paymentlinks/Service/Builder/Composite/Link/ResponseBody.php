<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\Service\Builder\Composite\Link;

use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\ResponseBody as ResponseBodyObject;
use Payvision\SDK\Domain\Paymentlinks\Service\Builder\Error as ErrorBuilder;
use Payvision\SDK\Domain\Paymentlinks\Service\Builder\Composite\Link\ResponseLink as ResponseLinkBuilder;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\ResponsePayment as LinkResponsePayment;
use Payvision\SDK\Domain\Paymentlinks\Service\Builder\Link\ResponseTransaction as ResponseTransactionBuilder;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponseBody extends Basic
{
    /**
     * @var ErrorBuilder
     */
    private $errorBuilder;

    /**
     * @var bool
     */
    private $isErrorBuilderTouched = false;

    /**
     * @var ResponseLinkBuilder
     */
    private $linkBuilder;

    /**
     * @var bool
     */
    private $isLinkBuilderTouched = false;

    /**
     * @var ResponseTransactionBuilder
     */
    private $transactionBuilder;

    /**
     * @var bool
     */
    private $isTransactionBuilderTouched = false;

    public function __construct()
    {
        $this->errorBuilder = new ErrorBuilder();
        $this->linkBuilder = new ResponseLinkBuilder();
        $this->transactionBuilder = new ResponseTransactionBuilder();
    }

    /**
     * @return ResponseBodyObject
     */
    public function build(): ResponseBodyObject
    {
        return $this->buildAndReset();
    }

    /**
     * @return ErrorBuilder
     */
    public function error(): ErrorBuilder
    {
        $this->isErrorBuilderTouched = true;
        return $this->errorBuilder;
    }

    /**
     * @return ResponseLinkBuilder
     */
    public function link(): ResponseLinkBuilder
    {
        $this->isLinkBuilderTouched = true;
        return $this->linkBuilder;
    }

    /**
     * @param ResponsePayment[] $payments
     * @return self
     */
    public function setPayments(array $payments): self
    {
        return $this->set('payments', $payments);
    }

    /**
     * @return ResponseTransactionBuilder
     */
    public function transaction(): ResponseTransactionBuilder
    {
        $this->isTransactionBuilderTouched = true;
        return $this->transactionBuilder;
    }

    /**
     * @return ResponseBodyObject
     */
    protected function buildObject(): ResponseBodyObject
    {
        return new ResponseBodyObject(
            $this->isErrorBuilderTouched ? $this->errorBuilder->build() : null,
            $this->isLinkBuilderTouched ? $this->linkBuilder->build() : null,
            $this->get('payments'),
            $this->isTransactionBuilderTouched ? $this->transactionBuilder->build() : null
        );
    }
}
