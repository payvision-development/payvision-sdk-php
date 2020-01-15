<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\ValueObject\Status;

use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\ResponseCheckout;
use Payvision\SDK\Domain\Checkouts\ValueObject\Error;
use Payvision\SDK\Domain\Checkouts\ValueObject\Payment\Response;
use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\ResponseTransaction;

class ResponseBody
{
    /**
     * @var ResponseCheckout
     */
    private $checkout;

    /**
     * @var Error
     */
    private $error;

    /**
     * @var Response[]
     */
    private $payments;

    /**
     * @var ResponseTransaction
     */
    private $transaction;

    /**
     * ResponseBody constructor.
     *
     * @param ResponseCheckout $checkout
     * @param Error $error
     * @param Response[] $payments
     * @param ResponseTransaction $transaction
     */
    public function __construct(
        ResponseCheckout $checkout = null,
        Error $error = null,
        array $payments = null,
        ResponseTransaction $transaction = null
    ) {
        $this->checkout = $checkout;
        $this->error = $error;
        $this->payments = $payments;
        $this->transaction = $transaction;
    }

    /**
     * @return ResponseCheckout|null
     */
    public function getCheckout()
    {
        return $this->checkout;
    }

    /**
     * @return Error|null
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @return Response[]|null
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * @return ResponseTransaction|null
     */
    public function getTransaction()
    {
        return $this->transaction;
    }
}
