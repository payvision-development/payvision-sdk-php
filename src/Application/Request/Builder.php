<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Application\Request;

use DateTime;
use Payvision\SDK\DataType\DataType;
use ReflectionClass;
use ReflectionException;
use ReflectionMethod;

class Builder
{
    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingParameterTypeHint
     * @param object $object
     * @return array
     * @throws ReflectionException
     */
    public static function toArray($object): array
    {
        return self::reflectObject($object);
    }

    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingParameterTypeHint
     * @param object $object
     * @return array
     * @throws ReflectionException
     */
    private static function reflectObject($object): array
    {
        $result = [];
        $reflection = new ReflectionClass($object);

        // Get the class name. We need to add this to allow our mocked objects
        // from PHPUnit pass the test:
        $className = \strpos($reflection->getName(), 'Mock_') === 0 ?
            $reflection->getParentClass()->getName() :
            $reflection->getName();

        if (\strpos($className, 'Payvision') !== 0) {
            return $result;
        }

        foreach ($reflection->getMethods(ReflectionMethod::IS_PUBLIC) as $method) {
            if (\substr($method->getName(), 0, 3) === 'get') {
                $key = \lcfirst(\substr($method->getName(), 3));
                $value = self::getValueForMethod($method->getName(), $object);
                if ($value !== null) {
                    $result[$key] = $value;
                }
            }
        }

        return $result;
    }

    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingParameterTypeHint
     * @param string $methodName
     * @param object $object
     * @return mixed|null
     * @throws ReflectionException
     */
    private static function getValueForMethod(string $methodName, $object)
    {
        return self::resolveValue($object->{$methodName}());
    }

    /**
     * @param mixed $value
     * @return mixed|null
     * @throws ReflectionException
     */
    private static function resolveValue($value)
    {
        if ($value instanceof DataType) {
            return $value->get();
        }

        if ($value instanceof DateTime) {
            return $value->format('Y-m-d\TH:i:s\Z');
        }

        if (\is_object($value)) {
            $value = self::reflectObject($value);
        }

        if (\is_array($value)) {
            $newValue = [];
            foreach ($value as $index => $originalValue) {
                $newValue[$index] = self::resolveValue($originalValue);
            }
            $value = $newValue;
        }

        if ($value !== '' && $value !== null && $value !== []) {
            return $value;
        }
        return null;
    }
}
