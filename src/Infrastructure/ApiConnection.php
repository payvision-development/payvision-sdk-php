<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

// phpcs:disable ObjectCalisthenics.Metrics.MethodPerClassLimit.ObjectCalisthenics\Sniffs\Metrics\MethodPerClassLimitSniff

namespace Payvision\SDK\Infrastructure;

use GuzzleHttp\Client;
use Payvision\SDK\Application\Reflection\JsonToObject;
use Payvision\SDK\Domain\Request;
use Payvision\SDK\Exception\Api\ErrorResponse;
use Payvision\SDK\Exception\ApiException;
use Payvision\SDK\Exception\BuilderException;
use ReflectionException;

class ApiConnection implements Connection
{
    const URI_LIVE = 'https://connect.acehubpaymentservices.com/gateway/v3/';
    const URI_TEST = 'https://stagconnect.acehubpaymentservices.com/gateway/v3/';

    /**
     * @var Client
     */
    private $client;

    /**
     * @var bool
     */
    private $debug;

    /**
     * @var int
     */
    private $lastStatusCode;

    /**
     * @var array
     */
    private $lastJsonRequest;

    /**
     * ApiConnection constructor.
     *
     * @param string $userName
     * @param string $password
     * @param string $baseUri
     * @param bool|resource $debug
     */
    public function __construct(
        string $userName,
        string $password,
        string $baseUri = self::URI_TEST,
        $debug = false
    ) {
        $this->debug = $debug;
        $this->client = new Client([
            'base_uri' => $baseUri,
            'auth' => [$userName, $password],
            'debug' => $debug,
            'http_errors' => false,
            'timeout' => 300,
        ]);
    }

    /**
     * @param Request $request
     * @param array $requestHeaders
     * @return mixed
     * @throws ApiException
     * @throws BuilderException
     * @throws ErrorResponse
     */
    public function execute(Request $request, array $requestHeaders = [])
    {
        $this->validateResponseClasses($request);
        $jsonResponse = $this->doRequest($request, $requestHeaders);
        return $this->handleResponse($jsonResponse, $request);
    }

    /**
     * @param Request $request
     * @return array
     * @throws ApiException
     * @throws BuilderException
     * @throws ErrorResponse
     */
    public function executeAndReturnArray(Request $request): array
    {
        $jsonResponse = $this->doRequest($request);
        $items = [];

        foreach ($jsonResponse as $item) {
            $items[] = $this->handleResponse($item, $request);
        }

        return $items;
    }

    /**
     * @param Request $request
     * @param RequestHeaderCollection $requestHeaderCollection
     * @return array
     * @throws ApiException
     */
    private function get(Request $request, RequestHeaderCollection $requestHeaderCollection): array
    {
        $guzzleResponse = $this->client->get(
            $request->getUri(),
            $this->buildRequestArray($request, $requestHeaderCollection)
        );

        $this->lastJsonRequest = $request->getPathParams();
        $this->lastStatusCode = $guzzleResponse->getStatusCode();
        $contents = $guzzleResponse->getBody()->getContents();
        $json = \json_decode($contents, true);

        if (!\is_array($json)) {
            $this->logDebugData($this->lastJsonRequest, ['_raw_response' => $contents], $requestHeaderCollection);
            throw new ApiException(
                \sprintf('Response is not JSON: %1$s', $contents),
                ApiException::INVALID_RESPONSE
            );
        }

        return $json;
    }

    /**
     * @param Request $request
     * @param RequestHeaderCollection $requestHeaderCollection
     * @return array
     * @throws ApiException
     */
    private function post(Request $request, RequestHeaderCollection $requestHeaderCollection): array
    {
        // Build request according to request object
        $jsonRequest = $this->prepareJsonRequest($request);
        $guzzleResponse = $this->client->post(
            $request->getUri(),
            $this->buildRequestArray($request, $requestHeaderCollection, $jsonRequest)
        );

        $this->lastJsonRequest = $jsonRequest;
        $this->lastStatusCode = $guzzleResponse->getStatusCode();
        $contents = $guzzleResponse->getBody()->getContents();
        $json = \json_decode($contents, true);

        if (!\is_array($json)) {
            $this->logDebugData($this->lastJsonRequest, ['_raw_response' => $contents], $requestHeaderCollection);
            throw new ApiException(
                \sprintf('Response is not JSON: %1$s', $contents),
                ApiException::INVALID_RESPONSE
            );
        }

        return $json;
    }

    /**
     * @param array $jsonRequest
     * @param array $jsonResponse
     * @param RequestHeaderCollection $requestHeaderCollection
     * @return null
     */
    private function logDebugData(
        array $jsonRequest,
        array $jsonResponse,
        RequestHeaderCollection $requestHeaderCollection
    ) {
        $debugData = \sprintf(
            '%1$s%2$sRequest:%1$s%3$s%1$sResponse:%1$s%4$s%1$s',
            \PHP_EOL,
            \count($requestHeaderCollection) > 0 ?
                \sprintf(
                    'Request headers:%1$s%2$s%1$s',
                    \PHP_EOL,
                    \json_encode($requestHeaderCollection->getHeaders(), \JSON_PRETTY_PRINT)
                ) : '',
            \json_encode($jsonRequest, \JSON_PRETTY_PRINT),
            \json_encode($jsonResponse, \JSON_PRETTY_PRINT)
        );

        if ($this->debug === true) {
            echo $debugData;
        }

        if (\is_resource($this->debug)) {
            \fwrite($this->debug, $debugData);
        }
    }

    /**
     * @param Request $request
     * @throws ApiException
     * @return null
     */
    private function validateResponseClasses(Request $request)
    {
        if ($request->getResponseObjectTypes() === []) {
            throw new ApiException(
                'No response objects set',
                ApiException::RESPONSE_CLASS_NOT_FOUND
            );
        }

        foreach ($request->getResponseObjectTypes() as $targetClass) {
            if (!\class_exists($targetClass)) {
                throw new ApiException(
                    'Response class not found: ' . $targetClass,
                    ApiException::RESPONSE_CLASS_NOT_FOUND
                );
            }
        }
    }

    /**
     * @param array $jsonResponse
     * @param Request $request
     * @return mixed
     * @throws ApiException
     * @throws ErrorResponse
     * @throws BuilderException
     */
    private function handleResponse(
        array $jsonResponse,
        Request $request
    ) {
        try {
            $targetClass = $request->getResponseObjectByStatusCode($this->lastStatusCode);
            $response = JsonToObject::build($targetClass, $jsonResponse);

            if ($this->lastStatusCode >= 400) {
                throw new ErrorResponse($response);
            }
            return $response;
        } catch (ReflectionException $exception) {
            throw new ApiException(
                'Exception thrown during response building',
                ApiException::CANNOT_BUILD_RESPONSE,
                $exception
            );
        }
    }

    /**
     * @param Request $request
     * @param array $requestHeaders
     * @return array
     * @throws ApiException
     */
    private function doRequest(Request $request, array $requestHeaders = []): array
    {
        $requestHeaderCollection = $this->buildRequestHeaderCollection($requestHeaders);
        switch ($request->getMethod()) {
            case Request::METHOD_GET:
                $jsonResponse = $this->get($request, $requestHeaderCollection);
                break;
            case Request::METHOD_POST:
                $jsonResponse = $this->post($request, $requestHeaderCollection);
                break;
            default:
                throw new ApiException(
                    'Invalid request method',
                    ApiException::INVALID_REQUEST_METHOD
                );
                break;
        }

        if ($this->debug) {
            $this->logDebugData($this->lastJsonRequest, $jsonResponse, $requestHeaderCollection);
        }

        return $jsonResponse;
    }

    /**
     * @param Request $request
     * @return array
     */
    private function prepareJsonRequest(Request $request): array
    {
        $jsonRequest = \array_merge(
            [
                'header' => $request->getHeader(),
                'body' => $request->getBody(),
            ],
            $request->getParameters()
        );

        if ($jsonRequest['body'] === []) {
            unset($jsonRequest['body']);
        }

        return $jsonRequest;
    }

    /**
     * @param Request $request
     * @param RequestHeaderCollection $requestHeaderCollection
     * @param array $jsonRequest
     * @return array
     */
    private function buildRequestArray(
        Request $request,
        RequestHeaderCollection $requestHeaderCollection,
        array $jsonRequest = null
    ): array {
        $returnValue = [
            'query' => $request->getPathParams(),
        ];

        if (\count($requestHeaderCollection) > 0) {
            $returnValue['headers'] = $requestHeaderCollection->getHeaders();
        }

        if ($jsonRequest !== null) {
            $returnValue['json'] = $jsonRequest;
        }

        return $returnValue;
    }

    /**
     * @param string[],array<string> $headers
     * @return RequestHeaderCollection
     */
    private function buildRequestHeaderCollection(array $headers): RequestHeaderCollection
    {
        $requestHeader = new RequestHeaderCollection();
        foreach ($headers as $key => $value) {
            $requestHeader->add($key, $value);
        }
        return $requestHeader;
    }
}
