<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Test\Unit\Application\Reflection\Test;

use Payvision\SDK\Test\Unit\Application\Reflection\Test\Bar\Bazz;
use Payvision\SDK\Test\Unit\Application\Reflection\Test\Foo\Bar;

class ObjectWithArrayWithObjectsFromDifferentNamespaces
{
    /**
     * @var Bar[]
     */
    private $bars;

    /**
     * @var Foo
     */
    private $foo;

    /**
     * @var Bazz
     */
    private $bazz;

    /**
     * ObjectWithArrayWithObjectsFromDifferentNamespaces constructor.
     *
     * @param Foo $foo
     * @param Bazz $bazz
     * @param Bar[] $bars
     */
    public function __construct(
        Foo $foo,
        Bazz $bazz,
        array $bars
    ) {
        $this->bars = $bars;
        $this->foo = $foo;
        $this->bazz = $bazz;
    }

    /**
     * @return Foo
     */
    public function getFoo(): Foo
    {
        return $this->foo;
    }

    /**
     * @return Bazz
     */
    public function getBazz(): Bazz
    {
        return $this->bazz;
    }

    /**
     * @return Bar[]
     */
    public function getBars(): array
    {
        return $this->bars;
    }
}
