<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Composite\Capture;

use Payvision\SDK\Domain\Payments\ValueObject\Capture\ResponseBody as ResponseBodyObject;
use Payvision\SDK\Domain\Payments\Service\Builder\Capture\ResponseBank as ResponseBankBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Payment\ResponseCard as ResponseCardBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Error as ErrorBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Capture\ResponseTransaction as ResponseTransactionBuilder;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponseBody extends Basic
{
    /**
     * @var ResponseBankBuilder
     */
    private $bankBuilder;

    /**
     * @var bool
     */
    private $isBankBuilderTouched = false;

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
        $this->bankBuilder = new ResponseBankBuilder();
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
     * @return ResponseBankBuilder
     */
    public function bank(): ResponseBankBuilder
    {
        $this->isBankBuilderTouched = true;
        return $this->bankBuilder;
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
            $this->isBankBuilderTouched ? $this->bankBuilder->build() : null,
            $this->isCardBuilderTouched ? $this->cardBuilder->build() : null,
            $this->isErrorBuilderTouched ? $this->errorBuilder->build() : null,
            $this->isTransactionBuilderTouched ? $this->transactionBuilder->build() : null
        );
    }
}
