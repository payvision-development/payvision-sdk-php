<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\Service\Builder;

use Payvision\SDK\Domain\Checkouts\ValueObject\OneClick as OneClickObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class OneClick extends Basic
{
    /**
     * @return OneClickObject
     */
    public function build(): OneClickObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param bool $requireCvv
     * @return self
     */
    public function setRequireCvv(bool $requireCvv): self
    {
        return $this->set('requireCvv', $requireCvv);
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
     * @param string[] $tokens
     * @return self
     */
    public function setTokens(array $tokens): self
    {
        return $this->set('tokens', $tokens);
    }

    /**
     * @param bool $useCustomerTokens
     * @return self
     */
    public function setUseCustomerTokens(bool $useCustomerTokens): self
    {
        return $this->set('useCustomerTokens', $useCustomerTokens);
    }

    /**
     * @return OneClickObject
     */
    protected function buildObject(): OneClickObject
    {
        return new OneClickObject(
            $this->get('requireCvv'),
            $this->get('threeDSecure'),
            $this->get('tokens'),
            $this->get('useCustomerTokens')
        );
    }
}
