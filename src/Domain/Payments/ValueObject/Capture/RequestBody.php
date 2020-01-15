<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Capture;

class RequestBody
{
    /**
     * @var RequestTransaction
     */
    private $transaction;

    /**
     * RequestBody constructor.
     *
     * @param RequestTransaction $transaction
     */
    public function __construct(
        RequestTransaction $transaction
    ) {
        $this->transaction = $transaction;
    }

    /**
     * @return RequestTransaction
     */
    public function getTransaction()
    {
        return $this->transaction;
    }
}
