<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Test\Unit\Domain\Service\Helper;

use Exception;
use Payvision\SDK\Domain\Service\Helper\AfterpayErrorMessageHelper;
use Payvision\SDK\Exception\AfterpayErrorException;
use PHPUnit\Framework\TestCase;

class AfterpayErrorMessageHelperTest extends TestCase
{
    /**
     * @param string $errorCode
     * @param array $expected
     * @throws AfterpayErrorException
     * @dataProvider afterpayExtractMessageCodeProvider
     */
    public function testExtractMessageCodes(string $errorCode, array $expected): void
    {
        self::assertSame($expected, AfterpayErrorMessageHelper::extractMessageCodes($errorCode));
    }

    public function afterpayExtractMessageCodeProvider(): array
    {
        return [
            'single error code' => [
                'field.billto.city.missing (De plaatsnaam van het factuuradres ontbreekt)',
                [AfterpayErrorMessageHelper::BILLTO_CITY_MISSING],
            ],
            'multiple error codes' => [
                'field.billto.housenumber.missing (Het huisnummer van het factuuradres ontbreekt) | ' .
                'field.billto.housenumberaddition.missing (De huisnummertoevoeging van het factuuradres ontbreekt)',
                [
                    AfterpayErrorMessageHelper::BILLTO_HOUSENUMBER_MISSING,
                    AfterpayErrorMessageHelper::BILLTO_HOUSENUMBERADDITION_MISSING,
                ],
            ],
        ];
    }

    /**
     * @param string $message
     * @param string $expected
     * @throws AfterpayErrorException
     * @dataProvider afterpayExtractMessageCodeExceptionProvider
     */
    public function testExtractMessageCodesException(string $message, string $expected): void
    {
        $this->expectException(AfterpayErrorException::class);
        try {
            AfterpayErrorMessageHelper::extractMessageCodes($message);
        } catch (Exception $exception) {
            self::assertSame($expected, $exception->getMessage());
            throw $exception;
        }
    }

    public function afterpayExtractMessageCodeExceptionProvider(): array
    {
        return [
            'Non parsable error code' => [
                'housenumberaddition_missing',
                'Unable to handle Afterpay error code: housenumberaddition_missing',
            ]
        ];
    }
}
