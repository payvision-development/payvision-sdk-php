<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Status;

class ResponseHeader
{
    /**
     * @var \Payvision\SDK\DataType\DateTime
     */
    private $requestTimestamp;

    /**
     * @var string
     */
    private $requestCode;

    /**
     * ResponseHeader constructor.
     *
     * @param \Payvision\SDK\DataType\DateTime $requestTimestamp
     * @param string $requestCode
     */
    public function __construct(
        \Payvision\SDK\DataType\DateTime $requestTimestamp,
        string $requestCode = null
    ) {
        $this->requestTimestamp = $requestTimestamp;
        $this->requestCode = $requestCode;
    }

    /**
     * @return \Payvision\SDK\DataType\DateTime
     */
    public function getRequestTimestamp()
    {
        return $this->requestTimestamp;
    }

    /**
     * @return string|null
     */
    public function getRequestCode()
    {
        return $this->requestCode;
    }
}
