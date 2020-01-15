<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\Service\Builder\Composite\Link;

use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\ResponseLink as ResponseLinkObject;
use Payvision\SDK\Domain\Paymentlinks\Service\Builder\Link\ResponseRedirect as ResponseRedirectBuilder;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponseLink extends Basic
{
    /**
     * @var ResponseRedirectBuilder
     */
    private $redirectBuilder;

    /**
     * @var bool
     */
    private $isRedirectBuilderTouched = false;

    public function __construct()
    {
        $this->redirectBuilder = new ResponseRedirectBuilder();
    }

    /**
     * @return ResponseLinkObject
     */
    public function build(): ResponseLinkObject
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
     * @param \Payvision\SDK\DataType\DateTime $expirationTime
     * @return self
     */
    public function setExpirationTime(\Payvision\SDK\DataType\DateTime $expirationTime): self
    {
        return $this->set('expirationTime', $expirationTime);
    }

    /**
     * @param string $linkId
     * @return self
     */
    public function setLinkId(string $linkId): self
    {
        return $this->set('linkId', $linkId);
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
     * @param string $status
     * @return self
     */
    public function setStatus(string $status): self
    {
        return $this->set('status', $status);
    }

    /**
     * @return ResponseLinkObject
     */
    protected function buildObject(): ResponseLinkObject
    {
        return new ResponseLinkObject(
            $this->get('brandIds'),
            $this->get('expirationTime'),
            $this->get('linkId'),
            $this->isRedirectBuilderTouched ? $this->redirectBuilder->build() : null,
            $this->get('status')
        );
    }
}
