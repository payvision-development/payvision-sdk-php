<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\Service\Builder\Payment;

use Payvision\SDK\Domain\Checkouts\ValueObject\Payment\ResponseBody as ResponseBodyObject;
use Payvision\SDK\Domain\Checkouts\ValueObject\Payment\ResponseBank;
use Payvision\SDK\Domain\Checkouts\ValueObject\Payment\ResponseCard;
use Payvision\SDK\Domain\Checkouts\ValueObject\Error;
use Payvision\SDK\Domain\Checkouts\ValueObject\Payment\ResponseRedirect;
use Payvision\SDK\Domain\Checkouts\ValueObject\Payment\ResponseThreeDSecure;
use Payvision\SDK\Domain\Checkouts\ValueObject\Payment\ResponseToken;
use Payvision\SDK\Domain\Checkouts\ValueObject\Payment\ResponseTransaction;
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
     * @return self
     */
    public function setBank(ResponseBank $bank): self
    {
        return $this->set('bank', $bank);
    }

    /**
     * @param ResponseCard $card
     * @return self
     */
    public function setCard(ResponseCard $card): self
    {
        return $this->set('card', $card);
    }

    /**
     * @param Error $error
     * @return self
     */
    public function setError(Error $error): self
    {
        return $this->set('error', $error);
    }

    /**
     * @param ResponseRedirect $redirect
     * @return self
     */
    public function setRedirect(ResponseRedirect $redirect): self
    {
        return $this->set('redirect', $redirect);
    }

    /**
     * @param ResponseThreeDSecure $threeDSecure
     * @return self
     */
    public function setThreeDSecure(ResponseThreeDSecure $threeDSecure): self
    {
        return $this->set('threeDSecure', $threeDSecure);
    }

    /**
     * @param ResponseToken $token
     * @return self
     */
    public function setToken(ResponseToken $token): self
    {
        return $this->set('token', $token);
    }

    /**
     * @param ResponseTransaction $transaction
     * @return self
     */
    public function setTransaction(ResponseTransaction $transaction): self
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
            $this->get('redirect'),
            $this->get('threeDSecure'),
            $this->get('token'),
            $this->get('transaction')
        );
    }
}
