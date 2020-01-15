<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\Service\Builder\Checkout;

use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\RequestOrder as RequestOrderObject;
use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\RequestOrderLine;
use Payvision\SDK\Domain\Service\Builder\Basic;

class RequestOrder extends Basic
{
    /**
     * @return RequestOrderObject
     */
    public function build(): RequestOrderObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param RequestOrderLine[] $orderlines
     * @return self
     */
    public function setOrderlines(array $orderlines): self
    {
        return $this->set('orderlines', $orderlines);
    }

    /**
     * @return RequestOrderObject
     */
    protected function buildObject(): RequestOrderObject
    {
        return new RequestOrderObject(
            $this->get('orderlines')
        );
    }
}
