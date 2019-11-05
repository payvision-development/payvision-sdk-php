<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Test\Unit\Application\Reflection\Test;

class ObjectWithTypedArray
{
    /**
     * @var array
     */
    private $foo;

    /**
     * ObjectWithArray constructor.
     *
     * @param int[] $foo
     */
    public function __construct(array $foo)
    {
        $this->foo = $foo;
    }

    /**
     * @return int[]
     */
    public function getFoo(): array
    {
        return $this->foo;
    }
}
