<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Refund;

class Body
{
    /**
     * @var Transaction
     */
    private $transaction;

    /**
     * Body constructor.
     *
     * @param Transaction $transaction
     */
    public function __construct(
        Transaction $transaction
    ) {
        $this->transaction = $transaction;
    }

    /**
    * @return Transaction
    */
    public function getTransaction()
    {
        return $this->transaction;
    }
}
