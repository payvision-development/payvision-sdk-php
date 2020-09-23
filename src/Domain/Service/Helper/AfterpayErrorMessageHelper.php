<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Domain\Service\Helper;

use Payvision\SDK\Exception\AfterpayErrorException;

class AfterpayErrorMessageHelper
{
    // Error code: 300400800
    public const AGE_IS_UNDER_18 = 'age.under.18';
    public const INCORRECT_ADDRESS = 'incorrect.address';
    public const MAXIMUM_OPEN_ORDERS_REACHED = 'maximum.open.orders.reached';
    public const NO_RESPONSE_FROM_AQUIRER = 'no.response.from.aquirer';
    public const ORDER_IS_NOT_ACCEPTED_BY_AFTERPAY = 'order.is.not.accepted';
    public const TRANSACTION_DECLINED_BY_AUTHORIZATION_SYSTEM = 'transaction.declined';

    // Error code: 300102000
    public const INVALID_EMAIL_ADDRESS = 'invalid.email.address';

    // Error code: 100400030
    public const BILLTO_CITY_MISSING = 'billto.city.missing';
    public const BILLTO_HOUSENUMBER_INVALID = 'billto.housenumber.invalid';
    public const BILLTO_HOUSENUMBER_MISSING = 'billto.housenumber.missing';
    public const BILLTO_HOUSENUMBERADDITION_INVALID = 'billto.housenumberaddition.invalid';
    public const BILLTO_HOUSENUMBERADDITION_MISSING = 'billto.housenumberaddition.missing';
    public const BILLTO_ISOCOUNTRYCODE_INVALID = 'billto.isocountrycode.invalid';
    public const BILLTO_ISOCOUNTRYCODE_MISSING = 'billto.isocountrycode.missing';
    public const BILLTO_ISOLANGUAGE_MISSING = 'billto.isolanguage.missing';
    public const BILLTO_PERSON_DATEOFBIRTH_INVALID = 'billto.person.dateofbirth.invalid';
    public const BILLTO_PERSON_EMAILADDRESS_INVALID = 'billto.person.emailaddress.invalid';
    public const BILLTO_PERSON_EMAILADDRESS_MISSING = 'billto.person.emailaddress.missing';
    public const BILLTO_PERSON_GENDER_INVALID = 'billto.person.gender.invalid';
    public const BILLTO_PERSON_GENDER_MISSING = 'billto.person.gender.missing';
    public const BILLTO_PERSON_INITIALS_INVALID = 'billto.person.initials.invalid';
    public const BILLTO_PERSON_INITIALS_MISSING = 'billto.person.initials.missing';
    public const BILLTO_PERSON_LASTNAME_INVALID = 'billto.person.lastname.invalid';
    public const BILLTO_PERSON_LASTNAME_MISSING = 'billto.person.lastname.missing';
    public const BILLTO_PERSON_PREFIX_INVALID = 'billto.person.prefix.invalid';
    public const BILLTO_PERSON_PREFIX_MISSING = 'billto.person.prefix.missing';
    public const BILLTO_PHONENUMBER1_INVALID = 'billto.phonenumber1.invalid';
    public const BILLTO_PHONENUMBER1_MISSING = 'billto.phonenumber1.missing';
    public const BILLTO_PHONENUMBER2_INVALID = 'billto.phonenumber2.invalid';
    public const BILLTO_PHONENUMBER2_MISSING = 'billto.phonenumber2.missing';
    public const BILLTO_POSTALCODE_INVALID = 'billto.postalcode.invalid';
    public const BILLTO_POSTALCODE_MISSING = 'billto.postalcode.missing';
    public const BILLTO_STREETNAME_MISSING = 'billto.streetname.missing';
    public const SHIPTO_HOUSENUMBER_INVALID = 'shipto.housenumber.invalid';
    public const SHIPTO_HOUSENUMBER_MISSING = 'shipto.housenumber.missing';
    public const SHIPTO_HOUSENUMBERADDITION_INVALID = 'shipto.housenumberaddition.invalid';
    public const SHIPTO_HOUSENUMBERADDITION_MISSING = 'shipto.housenumberaddition.missing';
    public const SHIPTO_ISOCOUNTRYCODE_INVALID = 'shipto.isocountrycode.invalid';
    public const SHIPTO_ISOCOUNTRYCODE_MISSING = 'shipto.isocountrycode.missing';
    public const SHIPTO_ISOLANGUAGE_MISSING = 'shipto.isolanguage.missing';
    public const SHIPTO_PERSON_GENDER_INVALID = 'shipto.person.gender.invalid';
    public const SHIPTO_PERSON_GENDER_MISSING = 'shipto.person.gender.missing';
    public const SHIPTO_PERSON_INITIALS_INVALID = 'shipto.person.initials.invalid';
    public const SHIPTO_PERSON_INITIALS_MISSING = 'shipto.person.initials.missing';
    public const SHIPTO_PERSON_LASTNAME_MISSING = 'shipto.person.lastname.missing';
    public const SHIPTO_PERSON_PREFIX_INVALID = 'shipto.person.prefix.invalid';
    public const SHIPTO_PERSON_PREFIX_MISSING = 'shipto.person.prefix.missing';
    public const SHIPTO_POSTALCODE_INVALID = 'shipto.postalcode.invalid';
    public const SHIPTO_POSTALCODE_MISSING = 'shipto.postalcode.missing';
    public const SHIPTO_STREETNAME_MISSING = 'shipto.streetname.missing';

    protected const FIXED_STRING_MESSAGES = [
        // Error code: 300400800.
        'age is under 18' => self::AGE_IS_UNDER_18,
        'incorrect address' => self::INCORRECT_ADDRESS,
        'maximum open orders reached' => self::MAXIMUM_OPEN_ORDERS_REACHED,
        'no response from aquirer' => self::NO_RESPONSE_FROM_AQUIRER,
        'order is not accepted by afterpay' => self::ORDER_IS_NOT_ACCEPTED_BY_AFTERPAY,
        'transaction declined by authorization system' => self::TRANSACTION_DECLINED_BY_AUTHORIZATION_SYSTEM,

        // Error code: 300102000.
        'invalid e-mail address' => self::INVALID_EMAIL_ADDRESS,
    ];

    /**
     * @param string $errorDetail
     * @return array
     * @throws AfterpayErrorException
     */
    public static function extractMessageCodes(string $errorDetail): array
    {
        $result = [];
        $messages = \explode('|', $errorDetail);
        foreach ($messages as $message) {
            $result[] = self::extractMessageCode(\strtolower(\trim($message)));
        }
        return $result;
    }

    /**
     * @throws AfterpayErrorException
     */
    protected static function extractMessageCode(string $message): string
    {
        if (\array_key_exists($message, self::FIXED_STRING_MESSAGES)) {
            return self::FIXED_STRING_MESSAGES[$message];
        }
        if (\preg_match('/^(field\.)?(?P<code>[a-z]+\.[a-z0-9.]+)/', $message, $matches)) {
            return $matches['code'];
        }
        throw new AfterpayErrorException('Unable to handle Afterpay error code: ' . $message);
    }
}
