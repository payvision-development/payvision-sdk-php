<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
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
     * RequestLink constructor.
     *
     * @param int[] $brandIds
     * @param string $returnUrl
     * @param string $duration
     * @param string $expirationTime
     */
    public function __construct(
        array $brandIds,
        string $returnUrl,
        string $duration = null,
        string $expirationTime = null
    ) {
        $this->brandIds = $brandIds;
        $this->returnUrl = $returnUrl;
        $this->duration = $duration;
        $this->expirationTime = $expirationTime;
    }

    /**
     * @return int[]
     */
    public function getBrandIds()
    {
        return $this->brandIds;
    }

    /**
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * @return string|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @return string|null
     */
    public function getExpirationTime()
    {
        return $this->expirationTime;
    }
}
