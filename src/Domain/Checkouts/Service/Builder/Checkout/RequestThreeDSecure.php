<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\Service\Builder\Checkout;

use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\RequestThreeDSecure as RequestThreeDSecureObject;
use Payvision\SDK\Domain\Checkouts\ValueObject\ThreeDSecureAdditionalInfo;
use Payvision\SDK\Domain\Checkouts\ValueObject\ThreeDSecureExemption;
use Payvision\SDK\Domain\Checkouts\ValueObject\ThreeDSecureRecurringInfo;
use Payvision\SDK\Domain\Service\Builder\Basic;

class RequestThreeDSecure extends Basic
{
    /**
     * @return RequestThreeDSecureObject
     */
    public function build(): RequestThreeDSecureObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param ThreeDSecureAdditionalInfo $additionalInfo
     * @return RequestThreeDSecure
     */
    public function setAdditionalInfo(ThreeDSecureAdditionalInfo $additionalInfo): RequestThreeDSecure
    {
        return $this->set('additionalInfo', $additionalInfo);
    }

    /**
     * @param ThreeDSecureExemption $exemption
     * @return RequestThreeDSecure
     */
    public function setExemption(ThreeDSecureExemption $exemption): RequestThreeDSecure
    {
        return $this->set('exemption', $exemption);
    }

    /**
     * @param ThreeDSecureRecurringInfo $recurringInfo
     * @return RequestThreeDSecure
     */
    public function setRecurringInfo(ThreeDSecureRecurringInfo $recurringInfo): RequestThreeDSecure
    {
        return $this->set('recurringInfo', $recurringInfo);
    }

    /**
     * @param string $version
     * @return RequestThreeDSecure
     */
    public function setVersion(string $version): RequestThreeDSecure
    {
        return $this->set('version', $version);
    }

    /**
     * @return RequestThreeDSecureObject
     */
    protected function buildObject(): RequestThreeDSecureObject
    {
        return new RequestThreeDSecureObject(
            $this->get('additionalInfo'),
            $this->get('exemption'),
            $this->get('recurringInfo'),
            $this->get('version')
        );
    }
}
