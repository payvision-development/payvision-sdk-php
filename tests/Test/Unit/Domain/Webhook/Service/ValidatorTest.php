<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Test\Unit\Domain\Webhook\Service;

use Payvision\SDK\Domain\Webhook\Service\Validator;
use Payvision\SDK\Exception\WebhookException;
use PHPUnit\Framework\TestCase;

class ValidatorTest extends TestCase
{
    /**
     * @var Validator
     */
    private $subject;

    /**
     * @return null
     */
    protected function setUp()
    {
        $this->subject = new Validator();
    }

    /**
     * @param string $eventSignature
     * @param string $secret
     * @param string $body
     * @throws WebhookException
     * @dataProvider validateWebhookDataProvider
     * @return null
     */
    public function testValidateWebhook(string $eventSignature, string $secret, string $body)
    {
        self::assertTrue($this->subject->validateWebhook($eventSignature, $secret, $body));
    }

    public function validateWebhookDataProvider(): array
    {
        return [
            // Test data:
            [
                // phpcs:ignore
                'eyJhbGciOiJIUzI1NiJ9.eyJ0cmFuc21pc3Npb25JZCI6IjVkY2ExNjlmLTUyNGMtNGQ3MC1iMjMwLWM4MTgwMTVjYWM2ZiIsInRpbWVzdGFtcCI6IjIwMTktMDEtMjRUMTM6NTg6NTQuOTU0MTI3MloiLCJob29rSWQiOiIwZjBmODk4Ny1jYjFmLWU5MTEtODExYi0wMDUwNTZhZDEzYjQiLCJjcmMzMiI6IkpGRVM4USJ9.yuszIwcnEPr2qafCi2RtBWfO4O6ejRDDl1eILejs0-M',
                'secret',
                // phpcs:ignore
                '{"Id":"5dca169f-524c-4d70-b230-c818015cac6f","Type":"Transaction.Update","CreateTime":"2019-01-24T13:58:54.9541272Z","Message":"A payment was updated.","Payload":{"result":0,"description":"Ok","header":{"requestTimestamp":"2019-01-24T13:57:05Z","requestCode":"202.2870fdda-38cb-4216-967f-214868772994"},"body":{"bank":{"accountHolderName":"Onderheuvel","bic":{},"countryCode":"NL","iban":{},"name":"ING"},"transaction":{"descriptor":"4211.1235.9674 IDeal DESC","amount":50,"currencyCode":"EUR","action":"payment","id":"27a9943c-f0af-415f-a89d-5e532ec09ecc","trackingCode":"testbart-1548338225","brandId":3010}}}}',
            ],
            // CRC with "/" character:
            [
                // phpcs:ignore
                'eyJhbGciOiJIUzI1NiJ9.eyJ0cmFuc21pc3Npb25JZCI6IjQ1YWRiYzVjLTc2YmQtNGYyYy1hMDc5LTE4ZWVlNmRiNmY4NSIsInRpbWVzdGFtcCI6IjIwMTktMDItMDdUMTE6NTA6MzUuNTg2NjYxWiIsImhvb2tJZCI6IjBmMGY4OTg3LWNiMWYtZTkxMS04MTFiLTAwNTA1NmFkMTNiNCIsImNyYzMyIjoiMHd1X01BIn0.KCjRsOEi-eP7MOO5LzNcI09yNcBYqhp1mmCpgsN_OXM',
                "secret",
                // phpcs:ignore
                '{"Id":"45adbc5c-76bd-4f2c-a079-18eee6db6f85","Type":"Transaction.Update","CreateTime":"2019-02-07T11:50:35.586661Z","Message":"A payment was updated.","Payload":{"result":0,"description":"Ok","header":{"requestTimestamp":"2019-02-07T11:50:29Z"},"body":{"bank":{"accountHolderName":"Hr E G H Küppers en/of MW M.J. Küppers-Veeneman","bic":{},"iban":{}},"transaction":{"descriptor":"Test Store","amount":1,"currencyCode":"EUR","action":"payment","id":"29d1f226-f8f7-42a6-b16f-a01a2b6cd46d","trackingCode":"5c5c1b84-41a0d7","brandId":3010}}}}',
            ],
        ];
    }
}
