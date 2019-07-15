<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Domain\ValueObject;

/**
 * class Issuer
 *
 * @package Payvision\SDK\Domain
 */
class Issuer
{
    /**
     * @var int
     */
    private $issuerId;

    /**
     * @var string
     */
    private $description;

    public function __construct(int $issuerId, string $description)
    {
        $this->issuerId = $issuerId;
        $this->description = $description;
    }

    public function getIssuerId(): int
    {
        return $this->issuerId;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
