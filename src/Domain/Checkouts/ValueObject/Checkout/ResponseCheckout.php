<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\ValueObject\Checkout;

use Payvision\SDK\Domain\Checkouts\ValueObject\OneClick;

class ResponseCheckout
{
    /**
     * @var int[]
     */
    private $brandIds;

    /**
     * @var string
     */
    private $checkoutId;

    /**
     * @var \Payvision\SDK\DataType\DateTime
     */
    private $expirationTime;

    /**
     * @var ResponseRedirect
     */
    private $redirect;

    /**
     * @var OneClick
     */
    private $oneClick;

    /**
     * @var bool
     */
    private $threeDSecure;

    /**
     * @var string
     */
    private $tokenize;

    /**
     * ResponseCheckout constructor.
     *
     * @param int[] $brandIds
     * @param string $checkoutId
     * @param \Payvision\SDK\DataType\DateTime $expirationTime
     * @param ResponseRedirect $redirect
     * @param OneClick $oneClick
     * @param bool $threeDSecure
     * @param string $tokenize
     */
    public function __construct(
        array $brandIds,
        string $checkoutId,
        \Payvision\SDK\DataType\DateTime $expirationTime,
        ResponseRedirect $redirect,
        OneClick $oneClick = null,
        bool $threeDSecure = null,
        string $tokenize = null
    ) {
        $this->brandIds = $brandIds;
        $this->checkoutId = $checkoutId;
        $this->expirationTime = $expirationTime;
        $this->redirect = $redirect;
        $this->oneClick = $oneClick;
        $this->threeDSecure = $threeDSecure;
        $this->tokenize = $tokenize;
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
    public function getCheckoutId()
    {
        return $this->checkoutId;
    }

    /**
     * @return \Payvision\SDK\DataType\DateTime
     */
    public function getExpirationTime()
    {
        return $this->expirationTime;
    }

    /**
     * @return ResponseRedirect
     */
    public function getRedirect()
    {
        return $this->redirect;
    }

    /**
     * @return OneClick|null
     */
    public function getOneClick()
    {
        return $this->oneClick;
    }

    /**
     * @return bool|null
     */
    public function getThreeDSecure()
    {
        return $this->threeDSecure;
    }

    /**
     * @return string|null
     */
    public function getTokenize()
    {
        return $this->tokenize;
    }
}
