<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Response;

class Qr
{
    /**
     * @var string
     */
    private $resource;

    /**
     * Qr constructor.
     *
     * @param string $resource
     */
    public function __construct(
        string $resource
    ) {
        $this->resource = $resource;
    }

    /**
    * @return string
    */
    public function getResource()
    {
        return $this->resource;
    }
}
