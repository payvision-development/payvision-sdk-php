<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Cancel;

use Payvision\SDK\Domain\Payments\ValueObject\Error;

class ResponseBody
{
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
     * @param Error $error
     * @param ResponseTransaction $transaction
     */
    public function __construct(
        Error $error = null,
        ResponseTransaction $transaction = null
    ) {
        $this->error = $error;
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
     * @return ResponseTransaction|null
     */
    public function getTransaction()
    {
        return $this->transaction;
    }
}
