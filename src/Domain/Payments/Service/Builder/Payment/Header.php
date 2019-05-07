<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Payment;

use Payvision\SDK\Domain\Payments\ValueObject\Payment\Header as HeaderObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Header extends Basic
{
    public function build(): HeaderObject
    {
        return $this->buildAndReset();
    }

    public function setBusinessId(string $businessId): self
    {
        return $this->set('businessId', $businessId);
    }

    protected function buildObject(): HeaderObject
    {
        return new HeaderObject(
            $this->get('businessId')
        );
    }
}
