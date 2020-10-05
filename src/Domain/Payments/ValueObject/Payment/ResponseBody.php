<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Payment;

use Payvision\SDK\Domain\Payments\ValueObject\Error;

class ResponseBody
{
    /**
     * @var ResponseBank
     */
    private $bank;

    /**
     * @var ResponseCard
     */
    private $card;

    /**
     * @var Error
     */
    private $error;

    /**
     * @var ResponseQr
     */
    private $qr;

    /**
     * @var ResponseRedirect
     */
    private $redirect;

    /**
     * @var ResponseThreeDSecure
     */
    private $threeDSecure;

    /**
     * @var ResponseToken
     */
    private $token;

    /**
     * @var ResponseTransaction
     */
    private $transaction;

    /**
     * ResponseBody constructor.
     *
     * @param ResponseBank $bank
     * @param ResponseCard $card
     * @param Error $error
     * @param ResponseQr $qr
     * @param ResponseRedirect $redirect
     * @param ResponseThreeDSecure $threeDSecure
     * @param ResponseToken $token
     * @param ResponseTransaction $transaction
     */
    public function __construct(
        ResponseBank $bank = null,
        ResponseCard $card = null,
        Error $error = null,
        ResponseQr $qr = null,
        ResponseRedirect $redirect = null,
        ResponseThreeDSecure $threeDSecure = null,
        ResponseToken $token = null,
        ResponseTransaction $transaction = null
    ) {
        $this->bank = $bank;
        $this->card = $card;
        $this->error = $error;
        $this->qr = $qr;
        $this->redirect = $redirect;
        $this->threeDSecure = $threeDSecure;
        $this->token = $token;
        $this->transaction = $transaction;
    }

    /**
     * @return ResponseBank|null
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * @return ResponseCard|null
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * @return Error|null
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @return ResponseQr|null
     */
    public function getQr()
    {
        return $this->qr;
    }

    /**
     * @return ResponseRedirect|null
     */
    public function getRedirect()
    {
        return $this->redirect;
    }

    /**
     * @return ResponseThreeDSecure|null
     */
    public function getThreeDSecure()
    {
        return $this->threeDSecure;
    }

    /**
     * @return ResponseToken|null
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @return ResponseTransaction|null
     */
    public function getTransaction()
    {
        return $this->transaction;
    }
}
