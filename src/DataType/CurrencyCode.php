<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
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
    public const UAE_DIRHAM = "AED";
    public const AFGHANI = "AFN";
    public const ALBANIAN_LEK = "ALL";
    public const ARMENIAN_DRAM = "AMD";
    public const NETHERLANDS_ANTILLIAN_GUILDER = "ANG";
    public const KWANZA = "AOA";
    public const ARGENTINE_PESO = "ARS";
    public const AUSTRALIAN_DOLLAR = "AUD";
    public const ARUBAN_GUILDER = "AWG";
    public const AZERBAIJANIAN_NEW_MANAT = "AZN";
    public const CONVERTIBLE_MARKS = "BAM";
    public const BARBADOS_DOLLAR = "BBD";
    public const TAKA = "BDT";
    public const BULGARIAN_LEV = "BGN";
    public const BAHRAINI_DINAR = "BHD";
    public const BURUNDI_FRANC = "BIF";
    public const BERMUDA_DOLLAR = "BMD";
    public const BRUNEI_DOLLAR = "BND";
    public const BOLIVIANO = "BOB";
    public const MVDOL = "BOV";
    public const BRAZILIAN_REAL = "BRL";
    public const BAHAMIAN_DOLLAR = "BSD";
    public const NGULTRUM = "BTN";
    public const PULA = "BWP";
    public const BELARUSSIAN_RUBLE = "BYN";
    public const BELIZE_DOLLAR = "BZD";
    public const CANADIAN_DOLLAR = "CAD";
    public const CONGO_FRANCS = "CDF";
    public const SWISS_FRANC = "CHF";
    public const UNIDADES_DE_FOMENTO = "CLF";
    public const CHILEAN_PESO = "CLP";
    public const YUAN_RENMINBI = "CNY";
    public const COLOMBIAN_PESO = "COP";
    public const COSTA_RICAN_COLON = "CRC";
    public const CUBAN_CONVERTIBLE_PESO = "CUC";
    public const CUBAN_PESO = "CUP";
    public const CAPE_VERDE_ESCUDO = "CVE";
    public const CZECH_KORUNA = "CZK";
    public const DJIBOUTI_FRANC = "DJF";
    public const DANISH_KRONE = "DKK";
    public const DOMINICAN_PESO = "DOP";
    public const ALGERIAN_DINAR = "DZD";
    public const EGYPTIAN_POUND = "EGP";
    public const NAKFA = "ERN";
    public const ETHIOPIAN_BIRR = "ETB";
    public const EURO = "EUR";
    public const FIJI_DOLLAR = "FJD";
    public const FALKLAND_ISLANDS_POUND = "FKP";
    public const POUND_STERLING = "GBP";
    public const GEORGIAN_LARI = "GEL";
    public const GHANA_CEDI = "GHS";
    public const GIBRALTAR_POUND = "GIP";
    public const DALASI = "GMD";
    public const GUINEA_FRANC = "GNF";
    public const QUETZAL = "GTQ";
    public const GUYANA_DOLLAR = "GYD";
    public const HONG_KONG_DOLLAR = "HKD";
    public const LEMPIRA = "HNL";
    public const KUNA = "HRK";
    public const GOURDE = "HTG";
    public const FORINT = "HUF";
    public const RUPIAH = "IDR";
    public const SHEKEL = "ILS";
    public const INDIAN_RUPEE = "INR";
    public const IRAQI_DINAR = "IQD";
    public const IRANIAN_RIAL = "IRR";
    public const ICELAND_KRONA = "ISK";
    public const JAMAICAN_DOLLAR = "JMD";
    public const JORDANIAN_DINAR = "JOD";
    public const YEN = "JPY";
    public const KENYAN_SHILLING = "KES";
    public const SOM = "KGS";
    public const RIEL = "KHR";
    public const COMORO_FRANC = "KMF";
    public const NORTH_KOREAN_WON = "KPW";
    public const KOREAN_WON = "KRW";
    public const KUWAITI_DINAR = "KWD";
    public const CAYMAN_ISLANDS_DOLLAR = "KYD";
    public const KAZAKHSTANIAN_TENGE = "KZT";
    public const KIP = "LAK";
    public const LEBANESE_POUND = "LBP";
    public const SRI_LANKA_RUPEE = "LKR";
    public const LIBERIAN_DOLLAR = "LRD";
    public const LOTI = "LSL";
    public const LIBYAN_DINAR = "LYD";
    public const MOROCCAN_DIRHAM = "MAD";
    public const MOLDOVAN_LEU = "MDL";
    public const MALAGASY_AGIARY = "MGA";
    public const MACEDONIAN_DENAR = "MKD";
    public const KYAT = "MMK";
    public const TUGRIK = "MNT";
    public const PATACA = "MOP";
    public const OUGUIYA = "MRU";
    public const MAURITIUS_RUPEE = "MUR";
    public const RUFIYAA = "MVR";
    public const KWACHA = "MWK";
    public const MEXICAN_PESO = "MXN";
    public const MALAYSIAN_RINGGIT = "MYR";
    public const METICAL = "MZN";
    public const NAMIBIAN_DOLLAR = "NAD";
    public const NAIRA = "NGN";
    public const CORDOBA_ORO = "NIO";
    public const NORWEGIAN_KRONE = "NOK";
    public const NEPALESE_RUPEE = "NPR";
    public const NEW_ZEALAND_DOLLAR = "NZD";
    public const RIAL_OMANI = "OMR";
    public const BALBOA = "PAB";
    public const NUEVO_SOL = "PEN";
    public const KINA = "PGK";
    public const PHILIPPINE_PESO = "PHP";
    public const PAKISTAN_RUPEE = "PKR";
    public const ZLOTY = "PLN";
    public const GUARANI = "PYG";
    public const QATARI_RIAL = "QAR";
    public const ROMANIAN_LEU = "RON";
    public const SERBIAN_DINAR = "RSD";
    public const RUSSIAN_RUBLE = "RUB";
    public const RWANDA_FRANC = "RWF";
    public const SAUDI_RIYAL = "SAR";
    public const SOLOMON_ISLANDS_DOLLAR = "SBD";
    public const SEYCHELLES_RUPEE = "SCR";
    public const SUDANESE_POUND = "SDG";
    public const SWEDISH_KRONA = "SEK";
    public const SINGAPORE_DOLLAR = "SGD";
    public const SAINT_HELENA_POUND = "SHP";
    public const LEONE = "SLL";
    public const SOMALI_SHILLING = "SOS";
    public const SURINAM_DOLLAR = "SRD";
    public const SOUTH_SUDANESE_POUND = "SSP";
    public const DOBRA = "STN";
    public const EL_SALVADOR_COLON = "SVC";
    public const SYRIAN_POUND = "SYP";
    public const LILANGENI = "SZL";
    public const BAHT = "THB";
    public const SOMONI = "TJS";
    public const TURKMENISTANI_MANAT = "TMT";
    public const TUNISIAN_DINAR = "TND";
    public const PAANGA = "TOP";
    public const NEW_TURKISH_LIRA = "TRY";
    public const TRINIDAD_AND_TOBAGO_DOLLAR = "TTD";
    public const NEW_TAIWAN_DOLLAR = "TWD";
    public const TANZANIAN_SHILLING = "TZS";
    public const UKRAINIAN_HRYVNA = "UAH";
    public const UGANDA_SHILLING = "UGX";
    public const US_DOLLAR = "USD";
    public const URUGUAYAN_PESO = "UYU";
    public const UZBEKISTAN_SUM = "UZS";
    public const VENEZUELAN_BOLIVAR_FUERTE = "VEF";
    public const DONG = "VND";
    public const VATU = "VUV";
    public const TALA = "WST";
    public const CFA_FRANC_BEAC = "XAF";
    public const EAST_CARIBBEAN_DOLLAR = "XCD";
    public const SDR_SPECIAL_DRAWING_RIGHT = "XDR";
    public const CFA_FRANC_BCEAO = "XOF";
    public const CFP_FRANC = "XPF";
    public const YEMENI_RIAL = "YER";
    public const SOUTH_AFRICAN_RAND = "ZAR";
    public const ZAMBIA_KWACHA = "ZMW";
    public const ZIMBABWE_DOLLAR = "ZWL";

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
     */
    public function set(string $currencyCode = null): void
    {
        if ($currencyCode !== null && !\array_key_exists($currencyCode, $this->getConstants())) {
            throw new DataTypeException(
                'Unknown currency: ' . $currencyCode,
                DataTypeException::UNKNOWN_CURRENCY
            );
        }

        $this->currencyCode = $currencyCode;
    }

    /**
     * @return string|null
     */
    public function get(): ?string
    {
        return $this->currencyCode;
    }
}
