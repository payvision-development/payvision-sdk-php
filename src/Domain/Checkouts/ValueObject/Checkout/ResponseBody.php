<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\ValueObject\Checkout;

use Payvision\SDK\Domain\Checkouts\ValueObject\Error;

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
     * @var ResponseTransaction
     */
    private $transaction;

    /**
     * ResponseBody constructor.
     *
     * @param ResponseCheckout $checkout
     * @param Error $error
     * @param ResponseTransaction $transaction
     */
    public function __construct(
        ResponseCheckout $checkout = null,
        Error $error = null,
        ResponseTransaction $transaction = null
    ) {
        $this->checkout = $checkout;
        $this->error = $error;
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
     * @return ResponseTransaction|null
     */
    public function getTransaction()
    {
        return $this->transaction;
    }
}
