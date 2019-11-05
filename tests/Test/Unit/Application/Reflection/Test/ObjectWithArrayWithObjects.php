<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Test\Unit\Application\Reflection\Test;

class ObjectWithArrayWithObjects
{
    /**
     * @var Foo[]
     */
    private $foos;

    /**
     * ObjectWithArrayWithObjects constructor.
     *
     * @param Foo[] $foos
     */
    public function __construct(array $foos)
    {
        $this->foos = $foos;
    }

    /**
     * @return Foo[]
     */
    public function getFoos(): array
    {
        return $this->foos;
    }
}
