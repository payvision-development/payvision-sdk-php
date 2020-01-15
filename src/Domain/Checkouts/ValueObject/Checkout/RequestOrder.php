<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\ValueObject\Checkout;

class RequestOrder
{
    /**
     * @var RequestOrderLine[]
     */
    private $orderlines;

    /**
     * RequestOrder constructor.
     *
     * @param RequestOrderLine[] $orderlines
     */
    public function __construct(
        array $orderlines = null
    ) {
        $this->orderlines = $orderlines;
    }

    /**
     * @return RequestOrderLine[]|null
     */
    public function getOrderlines()
    {
        return $this->orderlines;
    }
}
