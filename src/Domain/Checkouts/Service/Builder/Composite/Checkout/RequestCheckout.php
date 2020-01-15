<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\Service\Builder\Composite\Checkout;

use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\RequestCheckout as RequestCheckoutObject;
use Payvision\SDK\Domain\Checkouts\Service\Builder\OneClick as OneClickBuilder;
use Payvision\SDK\Domain\Service\Builder\Basic;

class RequestCheckout extends Basic
{
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
        $this->oneClickBuilder = new OneClickBuilder();
    }

    /**
     * @return RequestCheckoutObject
     */
    public function build(): RequestCheckoutObject
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
     * @param string $returnUrl
     * @return self
     */
    public function setReturnUrl(string $returnUrl): self
    {
        return $this->set('returnUrl', $returnUrl);
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
     * @return RequestCheckoutObject
     */
    protected function buildObject(): RequestCheckoutObject
    {
        return new RequestCheckoutObject(
            $this->get('brandIds'),
            $this->get('returnUrl'),
            $this->isOneClickBuilderTouched ? $this->oneClickBuilder->build() : null,
            $this->get('threeDSecure'),
            $this->get('tokenize')
        );
    }
}
