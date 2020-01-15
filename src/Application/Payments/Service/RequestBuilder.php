<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Application\Payments\Service;

use Payvision\SDK\Domain\Payments\ValueObject\Payment\Request as PaymentRequest;
use Payvision\SDK\Domain\Payments\ValueObject\Capture\Request as CaptureRequest;
use Payvision\SDK\Domain\Payments\ValueObject\Cancel\Request as CancelRequest;
use Payvision\SDK\Domain\Payments\ValueObject\Refund\Request as RefundRequest;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\Response as PaymentResponse;
use Payvision\SDK\Domain\Payments\ValueObject\Capture\Response as CaptureResponse;
use Payvision\SDK\Domain\Payments\ValueObject\Cancel\Response as CancelResponse;
use Payvision\SDK\Domain\Payments\ValueObject\Refund\Response as RefundResponse;
use Payvision\SDK\Domain\Payments\ValueObject\Status\Response as StatusResponse;
use Payvision\SDK\Application\Request\Builder;
use Payvision\SDK\Application\ApiRequest;

class RequestBuilder
{
    public static function newPayment(
        PaymentRequest $input
        
    ): ApiRequest
    {
        $jsonBody = Builder::toArray($input);
        return new ApiRequest(
            'payments',
            'POST',
            self::getParameters($jsonBody),
            $jsonBody['header'] ?? [],
            $jsonBody['body'] ?? [],
            [],
            [
                200 => PaymentResponse::class,
                400 => PaymentResponse::class,
                401 => PaymentResponse::class,
                404 => PaymentResponse::class,
                500 => PaymentResponse::class,
                501 => PaymentResponse::class,
            ]
        );
    }

    public static function captureTransaction(
        CaptureRequest $input,
        string $id
    ): ApiRequest
    {
        $jsonBody = Builder::toArray($input);
        return new ApiRequest(
            \str_replace('{id}', $id, 'payments/{id}/capture'),
            'POST',
            self::getParameters($jsonBody),
            $jsonBody['header'] ?? [],
            $jsonBody['body'] ?? [],
            [],
            [
                200 => CaptureResponse::class,
                400 => CaptureResponse::class,
                401 => CaptureResponse::class,
                404 => CaptureResponse::class,
                500 => CaptureResponse::class,
                501 => CaptureResponse::class,
            ]
        );
    }

    public static function cancelTransaction(
        CancelRequest $input,
        string $id
    ): ApiRequest
    {
        $jsonBody = Builder::toArray($input);
        return new ApiRequest(
            \str_replace('{id}', $id, 'payments/{id}/cancel'),
            'POST',
            self::getParameters($jsonBody),
            $jsonBody['header'] ?? [],
            $jsonBody['body'] ?? [],
            [],
            [
                200 => CancelResponse::class,
                400 => CancelResponse::class,
                401 => CancelResponse::class,
                404 => CancelResponse::class,
                500 => CancelResponse::class,
                501 => CancelResponse::class,
            ]
        );
    }

    public static function refundTransaction(
        RefundRequest $input,
        string $id
    ): ApiRequest
    {
        $jsonBody = Builder::toArray($input);
        return new ApiRequest(
            \str_replace('{id}', $id, 'payments/{id}/refund'),
            'POST',
            self::getParameters($jsonBody),
            $jsonBody['header'] ?? [],
            $jsonBody['body'] ?? [],
            [],
            [
                200 => RefundResponse::class,
                400 => RefundResponse::class,
                401 => RefundResponse::class,
                404 => RefundResponse::class,
                500 => RefundResponse::class,
                501 => RefundResponse::class,
            ]
        );
    }

    public static function getPayments(
        
        
        string $businessId,
        string $trackingCode
    ): ApiRequest
    {
        return new ApiRequest(
            'payments',
            'GET',
            [],
            [],
            [],
            [
                'businessId' => $businessId,
                'trackingCode' => $trackingCode
            ],
            [
                200 => StatusResponse::class,
                400 => StatusResponse::class,
                401 => StatusResponse::class,
                404 => StatusResponse::class,
                500 => StatusResponse::class,
                501 => StatusResponse::class,
            ]
        );
    }

    public static function getTransactionStatus(
        
        string $id,
        string $businessId
    ): ApiRequest
    {
        return new ApiRequest(
            \str_replace('{id}', $id, 'payments/{id}'),
            'GET',
            [],
            [],
            [],
            [
                'businessId' => $businessId
            ],
            [
                200 => StatusResponse::class,
                400 => StatusResponse::class,
                401 => StatusResponse::class,
                404 => StatusResponse::class,
                500 => StatusResponse::class,
                501 => StatusResponse::class,
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
