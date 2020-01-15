<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\Service\Builder\Link;

use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\ResponseBody as ResponseBodyObject;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\Error;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\ResponseLink;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\ResponsePayment;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\ResponseTransaction;
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
     * @param Error $error
     * @return self
     */
    public function setError(Error $error): self
    {
        return $this->set('error', $error);
    }

    /**
     * @param ResponseLink $link
     * @return self
     */
    public function setLink(ResponseLink $link): self
    {
        return $this->set('link', $link);
    }

    /**
     * @param ResponsePayment[] $payments
     * @return self
     */
    public function setPayments(array $payments): self
    {
        return $this->set('payments', $payments);
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
            $this->get('error'),
            $this->get('link'),
            $this->get('payments'),
            $this->get('transaction')
        );
    }
}
