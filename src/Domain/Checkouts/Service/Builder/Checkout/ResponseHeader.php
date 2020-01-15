<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\Service\Builder\Checkout;

use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\ResponseHeader as ResponseHeaderObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponseHeader extends Basic
{
    /**
     * @return ResponseHeaderObject
     */
    public function build(): ResponseHeaderObject
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
     * @return ResponseHeaderObject
     */
    protected function buildObject(): ResponseHeaderObject
    {
        return new ResponseHeaderObject(
            $this->get('requestTimestamp')
        );
    }
}
