<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\ValueObject\Link;

class RequestLink
{
    /**
     * @var int[]
     */
    private $brandIds;

    /**
     * @var string
     */
    private $returnUrl;

    /**
     * @var string
     */
    private $duration;

    /**
     * @var string
     */
    private $expirationTime;

    /**
     * @var bool
     */
    private $threeDSecure;

    /**
     * @var string
     */
    private $tokenize;

    /**
     * RequestLink constructor.
     *
     * @param int[] $brandIds
     * @param string $returnUrl
     * @param string $duration
     * @param string $expirationTime
     * @param bool $threeDSecure
     * @param string $tokenize
     */
    public function __construct(
        array $brandIds,
        string $returnUrl,
        string $duration = null,
        string $expirationTime = null,
        bool $threeDSecure = null,
        string $tokenize = null
    ) {
        $this->brandIds = $brandIds;
        $this->returnUrl = $returnUrl;
        $this->duration = $duration;
        $this->expirationTime = $expirationTime;
        $this->threeDSecure = $threeDSecure;
        $this->tokenize = $tokenize;
    }

    /**
     * @return int[]
     */
    public function getBrandIds(): array
    {
        return $this->brandIds;
    }

    /**
     * @return string
     */
    public function getReturnUrl(): string
    {
        return $this->returnUrl;
    }

    /**
     * @return string|null
     */
    public function getDuration(): ?string
    {
        return $this->duration;
    }

    /**
     * @return string|null
     */
    public function getExpirationTime(): ?string
    {
        return $this->expirationTime;
    }

    /**
     * @return bool|null
     */
    public function getThreeDSecure(): ?bool
    {
        return $this->threeDSecure;
    }

    /**
     * @return string|null
     */
    public function getTokenize(): ?string
    {
        return $this->tokenize;
    }
}
