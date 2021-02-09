<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\Service\Builder\Link;

use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\ResponsePaymentBody as ResponsePaymentBodyObject;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\ResponsePaymentBank;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\ResponsePaymentCard;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\ResponsePaymentError;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\ResponsePaymentTransaction;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponsePaymentBody extends Basic
{
    /**
     * @return ResponsePaymentBodyObject
     */
    public function build(): ResponsePaymentBodyObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param ResponsePaymentBank $bank
     * @return ResponsePaymentBody
     */
    public function setBank(ResponsePaymentBank $bank): ResponsePaymentBody
    {
        return $this->set('bank', $bank);
    }

    /**
     * @param ResponsePaymentCard $card
     * @return ResponsePaymentBody
     */
    public function setCard(ResponsePaymentCard $card): ResponsePaymentBody
    {
        return $this->set('card', $card);
    }

    /**
     * @param ResponsePaymentError $error
     * @return ResponsePaymentBody
     */
    public function setError(ResponsePaymentError $error): ResponsePaymentBody
    {
        return $this->set('error', $error);
    }

    /**
     * @param ResponsePaymentTransaction $transaction
     * @return ResponsePaymentBody
     */
    public function setTransaction(ResponsePaymentTransaction $transaction): ResponsePaymentBody
    {
        return $this->set('transaction', $transaction);
    }

    /**
     * @return ResponsePaymentBodyObject
     */
    protected function buildObject(): ResponsePaymentBodyObject
    {
        return new ResponsePaymentBodyObject(
            $this->get('bank'),
            $this->get('card'),
            $this->get('error'),
            $this->get('transaction')
        );
    }
}
