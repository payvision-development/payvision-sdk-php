<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Test\Unit\Application\Reflection\Test;

class ObjectWithArray
{
    /**
     * @var array
     */
    private $foo;

    /**
     * ObjectWithArray constructor.
     *
     * @param array $foo
     */
    public function __construct(array $foo)
    {
        $this->foo = $foo;
    }

    /**
     * @return array
     */
    public function getFoo(): array
    {
        return $this->foo;
    }
}
