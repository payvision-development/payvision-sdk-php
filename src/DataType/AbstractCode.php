<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\DataType;

use ReflectionClass;

abstract class AbstractCode
{
    /**
     * @var array|null
     */
    private $constants;

    protected function getConstants(): array
    {
        if ($this->constants !== null) {
            return $this->constants;
        }

        $this->constants = [];
        $reflection = new ReflectionClass(\get_class($this));

        foreach ($reflection->getConstants() as $constantName => $constantValue) {
            $this->constants[$constantValue] = $constantName;
        }

        return $this->constants;
    }
}
