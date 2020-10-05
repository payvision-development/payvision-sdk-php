<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\ValueObject;

class OneClick
{
    /**
     * @var bool
     */
    private $requireCvv;

    /**
     * @var bool
     */
    private $threeDSecure;

    /**
     * @var string[]
     */
    private $tokens;

    /**
     * @var bool
     */
    private $useCustomerTokens;

    /**
     * OneClick constructor.
     *
     * @param bool $requireCvv
     * @param bool $threeDSecure
     * @param string[] $tokens
     * @param bool $useCustomerTokens
     */
    public function __construct(
        bool $requireCvv = null,
        bool $threeDSecure = null,
        array $tokens = null,
        bool $useCustomerTokens = null
    ) {
        $this->requireCvv = $requireCvv;
        $this->threeDSecure = $threeDSecure;
        $this->tokens = $tokens;
        $this->useCustomerTokens = $useCustomerTokens;
    }

    /**
     * @return bool|null
     */
    public function getRequireCvv()
    {
        return $this->requireCvv;
    }

    /**
     * @return bool|null
     */
    public function getThreeDSecure()
    {
        return $this->threeDSecure;
    }

    /**
     * @return string[]|null
     */
    public function getTokens()
    {
        return $this->tokens;
    }

    /**
     * @return bool|null
     */
    public function getUseCustomerTokens()
    {
        return $this->useCustomerTokens;
    }
}
