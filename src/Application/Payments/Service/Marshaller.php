<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Application\Payments\Service;

use Exception;
use Payvision\SDK\Application\Reflection\JsonToObject;
use Payvision\SDK\Application\Request\Builder;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\Response as PaymentResponse;
use Payvision\SDK\Domain\Payments\ValueObject\Capture\Response as CaptureResponse;
use Payvision\SDK\Domain\Payments\ValueObject\Refund\Response as RefundResponse;

class Marshaller
{
    /**
     * @param mixed $object
     * @return PaymentResponse
     * @throws Exception
     */
    public function toPaymentResponse($object): PaymentResponse
    {
        return $this->marshall($object, PaymentResponse::class);
    }

    /**
     * @param mixed $object
     * @return CaptureResponse
     * @throws Exception
     */
    public function toCaptureResponse($object): CaptureResponse
    {
        return $this->marshall($object, CaptureResponse::class);
    }

    /**
     * @param mixed $object
     * @return RefundResponse
     * @throws Exception
     */
    public function toRefundResponse($object): RefundResponse
    {
        return $this->marshall($object, RefundResponse::class);
    }

    /**
     * @param mixed $object
     * @param string $targetObject
     * @return mixed
     * @throws Exception
     */
    private function marshall($object, string $targetObject)
    {
        try {
            $json = Builder::toArray($object);
            return JsonToObject::build($targetObject, $json);
        } catch (Exception $exception) {
            throw new Exception(
                \sprintf('Error while marshalling object: %s', $exception->getMessage())
            );
        }
    }
}
