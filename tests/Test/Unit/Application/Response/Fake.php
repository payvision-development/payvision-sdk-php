<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Test\Unit\Application\Response;

use Payvision\SDK\Test\Unit\Application\Response\Fake\Header;

/**
 * This is a fake response to test the request/response handling of the API Connection
 *
 * @see \Payvision\SDK\Test\Unit\Infrastructure\ApiConnectionTest
 */
class Fake
{
    /**
     * @var int
     */
    private $result;

    /**
     * @var string
     */
    private $description;

    /**
     * @var Header
     */
    private $header;

    public function __construct(
        int $result,
        string $description,
        Header $header
    ) {
        $this->result = $result;
        $this->description = $description;
        $this->header = $header;
    }

    /**
     * @return int
     */
    public function getResult(): int
    {
        return $this->result;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return Header
     */
    public function getHeader(): Header
    {
        return $this->header;
    }
}
