<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\Service\Builder;

use Payvision\SDK\Domain\Checkouts\ValueObject\BasicResponseHeader as BasicResponseHeaderObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class BasicResponseHeader extends Basic
{
    /**
     * @return BasicResponseHeaderObject
     */
    public function build(): BasicResponseHeaderObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param \Payvision\SDK\DataType\DateTime $requestTimestamp
     * @return self
     */
    public function setRequestTimestamp(\Payvision\SDK\DataType\DateTime $requestTimestamp): self
    {
        return $this->set('requestTimestamp', $requestTimestamp);
    }

    /**
     * @return BasicResponseHeaderObject
     */
    protected function buildObject(): BasicResponseHeaderObject
    {
        return new BasicResponseHeaderObject(
            $this->get('requestTimestamp')
        );
    }
}
