<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\Service\Builder\Composite\Checkout;

use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\ResponseBody as ResponseBodyObject;
use Payvision\SDK\Domain\Checkouts\Service\Builder\Composite\Checkout\ResponseCheckout as ResponseCheckoutBuilder;
use Payvision\SDK\Domain\Checkouts\Service\Builder\Error as ErrorBuilder;
use Payvision\SDK\Domain\Checkouts\Service\Builder\Checkout\ResponseTransaction as ResponseTransactionBuilder;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponseBody extends Basic
{
    /**
     * @var ResponseCheckoutBuilder
     */
    private $checkoutBuilder;

    /**
     * @var bool
     */
    private $isCheckoutBuilderTouched = false;

    /**
     * @var ErrorBuilder
     */
    private $errorBuilder;

    /**
     * @var bool
     */
    private $isErrorBuilderTouched = false;

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
        $this->checkoutBuilder = new ResponseCheckoutBuilder();
        $this->errorBuilder = new ErrorBuilder();
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
     * @return ResponseCheckoutBuilder
     */
    public function checkout(): ResponseCheckoutBuilder
    {
        $this->isCheckoutBuilderTouched = true;
        return $this->checkoutBuilder;
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
            $this->isCheckoutBuilderTouched ? $this->checkoutBuilder->build() : null,
            $this->isErrorBuilderTouched ? $this->errorBuilder->build() : null,
            $this->isTransactionBuilderTouched ? $this->transactionBuilder->build() : null
        );
    }
}
