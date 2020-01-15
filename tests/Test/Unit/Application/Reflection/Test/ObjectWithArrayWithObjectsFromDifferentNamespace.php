<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Test\Unit\Application\Reflection\Test;

use Payvision\SDK\Test\Unit\Application\Reflection\Test\Foo\Bar;

class ObjectWithArrayWithObjectsFromDifferentNamespace
{
    /**
     * @var Bar[]
     */
    private $bars;

    /**
     * ObjectWithArrayWithObjects constructor.
     *
     * @param Bar[] $bars
     */
    public function __construct(array $bars)
    {
        $this->bars = $bars;
    }

    /**
     * @return Bar[]
     */
    public function getBars(): array
    {
        return $this->bars;
    }
}
