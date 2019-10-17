<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license proprietary
 */

namespace Payvision\SDK\Domain\Service\Builder;

use Payvision\SDK\Domain\Service\Builder;
use Payvision\SDK\Exception\BuilderException;

abstract class Basic implements Builder
{
    /**
     * @var array
     */
    private $properties;

    public function __construct()
    {
        $this->reset();
    }

    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint
     * @return object
     */
    final protected function buildAndReset()
    {
        $object = $this->buildObject();
        $this->reset();
        return $object;
    }

    /**
     * @return null
     */
    protected function reset()
    {
        $this->properties = [];
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return $this
     */
    protected function set(string $key, $value): self
    {
        $this->properties[$key] = $value;
        return $this;
    }

    /**
     * @param string $key
     * @return mixed|null
     */
    protected function get(string $key)
    {
        if (\array_key_exists($key, $this->properties)) {
            return $this->properties[$key];
        }

        return null;
    }

    /**
     * @param array $properties
     * @throws BuilderException
     * @return null
     */
    protected function validateRequiredProperties(array $properties)
    {
        foreach ($properties as $property) {
            if ($this->get($property) === null) {
                throw new BuilderException(
                    \sprintf(
                        'Missing property: %1$s',
                        $property
                    ),
                    BuilderException::MISSING_PROPERTY
                );
            }
        }
    }

    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint
     * @return object
     */
    abstract protected function buildObject();
}
