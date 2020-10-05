<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Test\Api;

class EPSTest extends AbstractPaymentTest
{
    const BRAND_ID = 3030;

    protected function prepareFakePaymentRequest()
    {
        parent::prepareFakePaymentRequest();

        $this->paymentRequestBuilder->body()->bank()
            ->setCountryCode('AT');
    }
}
