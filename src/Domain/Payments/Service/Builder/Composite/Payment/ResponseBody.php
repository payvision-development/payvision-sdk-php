<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Composite\Payment;

use Payvision\SDK\Domain\Payments\ValueObject\Payment\ResponseBody as ResponseBodyObject;
use Payvision\SDK\Domain\Payments\Service\Builder\Payment\ResponseBank as ResponseBankBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Payment\ResponseCard as ResponseCardBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Error as ErrorBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Payment\ResponseQr as ResponseQrBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Payment\ResponseRedirect as ResponseRedirectBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Payment\ResponseThreeDSecure as ResponseThreeDSecureBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Payment\ResponseToken as ResponseTokenBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Payment\ResponseTransaction as ResponseTransactionBuilder;
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
     * @var ResponseQrBuilder
     */
    private $qrBuilder;

    /**
     * @var bool
     */
    private $isQrBuilderTouched = false;

    /**
     * @var ResponseRedirectBuilder
     */
    private $redirectBuilder;

    /**
     * @var bool
     */
    private $isRedirectBuilderTouched = false;

    /**
     * @var ResponseThreeDSecureBuilder
     */
    private $threeDSecureBuilder;

    /**
     * @var bool
     */
    private $isThreeDSecureBuilderTouched = false;

    /**
     * @var ResponseTokenBuilder
     */
    private $tokenBuilder;

    /**
     * @var bool
     */
    private $isTokenBuilderTouched = false;

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
        $this->qrBuilder = new ResponseQrBuilder();
        $this->redirectBuilder = new ResponseRedirectBuilder();
        $this->threeDSecureBuilder = new ResponseThreeDSecureBuilder();
        $this->tokenBuilder = new ResponseTokenBuilder();
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
     * @return ResponseQrBuilder
     */
    public function qr(): ResponseQrBuilder
    {
        $this->isQrBuilderTouched = true;
        return $this->qrBuilder;
    }

    /**
     * @return ResponseRedirectBuilder
     */
    public function redirect(): ResponseRedirectBuilder
    {
        $this->isRedirectBuilderTouched = true;
        return $this->redirectBuilder;
    }

    /**
     * @return ResponseThreeDSecureBuilder
     */
    public function threeDSecure(): ResponseThreeDSecureBuilder
    {
        $this->isThreeDSecureBuilderTouched = true;
        return $this->threeDSecureBuilder;
    }

    /**
     * @return ResponseTokenBuilder
     */
    public function token(): ResponseTokenBuilder
    {
        $this->isTokenBuilderTouched = true;
        return $this->tokenBuilder;
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
            $this->isQrBuilderTouched ? $this->qrBuilder->build() : null,
            $this->isRedirectBuilderTouched ? $this->redirectBuilder->build() : null,
            $this->isThreeDSecureBuilderTouched ? $this->threeDSecureBuilder->build() : null,
            $this->isTokenBuilderTouched ? $this->tokenBuilder->build() : null,
            $this->isTransactionBuilderTouched ? $this->transactionBuilder->build() : null
        );
    }
}
