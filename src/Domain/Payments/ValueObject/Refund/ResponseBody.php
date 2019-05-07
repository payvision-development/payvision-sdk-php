<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Refund;

use Payvision\SDK\Domain\Payments\ValueObject\BasicResponseCard;

class ResponseBody
{
    /**
     * @var BasicResponseCard
     */
    private $card;

    /**
     * @var ResponseTransaction
     */
    private $transaction;

    /**
     * ResponseBody constructor.
     *
     * @param BasicResponseCard $card
     * @param ResponseTransaction $transaction
     */
    public function __construct(
        BasicResponseCard $card = null,
        ResponseTransaction $transaction = null
    ) {
        $this->card = $card;
        $this->transaction = $transaction;
    }

    /**
    * @return BasicResponseCard|null
    */
    public function getCard()
    {
        return $this->card;
    }

    /**
    * @return ResponseTransaction|null
    */
    public function getTransaction()
    {
        return $this->transaction;
    }
}
