<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\ValueObject\Link;

class ResponsePaymentHeader
{
    /**
     * @var \Payvision\SDK\DataType\DateTime
     */
    private $requestTimestamp;

    /**
     * ResponsePaymentHeader constructor.
     *
     * @param \Payvision\SDK\DataType\DateTime $requestTimestamp
     */
    public function __construct(
        \Payvision\SDK\DataType\DateTime $requestTimestamp
    ) {
        $this->requestTimestamp = $requestTimestamp;
    }

    /**
     * @return \Payvision\SDK\DataType\DateTime
     */
    public function getRequestTimestamp()
    {
        return $this->requestTimestamp;
    }
}
