<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\Service\Builder\Composite\Checkout;

use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\ResponseCheckout as ResponseCheckoutObject;
use Payvision\SDK\Domain\Checkouts\Service\Builder\Checkout\ResponseRedirect as ResponseRedirectBuilder;
use Payvision\SDK\Domain\Checkouts\Service\Builder\OneClick as OneClickBuilder;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponseCheckout extends Basic
{
    /**
     * @var ResponseRedirectBuilder
     */
    private $redirectBuilder;

    /**
     * @var bool
     */
    private $isRedirectBuilderTouched = false;

    /**
     * @var OneClickBuilder
     */
    private $oneClickBuilder;

    /**
     * @var bool
     */
    private $isOneClickBuilderTouched = false;

    public function __construct()
    {
        $this->redirectBuilder = new ResponseRedirectBuilder();
        $this->oneClickBuilder = new OneClickBuilder();
    }

    /**
     * @return ResponseCheckoutObject
     */
    public function build(): ResponseCheckoutObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param int[] $brandIds
     * @return self
     */
    public function setBrandIds(array $brandIds): self
    {
        return $this->set('brandIds', $brandIds);
    }

    /**
     * @param string $checkoutId
     * @return self
     */
    public function setCheckoutId(string $checkoutId): self
    {
        return $this->set('checkoutId', $checkoutId);
    }

    /**
     * @param \Payvision\SDK\DataType\DateTime $expirationTime
     * @return self
     */
    public function setExpirationTime(\Payvision\SDK\DataType\DateTime $expirationTime): self
    {
        return $this->set('expirationTime', $expirationTime);
    }

    /**
     * @return ResponseRedirectBuilder
     */
    public function redirect(): ResponseRedirectBuilder
    {
        $this->isRedirectBuilderTouched = true;
        return $this->redirectBuilder;
    }

    /**
     * @return OneClickBuilder
     */
    public function oneClick(): OneClickBuilder
    {
        $this->isOneClickBuilderTouched = true;
        return $this->oneClickBuilder;
    }

    /**
     * @param bool $threeDSecure
     * @return self
     */
    public function setThreeDSecure(bool $threeDSecure): self
    {
        return $this->set('threeDSecure', $threeDSecure);
    }

    /**
     * @param string $tokenize
     * @return self
     */
    public function setTokenize(string $tokenize): self
    {
        return $this->set('tokenize', $tokenize);
    }

    /**
     * @return ResponseCheckoutObject
     */
    protected function buildObject(): ResponseCheckoutObject
    {
        return new ResponseCheckoutObject(
            $this->get('brandIds'),
            $this->get('checkoutId'),
            $this->get('expirationTime'),
            $this->isRedirectBuilderTouched ? $this->redirectBuilder->build() : null,
            $this->isOneClickBuilderTouched ? $this->oneClickBuilder->build() : null,
            $this->get('threeDSecure'),
            $this->get('tokenize')
        );
    }
}
