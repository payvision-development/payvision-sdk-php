<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Infrastructure;

use ArrayIterator;
use Countable;
use IteratorAggregate;
use Traversable;

class RequestHeaderCollection implements IteratorAggregate, Countable
{
    public const HEADER_EXECUTION_MODE = 'X-AH-ExecutionMode';
    public const HEADER_PLUGIN_NAME = 'X-AH-PluginName';
    public const HEADER_PLUGIN_DETAILS = 'X-AH-PluginDetails';

    /**
     * @var string[],array<string>
     */
    protected $headers = [];

    /**
     * @param string $header
     * @param string $value
     * @return $this
     */
    public function add(string $header, string $value): self
    {
        $this->headers[$header] = $value;
        return $this;
    }

    /**
     * @return ArrayIterator|Traversable
     */
    public function getIterator()
    {
        return new ArrayIterator($this->headers);
    }

    /**
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return \count($this->headers);
    }
}
