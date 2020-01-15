<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder;

use Payvision\SDK\Domain\Payments\ValueObject\Order as OrderObject;
use Payvision\SDK\Domain\Payments\ValueObject\OrderLine;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Order extends Basic
{
    /**
     * @return OrderObject
     */
    public function build(): OrderObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param OrderLine[] $orderLines
     * @return self
     */
    public function setOrderLines(array $orderLines): self
    {
        return $this->set('orderLines', $orderLines);
    }

    /**
     * @return OrderObject
     */
    protected function buildObject(): OrderObject
    {
        return new OrderObject(
            $this->get('orderLines')
        );
    }
}
