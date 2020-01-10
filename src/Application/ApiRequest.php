<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license proprietary
 */

namespace Payvision\SDK\Application;

use Exception;
use Payvision\SDK\Domain\Request;

class ApiRequest implements Request
{
    /**
     * @var string
     */
    private $uri;

    /**
     * @var string
     */
    private $method;

    /**
     * @var array
     */
    private $parameters;

    /**
     * @var array
     */
    private $header;

    /**
     * @var array
     */
    private $body;

    /**
     * @var array
     */
    private $pathParams;

    /**
     * @var array
     */
    private $responseObjectTypes;

    public function __construct(
        string $uri,
        string $method = self::METHOD_POST,
        array $parameters = [],
        array $header = [],
        array $body = [],
        array $pathParams = [],
        array $responseObjectTypes = []
    ) {
        $this->uri = $uri;
        $this->method = $method;
        $this->parameters = $parameters;
        $this->header = $header;
        $this->body = $body;
        $this->pathParams = $pathParams;
        $this->responseObjectTypes = $responseObjectTypes;
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getPathParams(): array
    {
        return $this->pathParams;
    }

    public function getParameters(): array
    {
        return $this->parameters;
    }

    public function getHeader(): array
    {
        return $this->header;
    }

    public function getBody(): array
    {
        return $this->body;
    }

    public function getResponseObjectTypes(): array
    {
        return $this->responseObjectTypes;
    }

    /**
     * @param int $code
     * @return string
     * @throws Exception
     */
    public function getResponseObjectByStatusCode(int $code): string
    {
        if (!\array_key_exists($code, $this->responseObjectTypes)) {
            throw new Exception('No response object found for code ' . $code);
        }

        return $this->responseObjectTypes[$code];
    }
}
