<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Application\Reflection;

use DateTime as BaseDateTime;
use Exception;
use Payvision\SDK\DataType\Date;
use Payvision\SDK\DataType\DateTime;
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
     * @param array $parameterMapping Can be used to provide a callback for a parameter ["type" => callable]
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
        $reflectedClass = new ReflectionClass($type);
        $requiredArguments = [];

        foreach ($reflectedClass->getConstructor()->getParameters() as $parameter) {
            if (!$parameter->isOptional()) {
                $requiredArguments[] = $parameter->getName();
            }

            $constructorArguments[] = self::getValueForParameter($parameter, $arguments, $type);
        }

        return new $type(...$constructorArguments);
    }

    /**
     * @param ReflectionParameter $parameter
     * @return string
     * @throws BuilderException
     */
    private static function getType(ReflectionParameter $parameter): string
    {
        foreach (self::$parameterMapping as $parameterName => $callback) {
            if ($parameterName === $parameter->getName()) {
                if (\is_callable($callback)) {
                    return $callback($parameter);
                }
            }
        }

        // If it's an array, check if it's typed in the docblock:
        $type = \method_exists($parameter->getType(), 'getName') ?
            $parameter->getType()->getName() :
            (string)$parameter->getType();

        if ($type === 'array') {
            return self::resolveTypeFromArray($parameter);
        }

        return $type;
    }

    /**
     * @param ReflectionParameter $parameter
     * @param array $arguments
     * @param string $type
     * @return mixed|null
     * @throws BuilderException
     * @throws ReflectionException
     */
    private static function getValueForParameter(ReflectionParameter $parameter, array $arguments, string $type)
    {
        if (\array_key_exists($parameter->getName(), $arguments)) {
            $value = $arguments[$parameter->getName()];
            if ($value === []) {
                $value = null;
            }
            $parameterType = self::getType($parameter);
            $value = self::resolveValue($value, $parameterType);
        } else {
            if (!$parameter->isOptional()) {
                throw new BuilderException(
                    \sprintf(
                        'Required property "%1$s" is missing from arguments for class "%2$s"',
                        $parameter->getName(),
                        $type
                    ),
                    BuilderException::MISSING_RESPONSE_PROPERTY
                );
            }
            $value = $parameter->getDefaultValue();
        }

        return $value;
    }

    private static function isAssociatedArray(array $arr): bool
    {
        if ($arr === []) {
            return false;
        }
        return \array_keys($arr) !== \range(0, \count($arr) - 1);
    }

    /**
     * @param string $parameterType
     * @param mixed $value
     * @return mixed
     * @throws Exception
     */
    private static function handleDataTypes(string $parameterType, $value)
    {
        switch ($parameterType) {
            case 'DateTime':
                return new BaseDateTime($value);
            case 'Payvision\SDK\DataType\DateTime':
                return new DateTime($value);
                break;
            case 'Payvision\SDK\DataType\Date':
                return new Date($value);
        }

        return $value;
    }

    /**
     * @param mixed $value
     * @param string $parameterType
     * @return array|mixed
     * @throws BuilderException
     * @throws ReflectionException
     */
    private static function resolveValue($value, string $parameterType)
    {
        if (\is_array($value) && $parameterType !== 'array') {
            // If $value is an associated array, create a new object with the value as arguments:
            // If $value is an indexed array, $value should be an array with objects of $parameterType
            if (self::isAssociatedArray($value)) {
                $value = self::createObject($parameterType, $value);
            } else {
                $newValue = [];
                foreach ($value as $singleValue) {
                    $newValue[] = self::createObject($parameterType, $singleValue);
                }
                $value = $newValue;
            }
        }
        $value = self::handleDataTypes($parameterType, $value);
        return $value;
    }

    /**
     * @param ReflectionParameter $parameter
     * @return mixed|string
     * @throws BuilderException
     */
    private static function resolveTypeFromArray(ReflectionParameter $parameter)
    {
        $docComment = $parameter->getDeclaringFunction()->getDocComment();

        if (!$docComment) {
            throw new BuilderException(
                \sprintf('parameters defined as array must have a docblock: %1$s', $parameter->getName()),
                BuilderException::ARRAY_NOT_DEFINED_IN_DOCBLOCK
            );
        }

        if (\preg_match('/\* @param (.*) \$' . $parameter->getName() . '/', $docComment, $match) !== 1) {
            throw new BuilderException(
                \sprintf('incorrect or missing @param in docblock for: %1$s', $parameter->getName()),
                BuilderException::MISSING_PARAM_IN_DOCBLOCK
            );
        }

        if (\preg_match('/\[\]$/', $match[1])) {
            $baseClassName = \str_replace('[]', '', $match[1]);
            if (!\in_array($baseClassName, ['int', 'string', 'bool', 'float'])) {
                return self::resolveClassName($baseClassName, $parameter->getDeclaringClass());
            }
        }

        return 'array';
    }

    /**
     * @param string $baseClassName
     * @param ReflectionClass $declaringClass
     * @return string
     * @throws BuilderException
     */
    private static function resolveClassName(string $baseClassName, ReflectionClass $declaringClass): string
    {
        // Check if the class exists in the use statements of the reflected class:
        $fileContent = \file_get_contents($declaringClass->getFileName());
        if (\preg_match('/^use (.*\\\\' . $baseClassName . ');$/m', $fileContent, $match) === 1) {
            return $match[1];
        }

        // Check if the class exists in the namespace of the reflected class:
        $className = $declaringClass->getNamespaceName() . '\\' . $baseClassName;
        if (\class_exists($className)) {
            return $className;
        }

        // Check if it exists in general:
        $className = $baseClassName;
        if (\class_exists($className)) {
            return $className;
        }

        throw new BuilderException(
            \sprintf('class does not exist: %1$s', $className),
            BuilderException::CLASS_DOES_NOT_EXIST
        );
    }
}
