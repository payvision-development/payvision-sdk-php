<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Composite\Refund;

use Payvision\SDK\Domain\Payments\ValueObject\Refund\ResponseBody as ResponseBodyObject;
use Payvision\SDK\Domain\Payments\Service\Builder\Refund\ResponseCard as ResponseCardBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Error as ErrorBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Refund\ResponseTransaction as ResponseTransactionBuilder;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponseBody extends Basic
{
    /**
     * @var ResponseCardBuilder
     */
    private $cardBuilder;

    /**
     * @var bool
     */
    private $isCardBuilderTouched = false;

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
        $this->cardBuilder = new ResponseCardBuilder();
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
     * @return ResponseCardBuilder
     */
    public function card(): ResponseCardBuilder
    {
        $this->isCardBuilderTouched = true;
        return $this->cardBuilder;
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
            $this->isCardBuilderTouched ? $this->cardBuilder->build() : null,
            $this->isErrorBuilderTouched ? $this->errorBuilder->build() : null,
            $this->isTransactionBuilderTouched ? $this->transactionBuilder->build() : null
        );
    }
}
