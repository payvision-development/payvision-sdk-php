<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Refund;

use Payvision\SDK\Domain\Payments\ValueObject\Refund\ResponseBody as ResponseBodyObject;
use Payvision\SDK\Domain\Payments\ValueObject\Refund\ResponseCard;
use Payvision\SDK\Domain\Payments\ValueObject\Error;
use Payvision\SDK\Domain\Payments\ValueObject\Refund\ResponseTransaction;
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
     * @param ResponseCard $card
     * @return self
     */
    public function setCard(ResponseCard $card): self
    {
        return $this->set('card', $card);
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
            $this->get('card'),
            $this->get('error'),
            $this->get('transaction')
        );
    }
}
