<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Request;

use Payvision\SDK\Domain\Payments\ValueObject\Request\Header as HeaderObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Header extends Basic
{
    /**
     * @return HeaderObject
     */
    public function build(): HeaderObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param string $businessId
     * @return self
     */
    public function setBusinessId(string $businessId): self
    {
        return $this->set('businessId', $businessId);
    }

    /**
     * @return HeaderObject
     */
    protected function buildObject(): HeaderObject
    {
        return new HeaderObject(
            $this->get('businessId')
        );
    }
}
