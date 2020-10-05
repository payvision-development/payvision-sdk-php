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
    const AGE_IS_UNDER_18 = 'age.under.18';
    const INCORRECT_ADDRESS = 'incorrect.address';
    const MAXIMUM_OPEN_ORDERS_REACHED = 'maximum.open.orders.reached';
    const NO_RESPONSE_FROM_AQUIRER = 'no.response.from.aquirer';
    const ORDER_IS_NOT_ACCEPTED_BY_AFTERPAY = 'order.is.not.accepted';
    const TRANSACTION_DECLINED_BY_AUTHORIZATION_SYSTEM = 'transaction.declined';

    // Error code: 300102000
    const INVALID_EMAIL_ADDRESS = 'invalid.email.address';

    // Error code: 100400030
    const BILLTO_CITY_MISSING = 'billto.city.missing';
    const BILLTO_HOUSENUMBER_INVALID = 'billto.housenumber.invalid';
    const BILLTO_HOUSENUMBER_MISSING = 'billto.housenumber.missing';
    const BILLTO_HOUSENUMBERADDITION_INVALID = 'billto.housenumberaddition.invalid';
    const BILLTO_HOUSENUMBERADDITION_MISSING = 'billto.housenumberaddition.missing';
    const BILLTO_ISOCOUNTRYCODE_INVALID = 'billto.isocountrycode.invalid';
    const BILLTO_ISOCOUNTRYCODE_MISSING = 'billto.isocountrycode.missing';
    const BILLTO_ISOLANGUAGE_MISSING = 'billto.isolanguage.missing';
    const BILLTO_PERSON_DATEOFBIRTH_INVALID = 'billto.person.dateofbirth.invalid';
    const BILLTO_PERSON_EMAILADDRESS_INVALID = 'billto.person.emailaddress.invalid';
    const BILLTO_PERSON_EMAILADDRESS_MISSING = 'billto.person.emailaddress.missing';
    const BILLTO_PERSON_GENDER_INVALID = 'billto.person.gender.invalid';
    const BILLTO_PERSON_GENDER_MISSING = 'billto.person.gender.missing';
    const BILLTO_PERSON_INITIALS_INVALID = 'billto.person.initials.invalid';
    const BILLTO_PERSON_INITIALS_MISSING = 'billto.person.initials.missing';
    const BILLTO_PERSON_LASTNAME_INVALID = 'billto.person.lastname.invalid';
    const BILLTO_PERSON_LASTNAME_MISSING = 'billto.person.lastname.missing';
    const BILLTO_PERSON_PREFIX_INVALID = 'billto.person.prefix.invalid';
    const BILLTO_PERSON_PREFIX_MISSING = 'billto.person.prefix.missing';
    const BILLTO_PHONENUMBER1_INVALID = 'billto.phonenumber1.invalid';
    const BILLTO_PHONENUMBER1_MISSING = 'billto.phonenumber1.missing';
    const BILLTO_PHONENUMBER2_INVALID = 'billto.phonenumber2.invalid';
    const BILLTO_PHONENUMBER2_MISSING = 'billto.phonenumber2.missing';
    const BILLTO_POSTALCODE_INVALID = 'billto.postalcode.invalid';
    const BILLTO_POSTALCODE_MISSING = 'billto.postalcode.missing';
    const BILLTO_STREETNAME_MISSING = 'billto.streetname.missing';
    const SHIPTO_HOUSENUMBER_INVALID = 'shipto.housenumber.invalid';
    const SHIPTO_HOUSENUMBER_MISSING = 'shipto.housenumber.missing';
    const SHIPTO_HOUSENUMBERADDITION_INVALID = 'shipto.housenumberaddition.invalid';
    const SHIPTO_HOUSENUMBERADDITION_MISSING = 'shipto.housenumberaddition.missing';
    const SHIPTO_ISOCOUNTRYCODE_INVALID = 'shipto.isocountrycode.invalid';
    const SHIPTO_ISOCOUNTRYCODE_MISSING = 'shipto.isocountrycode.missing';
    const SHIPTO_ISOLANGUAGE_MISSING = 'shipto.isolanguage.missing';
    const SHIPTO_PERSON_GENDER_INVALID = 'shipto.person.gender.invalid';
    const SHIPTO_PERSON_GENDER_MISSING = 'shipto.person.gender.missing';
    const SHIPTO_PERSON_INITIALS_INVALID = 'shipto.person.initials.invalid';
    const SHIPTO_PERSON_INITIALS_MISSING = 'shipto.person.initials.missing';
    const SHIPTO_PERSON_LASTNAME_MISSING = 'shipto.person.lastname.missing';
    const SHIPTO_PERSON_PREFIX_INVALID = 'shipto.person.prefix.invalid';
    const SHIPTO_PERSON_PREFIX_MISSING = 'shipto.person.prefix.missing';
    const SHIPTO_POSTALCODE_INVALID = 'shipto.postalcode.invalid';
    const SHIPTO_POSTALCODE_MISSING = 'shipto.postalcode.missing';
    const SHIPTO_STREETNAME_MISSING = 'shipto.streetname.missing';

    const FIXED_STRING_MESSAGES = [
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
