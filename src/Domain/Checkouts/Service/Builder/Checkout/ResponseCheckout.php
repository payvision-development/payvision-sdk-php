<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\Service\Builder\Checkout;

use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\ResponseCheckout as ResponseCheckoutObject;
use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\ResponseRedirect;
use Payvision\SDK\Domain\Checkouts\ValueObject\OneClick;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponseCheckout extends Basic
{
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
     * @param ResponseRedirect $redirect
     * @return self
     */
    public function setRedirect(ResponseRedirect $redirect): self
    {
        return $this->set('redirect', $redirect);
    }

    /**
     * @param OneClick $oneClick
     * @return self
     */
    public function setOneClick(OneClick $oneClick): self
    {
        return $this->set('oneClick', $oneClick);
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
            $this->get('redirect'),
            $this->get('oneClick'),
            $this->get('threeDSecure'),
            $this->get('tokenize')
        );
    }
}
