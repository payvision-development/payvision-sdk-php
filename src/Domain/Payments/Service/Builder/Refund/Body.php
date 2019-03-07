<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Refund;

use Payvision\SDK\Domain\Payments\ValueObject\Refund\Body as BodyObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Body extends Basic
{
    public function build(): BodyObject
    {
        return $this->buildAndReset();
    }

    public function setTransaction(Transaction $transaction): self
    {
        return $this->set('transaction', $transaction);
    }

    protected function buildObject(): BodyObject
    {
        return new BodyObject(
            $this->get('transaction')
        );
    }
}
