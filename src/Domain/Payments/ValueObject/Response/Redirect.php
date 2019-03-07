<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Response;

class Redirect
{
    /**
     * @var Fields
     */
    private $fields;

    /**
     * @var string
     */
    private $method;

    /**
     * @var string
     */
    private $url;

    /**
     * Redirect constructor.
     *
     * @param Fields $fields
     * @param string $method
     * @param string $url
     */
    public function __construct(
        Fields $fields = null,
        string $method = null,
        string $url = null
    ) {
        $this->fields = $fields;
        $this->method = $method;
        $this->url = $url;
    }

    /**
    * @return Fields|null
    */
    public function getFields()
    {
        return $this->fields;
    }

    /**
    * @return string|null
    */
    public function getMethod()
    {
        return $this->method;
    }

    /**
    * @return string|null
    */
    public function getUrl()
    {
        return $this->url;
    }
}
