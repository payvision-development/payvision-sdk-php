<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\Service\Builder\Link;

use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\RequestLink as RequestLinkObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class RequestLink extends Basic
{
    /**
     * @return RequestLinkObject
     */
    public function build(): RequestLinkObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param int[] $brandIds
     * @return RequestLink
     */
    public function setBrandIds(array $brandIds): RequestLink
    {
        return $this->set('brandIds', $brandIds);
    }

    /**
     * @param string $returnUrl
     * @return RequestLink
     */
    public function setReturnUrl(string $returnUrl): RequestLink
    {
        return $this->set('returnUrl', $returnUrl);
    }

    /**
     * @param string $duration
     * @return RequestLink
     */
    public function setDuration(string $duration): RequestLink
    {
        return $this->set('duration', $duration);
    }

    /**
     * @param string $expirationTime
     * @return RequestLink
     */
    public function setExpirationTime(string $expirationTime): RequestLink
    {
        return $this->set('expirationTime', $expirationTime);
    }

    /**
     * @return RequestLinkObject
     */
    protected function buildObject(): RequestLinkObject
    {
        return new RequestLinkObject(
            $this->get('brandIds'),
            $this->get('returnUrl'),
            $this->get('duration'),
            $this->get('expirationTime')
        );
    }
}
