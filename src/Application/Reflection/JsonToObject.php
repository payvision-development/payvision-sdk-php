<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 */

namespace Payvision\SDK\Application\Reflection;

use DateTime;
use Payvision\SDK\Exception\BuilderException;
use ReflectionClass;
use ReflectionException;
use ReflectionParameter;

class JsonToObject
{
    /**
     * @var array
     */
    private static $parameterMapping;

    /**
     * @param string $targetObject
     * @param array $jsonData
     * @param array $parameterMapping
     * @return mixed
     * @throws BuilderException
     * @throws ReflectionException
     */
    public static function build(
        string $targetObject,
        array $jsonData,
        array $parameterMapping = []
    ) {
        self::$parameterMapping = $parameterMapping;
        $reflection = new ReflectionClass($targetObject);

        $constructorData = \array_merge(
            self::reflectArray($reflection, $jsonData)
        );

        return self::createObject($targetObject, $constructorData);
    }

    private static function reflectArray(ReflectionClass $reflection, array $data): array
    {
        $result = [];

        foreach ($reflection->getConstructor()->getParameters() as $parameter) {
            if (\array_key_exists($parameter->getName(), $data)) {
                $value = $data[$parameter->getName()];
                $result[$parameter->getName()] = $value;
            }
        }

        return $result;
    }

    /**
     * @param string $type
     * @param array $arguments
     * @return mixed
     * @throws BuilderException
     * @throws ReflectionException
     */
    private static function createObject(string $type, array $arguments)
    {
        $constructorArguments = [];
        $reflection = new ReflectionClass($type);
        $requiredArguments = [];

        foreach ($reflection->getConstructor()->getParameters() as $parameter) {
            if (!$parameter->isOptional()) {
                $requiredArguments[] = $parameter->getName();
            }

            $constructorArguments[] = self::getValueForParameter($parameter, $arguments);
        }

        return new $type(...$constructorArguments);
    }

    private static function getType(ReflectionParameter $parameter): string
    {
        foreach (self::$parameterMapping as $parameterName => $callback) {
            if ($parameterName === $parameter->getName()) {
                if (\is_callable($callback)) {
                    return $callback($parameter);
                }
            }
        }

        return (string)$parameter->getType();
    }

    /**
     * @param ReflectionParameter $parameter
     * @param array $arguments
     * @return mixed|null
     * @throws BuilderException
     * @throws ReflectionException
     */
    private static function getValueForParameter(ReflectionParameter $parameter, array $arguments)
    {
        if (\array_key_exists($parameter->getName(), $arguments)) {
            $value = $arguments[$parameter->getName()];
            if ($value === []) {
                $value = null;
            }
            $parameterType = self::getType($parameter);
            if (\is_array($value)) {
                $value = self::createObject($parameterType, $value);
            }
            $value = self::handleSpecialCases($parameterType, $value);
        } else {
            if (!$parameter->isOptional()) {
                throw new BuilderException(
                    \sprintf(
                        'Required property "%1$s" is missing from response',
                        $parameter->getName()
                    ),
                    BuilderException::MISSING_RESPONSE_PROPERTY
                );
            }
            $value = $parameter->getDefaultValue();
        }

        return $value;
    }

    /**
     * @param string $parameterType
     * @param mixed $value
     * @return mixed
     */
    private static function handleSpecialCases(string $parameterType, $value)
    {
        switch ($parameterType) {
            case 'DateTime':
                return new DateTime($value);
        }
        return $value;
    }
}
