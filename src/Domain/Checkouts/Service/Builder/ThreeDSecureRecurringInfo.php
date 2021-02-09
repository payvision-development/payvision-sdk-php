<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\Service\Builder;

use Payvision\SDK\Domain\Checkouts\ValueObject\ThreeDSecureRecurringInfo as ThreeDSecureRecurringInfoObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ThreeDSecureRecurringInfo extends Basic
{
    /**
     * @return ThreeDSecureRecurringInfoObject
     */
    public function build(): ThreeDSecureRecurringInfoObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param \Payvision\SDK\DataType\DateTime $purchaseDate
     * @return ThreeDSecureRecurringInfo
     */
    public function setPurchaseDate(\Payvision\SDK\DataType\DateTime $purchaseDate): ThreeDSecureRecurringInfo
    {
        return $this->set('purchaseDate', $purchaseDate);
    }

    /**
     * @param \Payvision\SDK\DataType\Date $recurringEnd
     * @return ThreeDSecureRecurringInfo
     */
    public function setRecurringEnd(\Payvision\SDK\DataType\Date $recurringEnd): ThreeDSecureRecurringInfo
    {
        return $this->set('recurringEnd', $recurringEnd);
    }

    /**
     * @param int $recurringFrequency
     * @return ThreeDSecureRecurringInfo
     */
    public function setRecurringFrequency(int $recurringFrequency): ThreeDSecureRecurringInfo
    {
        return $this->set('recurringFrequency', $recurringFrequency);
    }

    /**
     * @return ThreeDSecureRecurringInfoObject
     */
    protected function buildObject(): ThreeDSecureRecurringInfoObject
    {
        return new ThreeDSecureRecurringInfoObject(
            $this->get('purchaseDate'),
            $this->get('recurringEnd'),
            $this->get('recurringFrequency')
        );
    }
}
