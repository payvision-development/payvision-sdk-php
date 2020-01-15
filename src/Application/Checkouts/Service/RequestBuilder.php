<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Application\Checkouts\Service;

use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\Request as CheckoutRequest;
use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\Response as CheckoutResponse;
use Payvision\SDK\Domain\Checkouts\ValueObject\Status\Response as StatusResponse;
use Payvision\SDK\Application\Request\Builder;
use Payvision\SDK\Application\ApiRequest;

class RequestBuilder
{
    public static function newCheckout(
        CheckoutRequest $input
        
    ): ApiRequest
    {
        $jsonBody = Builder::toArray($input);
        return new ApiRequest(
            'checkouts',
            'POST',
            self::getParameters($jsonBody),
            $jsonBody['header'] ?? [],
            $jsonBody['body'] ?? [],
            [],
            [
                200 => CheckoutResponse::class,
                400 => CheckoutResponse::class,
                500 => CheckoutResponse::class,
                501 => CheckoutResponse::class,
            ]
        );
    }

    public static function getCheckoutStatus(
        
        string $id,
        string $businessId
    ): ApiRequest
    {
        return new ApiRequest(
            \str_replace('{id}', $id, 'checkouts/{id}'),
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
