<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Response;

class Body
{
    /**
     * @var Bank
     */
    private $bank;

    /**
     * @var Card
     */
    private $card;

    /**
     * @var Qr
     */
    private $qr;

    /**
     * @var Redirect
     */
    private $redirect;

    /**
     * @var ThreeDSecure
     */
    private $threeDSecure;

    /**
     * @var Token
     */
    private $token;

    /**
     * @var Transaction
     */
    private $transaction;

    /**
     * Body constructor.
     *
     * @param Bank $bank
     * @param Card $card
     * @param Qr $qr
     * @param Redirect $redirect
     * @param ThreeDSecure $threeDSecure
     * @param Token $token
     * @param Transaction $transaction
     */
    public function __construct(
        Bank $bank = null,
        Card $card = null,
        Qr $qr = null,
        Redirect $redirect = null,
        ThreeDSecure $threeDSecure = null,
        Token $token = null,
        Transaction $transaction = null
    ) {
        $this->bank = $bank;
        $this->card = $card;
        $this->qr = $qr;
        $this->redirect = $redirect;
        $this->threeDSecure = $threeDSecure;
        $this->token = $token;
        $this->transaction = $transaction;
    }

    /**
    * @return Bank|null
    */
    public function getBank()
    {
        return $this->bank;
    }

    /**
    * @return Card|null
    */
    public function getCard()
    {
        return $this->card;
    }

    /**
    * @return Qr|null
    */
    public function getQr()
    {
        return $this->qr;
    }

    /**
    * @return Redirect|null
    */
    public function getRedirect()
    {
        return $this->redirect;
    }

    /**
    * @return ThreeDSecure|null
    */
    public function getThreeDSecure()
    {
        return $this->threeDSecure;
    }

    /**
    * @return Token|null
    */
    public function getToken()
    {
        return $this->token;
    }

    /**
    * @return Transaction|null
    */
    public function getTransaction()
    {
        return $this->transaction;
    }
}
