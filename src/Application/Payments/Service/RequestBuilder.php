<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Application\Payments\Service;

use Payvision\SDK\Application\ApiRequest as RequestObject;
use Payvision\SDK\Application\Request\Builder;
use Payvision\SDK\Domain\Payments\ValueObject\Refund\ResponseRequest as RefundResponseRequest;
use Payvision\SDK\Domain\Payments\ValueObject\Request\Object;
use Payvision\SDK\Domain\Payments\ValueObject\Request\Refund;
use Payvision\SDK\Domain\Payments\ValueObject\Response\Error as ResponseError;
use Payvision\SDK\Domain\Payments\ValueObject\Response\Request as ResponseRequest;
use ReflectionException;

class RequestBuilder
{
    /**
     * @param Object $input
     * @return RequestObject
     * @throws ReflectionException
     */
    public static function newPayment(
        Object $input
    ): RequestObject {
        $jsonBody = Builder::toArray($input);
        return new RequestObject(
            'payments',
            'POST',
            self::getParameters($jsonBody),
            $jsonBody['header'] ?? [],
            $jsonBody['body'] ?? [],
            [],
            [
                200 => ResponseRequest::class,
                400 => ResponseError::class,
                401 => ResponseError::class,
                404 => ResponseError::class,
                500 => ResponseError::class,
                501 => ResponseError::class,
            ]
        );
    }

    /**
     * @param Refund $input
     * @param string $id
     * @return RequestObject
     * @throws ReflectionException
     */
    public static function refundTransaction(
        Refund $input,
        string $id
    ): RequestObject {
        $jsonBody = Builder::toArray($input);
        return new RequestObject(
            \str_replace('{id}', $id, 'payments/{id}/refund'),
            'POST',
            self::getParameters($jsonBody),
            $jsonBody['header'] ?? [],
            $jsonBody['body'] ?? [],
            [],
            [
                200 => RefundResponseRequest::class,
                400 => ResponseError::class,
                401 => ResponseError::class,
                404 => ResponseError::class,
                500 => ResponseError::class,
                501 => ResponseError::class,
            ]
        );
    }

    /**
     * @param string $id
     * @return RequestObject
     */
    public static function getTransactionStatus(
        string $id
    ): RequestObject {
        return new RequestObject(
            \str_replace('{id}', $id, 'payments/{id}'),
            'GET',
            [],
            [],
            [],
            [],
            [
                200 => ResponseRequest::class,
                400 => ResponseError::class,
                401 => ResponseError::class,
                404 => ResponseError::class,
                500 => ResponseError::class,
                501 => ResponseError::class,
            ]
        );
    }

    private static function getParameters(array $input): array
    {
        $parameters = [];

        foreach ($input as $key => $value) {
            if ($key !== 'header' && $key !== 'body') {
                $parameters[$key] = $value;
            }
        }

        return $parameters;
    }
}
