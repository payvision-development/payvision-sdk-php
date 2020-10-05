<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\ValueObject\Link;

class ResponsePaymentBody
{
    /**
     * @var ResponsePaymentBank
     */
    private $bank;

    /**
     * @var ResponsePaymentCard
     */
    private $card;

    /**
     * @var ResponsePaymentError
     */
    private $error;

    /**
     * @var ResponsePaymentTransaction
     */
    private $transaction;

    /**
     * ResponsePaymentBody constructor.
     *
     * @param ResponsePaymentBank $bank
     * @param ResponsePaymentCard $card
     * @param ResponsePaymentError $error
     * @param ResponsePaymentTransaction $transaction
     */
    public function __construct(
        ResponsePaymentBank $bank = null,
        ResponsePaymentCard $card = null,
        ResponsePaymentError $error = null,
        ResponsePaymentTransaction $transaction = null
    ) {
        $this->bank = $bank;
        $this->card = $card;
        $this->error = $error;
        $this->transaction = $transaction;
    }

    /**
     * @return ResponsePaymentBank|null
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * @return ResponsePaymentCard|null
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * @return ResponsePaymentError|null
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @return ResponsePaymentTransaction|null
     */
    public function getTransaction()
    {
        return $this->transaction;
    }
}
