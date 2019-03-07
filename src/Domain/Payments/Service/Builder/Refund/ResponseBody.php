<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Refund;

use Payvision\SDK\Domain\Payments\ValueObject\Refund\ResponseBody as ResponseBodyObject;
use Payvision\SDK\Domain\Payments\ValueObject\BasicResponseCard;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponseBody extends Basic
{
    public function build(): ResponseBodyObject
    {
        return $this->buildAndReset();
    }

    public function setCard(BasicResponseCard $card): self
    {
        return $this->set('card', $card);
    }

    public function setTransaction(ResponseTransaction $transaction): self
    {
        return $this->set('transaction', $transaction);
    }

    protected function buildObject(): ResponseBodyObject
    {
        return new ResponseBodyObject(
            $this->get('card'),
            $this->get('transaction')
        );
    }
}
