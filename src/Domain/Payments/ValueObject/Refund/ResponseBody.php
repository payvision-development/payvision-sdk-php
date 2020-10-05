<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Refund;

use Payvision\SDK\Domain\Payments\ValueObject\Error;

class ResponseBody
{
    /**
     * @var ResponseCard
     */
    private $card;

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
     * @param ResponseCard $card
     * @param Error $error
     * @param ResponseTransaction $transaction
     */
    public function __construct(
        ResponseCard $card = null,
        Error $error = null,
        ResponseTransaction $transaction = null
    ) {
        $this->card = $card;
        $this->error = $error;
        $this->transaction = $transaction;
    }

    /**
     * @return ResponseCard|null
     */
    public function getCard()
    {
        return $this->card;
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
