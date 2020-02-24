<?php

declare(strict_types=1);

namespace Payvision\SDK\Infrastructure;

use ArrayIterator;
use Countable;
use IteratorAggregate;
use Traversable;

class RequestHeaderCollection implements IteratorAggregate, Countable
{
    const HEADER_EXECUTION_MODE = 'X-AH-ExecutionMode';

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
