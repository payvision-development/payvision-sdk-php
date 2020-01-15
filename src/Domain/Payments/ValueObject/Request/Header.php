<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Request;

class Header
{
    /**
     * @var string
     */
    private $businessId;

    /**
     * Header constructor.
     *
     * @param string $businessId
     */
    public function __construct(
        string $businessId
    ) {
        $this->businessId = $businessId;
    }

    /**
     * @return string
     */
    public function getBusinessId()
    {
        return $this->businessId;
    }
}
