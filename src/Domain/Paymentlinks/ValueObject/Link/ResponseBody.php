<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\ValueObject\Link;

use Payvision\SDK\Domain\Paymentlinks\ValueObject\Error;

class ResponseBody
{
    /**
     * @var Error
     */
    private $error;

    /**
     * @var ResponseLink
     */
    private $link;

    /**
     * @var ResponsePayment[]
     */
    private $payments;

    /**
     * @var ResponseTransaction
     */
    private $transaction;

    /**
     * ResponseBody constructor.
     *
     * @param Error $error
     * @param ResponseLink $link
     * @param ResponsePayment[] $payments
     * @param ResponseTransaction $transaction
     */
    public function __construct(
        Error $error = null,
        ResponseLink $link = null,
        array $payments = null,
        ResponseTransaction $transaction = null
    ) {
        $this->error = $error;
        $this->link = $link;
        $this->payments = $payments;
        $this->transaction = $transaction;
    }

    /**
     * @return Error|null
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @return ResponseLink|null
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @return ResponsePayment[]|null
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
