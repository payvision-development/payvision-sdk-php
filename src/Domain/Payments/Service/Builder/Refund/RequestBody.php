<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Refund;

use Payvision\SDK\Domain\Payments\ValueObject\Refund\RequestBody as RequestBodyObject;
use Payvision\SDK\Domain\Payments\ValueObject\Refund\RequestTransaction;
use Payvision\SDK\Domain\Payments\ValueObject\Order;
use Payvision\SDK\Domain\Service\Builder\Basic;

class RequestBody extends Basic
{
    /**
     * @return RequestBodyObject
     */
    public function build(): RequestBodyObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param RequestTransaction $transaction
     * @return self
     */
    public function setTransaction(RequestTransaction $transaction): self
    {
        return $this->set('transaction', $transaction);
    }

    /**
     * @param Order $order
     * @return self
     */
    public function setOrder(Order $order): self
    {
        return $this->set('order', $order);
    }

    /**
     * @return RequestBodyObject
     */
    protected function buildObject(): RequestBodyObject
    {
        return new RequestBodyObject(
            $this->get('transaction'),
            $this->get('order')
        );
    }
}
