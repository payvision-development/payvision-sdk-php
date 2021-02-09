<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject;

class Order
{
    /**
     * @var OrderLine[]
     */
    private $orderLines;

    /**
     * Order constructor.
     *
     * @param OrderLine[] $orderLines
     */
    public function __construct(
        array $orderLines
    ) {
        $this->orderLines = $orderLines;
    }

    /**
     * @return OrderLine[]
     */
    public function getOrderLines(): array
    {
        return $this->orderLines;
    }
}
