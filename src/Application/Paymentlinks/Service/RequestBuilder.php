<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Application\Paymentlinks\Service;

use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\Request as LinkRequest;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\Cancel\Request as CancelRequest;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\Response as LinkResponse;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\Status\Response as StatusResponse;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\Cancel\Response as CancelResponse;
use Payvision\SDK\Application\Request\Builder;
use Payvision\SDK\Application\ApiRequest;

class RequestBuilder
{
    public static function newLink(
        LinkRequest $input
        
    ): ApiRequest
    {
        $jsonBody = Builder::toArray($input);
        return new ApiRequest(
            'paymentlinks',
            'POST',
            self::getParameters($jsonBody),
            $jsonBody['header'] ?? [],
            $jsonBody['body'] ?? [],
            [],
            [
                200 => LinkResponse::class,
                400 => LinkResponse::class,
                401 => LinkResponse::class,
                403 => LinkResponse::class,
                404 => LinkResponse::class,
                500 => LinkResponse::class,
                501 => LinkResponse::class,
            ]
        );
    }

    public static function getLinkStatus(
        
        string $id,
        string $businessId
    ): ApiRequest
    {
        return new ApiRequest(
            \str_replace('{id}', $id, 'paymentlinks/{id}'),
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
                403 => StatusResponse::class,
                404 => StatusResponse::class,
                500 => StatusResponse::class,
                501 => StatusResponse::class,
            ]
        );
    }

    public static function cancelLink(
        CancelRequest $input,
        string $id
    ): ApiRequest
    {
        $jsonBody = Builder::toArray($input);
        return new ApiRequest(
            \str_replace('{id}', $id, 'paymentlinks/{id}/cancel'),
            'POST',
            self::getParameters($jsonBody),
            $jsonBody['header'] ?? [],
            $jsonBody['body'] ?? [],
            [],
            [
                200 => CancelResponse::class,
                400 => CancelResponse::class,
                401 => CancelResponse::class,
                403 => CancelResponse::class,
                404 => CancelResponse::class,
                500 => CancelResponse::class,
                501 => CancelResponse::class,
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
