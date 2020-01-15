<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\Service\Builder\Link;

use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\ResponsePaymentHeader as ResponsePaymentHeaderObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponsePaymentHeader extends Basic
{
    /**
     * @return ResponsePaymentHeaderObject
     */
    public function build(): ResponsePaymentHeaderObject
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
     * @return ResponsePaymentHeaderObject
     */
    protected function buildObject(): ResponsePaymentHeaderObject
    {
        return new ResponsePaymentHeaderObject(
            $this->get('requestTimestamp')
        );
    }
}
