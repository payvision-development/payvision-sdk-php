<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Exception\Api;

// use Payvision\SDK\Domain\Response\Error;
use Payvision\SDK\Exception\ApiException;
use Throwable;

class ErrorResponse extends ApiException
{
    /**
     * @var object
     */
    private $errorResponse;

    /**
     * ErrorResponse constructor.
     *
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingParameterTypeHint
     * @param object $errorResponse
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(
        $errorResponse,
        string $message = "",
        int $code = 0,
        Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
        $this->errorResponse = $errorResponse;
    }

    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint
     * @return object
     */
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}
