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

    // phpcs:disable ObjectCalisthenics.Files.FunctionLength.ObjectCalisthenics\Sniffs\Files\FunctionLengthSniff

    /**
     * @return array|array[]
     */
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
            'phone number 1 missing' => [
                'field.billto.phonenumber1.missing (Het telefoonnummer ontbreekt)',
                [AfterpayErrorMessageHelper::BILLTO_PHONENUMBER1_MISSING],
            ],
            'phone number 1 invalid' => [
                'field.billto.phonenumber1.invalid (fixed line and/or mobile number is invalid)',
                [AfterpayErrorMessageHelper::BILLTO_PHONENUMBER1_INVALID],
            ],
            'phone number 2 missing' => [
                'field.billto.phonenumber2.missing (Het telefoonnummer ontbreekt)',
                [AfterpayErrorMessageHelper::BILLTO_PHONENUMBER2_MISSING],
            ],
            'phone number 2 invalid' => [
                'field.billto.phonenumber2.invalid (fixed line and/or mobile number is invalid)',
                [AfterpayErrorMessageHelper::BILLTO_PHONENUMBER2_INVALID],
            ],
        ];
    }

    // phpcs:enable ObjectCalisthenics.Files.FunctionLength.ObjectCalisthenics\Sniffs\Files\FunctionLengthSniff

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
            ],
        ];
    }
}
