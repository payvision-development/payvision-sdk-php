<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Response;

use Payvision\SDK\Domain\Payments\ValueObject\Response\Body as BodyObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Body extends Basic
{
    public function build(): BodyObject
    {
        return $this->buildAndReset();
    }

    public function setBank(Bank $bank): self
    {
        return $this->set('bank', $bank);
    }

    public function setCard(Card $card): self
    {
        return $this->set('card', $card);
    }

    public function setQr(Qr $qr): self
    {
        return $this->set('qr', $qr);
    }

    public function setRedirect(Redirect $redirect): self
    {
        return $this->set('redirect', $redirect);
    }

    public function setThreeDSecure(ThreeDSecure $threeDSecure): self
    {
        return $this->set('threeDSecure', $threeDSecure);
    }

    public function setToken(Token $token): self
    {
        return $this->set('token', $token);
    }

    public function setTransaction(Transaction $transaction): self
    {
        return $this->set('transaction', $transaction);
    }

    protected function buildObject(): BodyObject
    {
        return new BodyObject(
            $this->get('bank'),
            $this->get('card'),
            $this->get('qr'),
            $this->get('redirect'),
            $this->get('threeDSecure'),
            $this->get('token'),
            $this->get('transaction')
        );
    }
}
