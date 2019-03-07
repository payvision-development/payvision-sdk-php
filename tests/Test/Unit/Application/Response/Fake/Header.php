<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license proprietary
 */

namespace Payvision\SDK\Test\Unit\Application\Response\Fake;

use DateTime;

class Header
{
    /**
     * @var DateTime
     */
    private $requestTimestamp;

    /**
     * @var string
     */
    private $testArgument;

    public function __construct(
        DateTime $requestTimestamp,
        string $testArgument = null
    ) {
        $this->requestTimestamp = $requestTimestamp;
        $this->testArgument = $testArgument;
    }

    /**
     * @return string
     */
    public function getTestArgument(): string
    {
        return $this->testArgument;
    }

    /**
     * @return DateTime
     */
    public function getRequestTimestamp(): DateTime
    {
        return $this->requestTimestamp;
    }
}
