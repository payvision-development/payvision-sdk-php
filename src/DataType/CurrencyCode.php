<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\DataType;

use Payvision\SDK\Exception\DataTypeException;

/**
 * Currency codes conform ISO 4217-Alpha 3 standard
 *
 * @package Payvision\SDK\DataType
 */
class CurrencyCode extends AbstractCode implements DataType
{
    const UAE_DIRHAM = "AED";
    const AFGHANI = "AFN";
    const ALBANIAN_LEK = "ALL";
    const ARMENIAN_DRAM = "AMD";
    const NETHERLANDS_ANTILLIAN_GUILDER = "ANG";
    const KWANZA = "AOA";
    const ARGENTINE_PESO = "ARS";
    const AUSTRALIAN_DOLLAR = "AUD";
    const ARUBAN_GUILDER = "AWG";
    const AZERBAIJANIAN_NEW_MANAT = "AZN";
    const CONVERTIBLE_MARKS = "BAM";
    const BARBADOS_DOLLAR = "BBD";
    const TAKA = "BDT";
    const BULGARIAN_LEV = "BGN";
    const BAHRAINI_DINAR = "BHD";
    const BURUNDI_FRANC = "BIF";
    const BERMUDA_DOLLAR = "BMD";
    const BRUNEI_DOLLAR = "BND";
    const BOLIVIANO = "BOB";
    const MVDOL = "BOV";
    const BRAZILIAN_REAL = "BRL";
    const BAHAMIAN_DOLLAR = "BSD";
    const NGULTRUM = "BTN";
    const PULA = "BWP";
    const BELARUSSIAN_RUBLE = "BYN";
    const BELIZE_DOLLAR = "BZD";
    const CANADIAN_DOLLAR = "CAD";
    const CONGO_FRANCS = "CDF";
    const SWISS_FRANC = "CHF";
    const UNIDADES_DE_FOMENTO = "CLF";
    const CHILEAN_PESO = "CLP";
    const YUAN_RENMINBI = "CNY";
    const COLOMBIAN_PESO = "COP";
    const COSTA_RICAN_COLON = "CRC";
    const CUBAN_CONVERTIBLE_PESO = "CUC";
    const CUBAN_PESO = "CUP";
    const CAPE_VERDE_ESCUDO = "CVE";
    const CZECH_KORUNA = "CZK";
    const DJIBOUTI_FRANC = "DJF";
    const DANISH_KRONE = "DKK";
    const DOMINICAN_PESO = "DOP";
    const ALGERIAN_DINAR = "DZD";
    const EGYPTIAN_POUND = "EGP";
    const NAKFA = "ERN";
    const ETHIOPIAN_BIRR = "ETB";
    const EURO = "EUR";
    const FIJI_DOLLAR = "FJD";
    const FALKLAND_ISLANDS_POUND = "FKP";
    const POUND_STERLING = "GBP";
    const GEORGIAN_LARI = "GEL";
    const GHANA_CEDI = "GHS";
    const GIBRALTAR_POUND = "GIP";
    const DALASI = "GMD";
    const GUINEA_FRANC = "GNF";
    const QUETZAL = "GTQ";
    const GUYANA_DOLLAR = "GYD";
    const HONG_KONG_DOLLAR = "HKD";
    const LEMPIRA = "HNL";
    const KUNA = "HRK";
    const GOURDE = "HTG";
    const FORINT = "HUF";
    const RUPIAH = "IDR";
    const SHEKEL = "ILS";
    const INDIAN_RUPEE = "INR";
    const IRAQI_DINAR = "IQD";
    const IRANIAN_RIAL = "IRR";
    const ICELAND_KRONA = "ISK";
    const JAMAICAN_DOLLAR = "JMD";
    const JORDANIAN_DINAR = "JOD";
    const YEN = "JPY";
    const KENYAN_SHILLING = "KES";
    const SOM = "KGS";
    const RIEL = "KHR";
    const COMORO_FRANC = "KMF";
    const NORTH_KOREAN_WON = "KPW";
    const KOREAN_WON = "KRW";
    const KUWAITI_DINAR = "KWD";
    const CAYMAN_ISLANDS_DOLLAR = "KYD";
    const KAZAKHSTANIAN_TENGE = "KZT";
    const KIP = "LAK";
    const LEBANESE_POUND = "LBP";
    const SRI_LANKA_RUPEE = "LKR";
    const LIBERIAN_DOLLAR = "LRD";
    const LOTI = "LSL";
    const LIBYAN_DINAR = "LYD";
    const MOROCCAN_DIRHAM = "MAD";
    const MOLDOVAN_LEU = "MDL";
    const MALAGASY_AGIARY = "MGA";
    const MACEDONIAN_DENAR = "MKD";
    const KYAT = "MMK";
    const TUGRIK = "MNT";
    const PATACA = "MOP";
    const OUGUIYA = "MRU";
    const MAURITIUS_RUPEE = "MUR";
    const RUFIYAA = "MVR";
    const KWACHA = "MWK";
    const MEXICAN_PESO = "MXN";
    const MALAYSIAN_RINGGIT = "MYR";
    const METICAL = "MZN";
    const NAMIBIAN_DOLLAR = "NAD";
    const NAIRA = "NGN";
    const CORDOBA_ORO = "NIO";
    const NORWEGIAN_KRONE = "NOK";
    const NEPALESE_RUPEE = "NPR";
    const NEW_ZEALAND_DOLLAR = "NZD";
    const RIAL_OMANI = "OMR";
    const BALBOA = "PAB";
    const NUEVO_SOL = "PEN";
    const KINA = "PGK";
    const PHILIPPINE_PESO = "PHP";
    const PAKISTAN_RUPEE = "PKR";
    const ZLOTY = "PLN";
    const GUARANI = "PYG";
    const QATARI_RIAL = "QAR";
    const ROMANIAN_LEU = "RON";
    const SERBIAN_DINAR = "RSD";
    const RUSSIAN_RUBLE = "RUB";
    const RWANDA_FRANC = "RWF";
    const SAUDI_RIYAL = "SAR";
    const SOLOMON_ISLANDS_DOLLAR = "SBD";
    const SEYCHELLES_RUPEE = "SCR";
    const SUDANESE_POUND = "SDG";
    const SWEDISH_KRONA = "SEK";
    const SINGAPORE_DOLLAR = "SGD";
    const SAINT_HELENA_POUND = "SHP";
    const LEONE = "SLL";
    const SOMALI_SHILLING = "SOS";
    const SURINAM_DOLLAR = "SRD";
    const SOUTH_SUDANESE_POUND = "SSP";
    const DOBRA = "STN";
    const EL_SALVADOR_COLON = "SVC";
    const SYRIAN_POUND = "SYP";
    const LILANGENI = "SZL";
    const BAHT = "THB";
    const SOMONI = "TJS";
    const TURKMENISTANI_MANAT = "TMT";
    const TUNISIAN_DINAR = "TND";
    const PAANGA = "TOP";
    const NEW_TURKISH_LIRA = "TRY";
    const TRINIDAD_AND_TOBAGO_DOLLAR = "TTD";
    const NEW_TAIWAN_DOLLAR = "TWD";
    const TANZANIAN_SHILLING = "TZS";
    const UKRAINIAN_HRYVNA = "UAH";
    const UGANDA_SHILLING = "UGX";
    const US_DOLLAR = "USD";
    const URUGUAYAN_PESO = "UYU";
    const UZBEKISTAN_SUM = "UZS";
    const VENEZUELAN_BOLIVAR_FUERTE = "VEF";
    const DONG = "VND";
    const VATU = "VUV";
    const TALA = "WST";
    const CFA_FRANC_BEAC = "XAF";
    const EAST_CARIBBEAN_DOLLAR = "XCD";
    const SDR_SPECIAL_DRAWING_RIGHT = "XDR";
    const CFA_FRANC_BCEAO = "XOF";
    const CFP_FRANC = "XPF";
    const YEMENI_RIAL = "YER";
    const SOUTH_AFRICAN_RAND = "ZAR";
    const ZAMBIA_KWACHA = "ZMW";
    const ZIMBABWE_DOLLAR = "ZWL";

    /**
     * @var string
     */
    protected $currencyCode;

    /**
     * CurrencyCode constructor.
     *
     * @param string $currencyCode
     * @throws DataTypeException
     */
    public function __construct(string $currencyCode = null)
    {
        $this->set($currencyCode);
    }

    /**
     * @param string $currencyCode
     * @throws DataTypeException
     * @return null
     */
    public function set(string $currencyCode = null)
    {
        if ($currencyCode !== null && !\array_key_exists($currencyCode, $this->getConstants())) {
            throw new DataTypeException(
                'Unknown currency: ' . $currencyCode,
                DataTypeException::UNKNOWN_CURRENCY
            );
        }

        $this->currencyCode = $currencyCode;
    }

    // phpcs:disable SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint

    /**
     * @return string|null
     */
    public function get()
    {
        return $this->currencyCode;
    }
    // phpcs:enable SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint
}
