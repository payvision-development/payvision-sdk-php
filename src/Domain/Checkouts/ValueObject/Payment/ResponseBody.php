<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\ValueObject\Payment;

use Payvision\SDK\Domain\Checkouts\ValueObject\Error;

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
     * @param ResponseRedirect $redirect
     * @param ResponseThreeDSecure $threeDSecure
     * @param ResponseToken $token
     * @param ResponseTransaction $transaction
     */
    public function __construct(
        ResponseBank $bank = null,
        ResponseCard $card = null,
        Error $error = null,
        ResponseRedirect $redirect = null,
        ResponseThreeDSecure $threeDSecure = null,
        ResponseToken $token = null,
        ResponseTransaction $transaction = null
    ) {
        $this->bank = $bank;
        $this->card = $card;
        $this->error = $error;
        $this->redirect = $redirect;
        $this->threeDSecure = $threeDSecure;
        $this->token = $token;
        $this->transaction = $transaction;
    }

    /**
     * @return ResponseBank|null
     */
    public function getBank(): ?ResponseBank
    {
        return $this->bank;
    }

    /**
     * @return ResponseCard|null
     */
    public function getCard(): ?ResponseCard
    {
        return $this->card;
    }

    /**
     * @return Error|null
     */
    public function getError(): ?Error
    {
        return $this->error;
    }

    /**
     * @return ResponseRedirect|null
     */
    public function getRedirect(): ?ResponseRedirect
    {
        return $this->redirect;
    }

    /**
     * @return ResponseThreeDSecure|null
     */
    public function getThreeDSecure(): ?ResponseThreeDSecure
    {
        return $this->threeDSecure;
    }

    /**
     * @return ResponseToken|null
     */
    public function getToken(): ?ResponseToken
    {
        return $this->token;
    }

    /**
     * @return ResponseTransaction|null
     */
    public function getTransaction(): ?ResponseTransaction
    {
        return $this->transaction;
    }
}
