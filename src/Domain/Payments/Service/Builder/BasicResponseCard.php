<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder;

use Payvision\SDK\Domain\Payments\ValueObject\BasicResponseCard as BasicResponseCardObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class BasicResponseCard extends Basic
{
    public function build(): BasicResponseCardObject
    {
        return $this->buildAndReset();
    }

    public function setApprovalCode(string $approvalCode): self
    {
        return $this->set('approvalCode', $approvalCode);
    }

    public function setExpiryMonth(string $expiryMonth): self
    {
        return $this->set('expiryMonth', $expiryMonth);
    }

    public function setExpiryYear(string $expiryYear): self
    {
        return $this->set('expiryYear', $expiryYear);
    }

    public function setFirstSixDigits(string $firstSixDigits): self
    {
        return $this->set('firstSixDigits', $firstSixDigits);
    }

    public function setHolderName(string $holderName): self
    {
        return $this->set('holderName', $holderName);
    }

    public function setLastFourDigits(string $lastFourDigits): self
    {
        return $this->set('lastFourDigits', $lastFourDigits);
    }

    protected function buildObject(): BasicResponseCardObject
    {
        return new BasicResponseCardObject(
            $this->get('approvalCode'),
            $this->get('expiryMonth'),
            $this->get('expiryYear'),
            $this->get('firstSixDigits'),
            $this->get('holderName'),
            $this->get('lastFourDigits')
        );
    }
}
