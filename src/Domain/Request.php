<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Domain;

/**
 * Interface Request
 *
 * @package Payvision\SDK\Domain
 */
interface Request
{
    const METHOD_GET = 'GET';
    const METHOD_POST = 'POST';

    public function getUri(): string;

    public function getMethod(): string;

    /**
     * Path params are the parameters after the request URI
     * Example: ?foo=bar&id=12
     *
     * @return array
     */
    public function getPathParams(): array;

    /**
     * Parameters are the parameters set in the root body of the request
     * Example: 'action'
     *
     * @return array
     */
    public function getParameters(): array;

    /**
     * Content of the 'header'-object in the request
     *
     * @return array
     */
    public function getHeader(): array;

    /**
     * Content of the 'body'-object in the request
     *
     * @return array
     */
    public function getBody(): array;

    /**
     * Gets a list of response object types (class names) by HTTP status code
     *
     * @return array
     */
    public function getResponseObjectTypes(): array;

    /**
     * Get the proper response object type by HTTP status code.
     *
     * @param int $code
     * @return string
     */
    public function getResponseObjectByStatusCode(int $code): string;
}
