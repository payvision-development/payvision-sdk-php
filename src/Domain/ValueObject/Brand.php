<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Domain\ValueObject;

/**
 * class Brand
 *
 * @package Payvision\SDK\Domain
 */
class Brand
{
    /**
     * @var int
     */
    private $brandId;

    /**
     * @var string
     */
    private $brandName;

    /**
     * @var bool
     */
    private $isASync;

    public function __construct(int $brandId, string $brandName, bool $isASync)
    {
        $this->brandId = $brandId;
        $this->brandName = $brandName;
        $this->isASync = $isASync;
    }

    public function getBrandId(): int
    {
        return $this->brandId;
    }

    public function getBrandName(): string
    {
        return $this->brandName;
    }

    public function isASync(): bool
    {
        return $this->isASync;
    }
}
