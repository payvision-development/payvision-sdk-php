<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Test\Api;

class IDealTest extends AbstractPaymentTest
{
    const BRAND_ID = 3010;

    /**
     * @return null
     */
    protected function prepareFakePaymentRequest()
    {
        parent::prepareFakePaymentRequest();

        $this->paymentRequestBuilder->body()->bank()
            ->setCountryCode('NL')
            ->setIssuerId(30);
    }
}
