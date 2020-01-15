<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\Service\Builder\Status;

use Payvision\SDK\Domain\Checkouts\ValueObject\Status\ResponseBody as ResponseBodyObject;
use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\ResponseCheckout;
use Payvision\SDK\Domain\Checkouts\ValueObject\Error;
use Payvision\SDK\Domain\Checkouts\ValueObject\Payment\Response;
use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\ResponseTransaction;
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
     * @param ResponseCheckout $checkout
     * @return self
     */
    public function setCheckout(ResponseCheckout $checkout): self
    {
        return $this->set('checkout', $checkout);
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
     * @param Response[] $payments
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
            $this->get('checkout'),
            $this->get('error'),
            $this->get('payments'),
            $this->get('transaction')
        );
    }
}
