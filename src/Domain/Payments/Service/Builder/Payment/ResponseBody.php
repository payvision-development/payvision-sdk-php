<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Payment;

use Payvision\SDK\Domain\Payments\ValueObject\Payment\ResponseBody as ResponseBodyObject;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\ResponseBank;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\ResponseCard;
use Payvision\SDK\Domain\Payments\ValueObject\Error;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\ResponseQr;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\ResponseRedirect;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\ResponseThreeDSecure;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\ResponseToken;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\ResponseTransaction;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponseBody extends Basic
{
    /**
     * @return ResponseBodyObject
     */
    public function build(): ResponseBodyObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param ResponseBank $bank
     * @return ResponseBody
     */
    public function setBank(ResponseBank $bank): ResponseBody
    {
        return $this->set('bank', $bank);
    }

    /**
     * @param ResponseCard $card
     * @return ResponseBody
     */
    public function setCard(ResponseCard $card): ResponseBody
    {
        return $this->set('card', $card);
    }

    /**
     * @param Error $error
     * @return ResponseBody
     */
    public function setError(Error $error): ResponseBody
    {
        return $this->set('error', $error);
    }

    /**
     * @param ResponseQr $qr
     * @return ResponseBody
     */
    public function setQr(ResponseQr $qr): ResponseBody
    {
        return $this->set('qr', $qr);
    }

    /**
     * @param ResponseRedirect $redirect
     * @return ResponseBody
     */
    public function setRedirect(ResponseRedirect $redirect): ResponseBody
    {
        return $this->set('redirect', $redirect);
    }

    /**
     * @param ResponseThreeDSecure $threeDSecure
     * @return ResponseBody
     */
    public function setThreeDSecure(ResponseThreeDSecure $threeDSecure): ResponseBody
    {
        return $this->set('threeDSecure', $threeDSecure);
    }

    /**
     * @param ResponseToken $token
     * @return ResponseBody
     */
    public function setToken(ResponseToken $token): ResponseBody
    {
        return $this->set('token', $token);
    }

    /**
     * @param ResponseTransaction $transaction
     * @return ResponseBody
     */
    public function setTransaction(ResponseTransaction $transaction): ResponseBody
    {
        return $this->set('transaction', $transaction);
    }

    /**
     * @return ResponseBodyObject
     */
    protected function buildObject(): ResponseBodyObject
    {
        return new ResponseBodyObject(
            $this->get('bank'),
            $this->get('card'),
            $this->get('error'),
            $this->get('qr'),
            $this->get('redirect'),
            $this->get('threeDSecure'),
            $this->get('token'),
            $this->get('transaction')
        );
    }
}
