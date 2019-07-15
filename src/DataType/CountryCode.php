<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\DataType;

use Payvision\SDK\Exception\DataTypeException;

/**
 * Country codes conform ISO 3166-1 Alpha 2 standard
 *
 * @package Payvision\SDK\DataType
 */
class CountryCode extends AbstractCode implements DataType
{
    const ANDORRA = "AD";
    const UNITED_ARAB_EMIRATES = "AE";
    const AFGHANISTAN = "AF";
    const ANTIGUA_AND_BARBUDA = "AG";
    const ANGUILLA = "AI";
    const ALBANIA = "AL";
    const ARMENIA = "AM";
    const ANGOLA = "AO";
    const ANTARCTICA = "AQ";
    const ARGENTINA = "AR";
    const AMERICAN_SAMOA = "AS";
    const AUSTRIA = "AT";
    const AUSTRALIA = "AU";
    const ARUBA = "AW";
    const ALAND_ISLANDS = "AX";
    const AZERBAIJAN = "AZ";
    const BOSNIA_AND_HERZEGOVINA = "BA";
    const BARBADOS = "BB";
    const BANGLADESH = "BD";
    const BELGIUM = "BE";
    const BURKINA_FASO = "BF";
    const BULGARIA = "BG";
    const BAHRAIN = "BH";
    const BURUNDI = "BI";
    const BENIN = "BJ";
    const SAINT_BARTHELEMY = "BL";
    const BERMUDA = "BM";
    const BRUNEI_DARUSSALAM = "BN";
    const BOLIVIA = "BO";
    const BONAIRE = "BQ";
    const BRAZIL = "BR";
    const BAHAMAS = "BS";
    const BHUTAN = "BT";
    const BOUVET_ISLAND = "BV";
    const BOTSWANA = "BW";
    const BELARUS = "BY";
    const BELIZE = "BZ";
    const CANADA = "CA";
    const COCOS_KEELING_ISLANDS = "CC";
    const CONGO_KINSHANA = "CD";
    const CENTRAL_AFRICAN_REPUBLIC = "CF";
    const CONGO_BRAZZAVILLE = "CG";
    const SWITZERLAND = "CH";
    const COTE_DIVOIRE = "CI";
    const COOK_ISLANDS = "CK";
    const CHILE = "CL";
    const CAMEROON = "CM";
    const CHINA = "CN";
    const COLOMBIA = "CO";
    const COSTA_RICA = "CR";
    const CUBA = "CU";
    const CAPE_VERDE = "CV";
    const CURACAO = "CW";
    const CHRISTMAS_ISLAND = "CX";
    const CYPRUS = "CY";
    const CZECH_REPUBLIC = "CZ";
    const GERMANY = "DE";
    const DJIBOUTI = "DJ";
    const DENMARK = "DK";
    const DOMINICA = "DM";
    const DOMINICAN_REPUBLIC = "DO";
    const ALGERIA = "DZ";
    const ECUADOR = "EC";
    const ESTONIA = "EE";
    const EGYPT = "EG";
    const WESTERN_SAHARA = "EH";
    const ERITREA = "ER";
    const SPAIN = "ES";
    const ETHIOPIA = "ET";
    const FINLAND = "FI";
    const FIJI = "FJ";
    const FALKLAND_ISLANDS_MALVINAS = "FK";
    const MICRONESIA = "FM";
    const FAROE_ISLANDS = "FO";
    const FRANCE = "FR";
    const GABON = "GA";
    const UNITED_KINGDOM = "GB";
    const GRENADA = "GD";
    const GEORGIA = "GE";
    const FRENCH_GUIANA = "GF";
    const GUERNSEY = "GG";
    const GHANA = "GH";
    const GIBRALTAR = "GI";
    const GREENLAND = "GL";
    const GAMBIA = "GM";
    const GUINEA = "GN";
    const GUADELOUPE = "GP";
    const EQUATORIAL_GUINEA = "GQ";
    const GREECE = "GR";
    const SOUTH_GEORGIA_AND_THE_SOUTH_SANDWICH_ISLANDS = "GS";
    const GUATEMALA = "GT";
    const GUAM = "GU";
    const GUINEA_BISSAU = "GW";
    const GUYANA = "GY";
    const HONG_KONG = "HK";
    const HEARD_ISLAND_AND_MCDONALD_ISLANDS = "HM";
    const HONDURAS = "HN";
    const CROATIA = "HR";
    const HAITI = "HT";
    const HUNGARY = "HU";
    const INDONESIA = "ID";
    const IRELAND = "IE";
    const ISRAEL = "IL";
    const ISLE_OF_MAN = "IM";
    const INDIA = "IN";
    const BRITISH_INDIAN_OCEAN_TERRITORY = "IO";
    const IRAQ = "IQ";
    const IRAN_ISLAMIC_REPUBLIC_OF = "IR";
    const ICELAND = "IS";
    const ITALY = "IT";
    const JERSEY = "JE";
    const JAMAICA = "JM";
    const JORDAN = "JO";
    const JAPAN = "JP";
    const KENYA = "KE";
    const KYRGYZSTAN = "KG";
    const CAMBODIA = "KH";
    const KIRIBATI = "KI";
    const COMOROS = "KM";
    const SAINT_KITTS_AND_NEVIS = "KN";
    const KOREA_DEMOCRATIC_PEOPLES_REPUBLIC_OF = "KP";
    const KOREA_REPUBLIC_OF = "KR";
    const KUWAIT = "KW";
    const CAYMAN_ISLANDS = "KY";
    const KAZAKHSTAN = "KZ";
    const LAO_PEOPLES_DEMOCRATIC_REPUBLIC = "LA";
    const LEBANON = "LB";
    const SAINT_LUCIA = "LC";
    const LIECHTENSTEIN = "LI";
    const SRI_LANKA = "LK";
    const LIBERIA = "LR";
    const LESOTHO = "LS";
    const LITHUANIA = "LT";
    const LUXEMBOURG = "LU";
    const LATVIA = "LV";
    const LIBYA = "LY";
    const MOROCCO = "MA";
    const MONACO = "MC";
    const MOLDOVA_REPUBLIC_OF = "MD";
    const MONTENEGRO = "ME";
    const SAINT_MARTIN_FRENCH_PART = "MF";
    const MADAGASCAR = "MG";
    const MARSHALL_ISLANDS = "MH";
    const MACEDONIA_THE_FORMER_YUGOSLAV_REPUBLIC_OF = "MK";
    const MALI = "ML";
    const MYANMAR = "MM";
    const MONGOLIA = "MN";
    const MACAO = "MO";
    const NORTHERN_MARIANA_ISLANDS = "MP";
    const MARTINIQUE = "MQ";
    const MAURITANIA = "MR";
    const MONTSERRAT = "MS";
    const MALTA = "MT";
    const MAURITIUS = "MU";
    const MALDIVES = "MV";
    const MALAWI = "MW";
    const MEXICO = "MX";
    const MALAYSIA = "MY";
    const MOZAMBIQUE = "MZ";
    const NAMIBIA = "NA";
    const NEW_CALEDONIA = "NC";
    const NIGER = "NE";
    const NORFOLK_ISLAND = "NF";
    const NIGERIA = "NG";
    const NICARAGUA = "NI";
    const NETHERLANDS = "NL";
    const NORWAY = "NO";
    const NEPAL = "NP";
    const NAURU = "NR";
    const NIUE = "NU";
    const NEW_ZEALAND = "NZ";
    const OMAN = "OM";
    const PANAMA = "PA";
    const PERU = "PE";
    const FRENCH_POLYNESIA = "PF";
    const PAPUA_NEW_GUINEA = "PG";
    const PHILIPPINES = "PH";
    const PAKISTAN = "PK";
    const POLAND = "PL";
    const SAINT_PIERRE_AND_MIQUELON = "PM";
    const PITCAIRN = "PN";
    const PUERTO_RICO = "PR";
    const PALESTINE_STATE_OF = "PS";
    const PORTUGAL = "PT";
    const PALAU = "PW";
    const PARAGUAY = "PY";
    const QATAR = "QA";
    const REUNION = "RE";
    const ROMANIA = "RO";
    const SERBIA = "RS";
    const RUSSIAN_FEDERATION = "RU";
    const RWANDA = "RW";
    const SAUDI_ARABIA = "SA";
    const SOLOMON_ISLANDS = "SB";
    const SEYCHELLES = "SC";
    const SUDAN = "SD";
    const SWEDEN = "SE";
    const SINGAPORE = "SG";
    const SAINT_HELENA_ASCENSION_AND_TRISTAN_DA_CUNHA = "SH";
    const SLOVENIA = "SI";
    const SVALBARD_AND_JAN_MAYEN = "SJ";
    const SLOVAKIA = "SK";
    const SIERRA_LEONE = "SL";
    const SAN_MARINO = "SM";
    const SENEGAL = "SN";
    const SOMALIA = "SO";
    const SURINAME = "SR";
    const SOUTH_SUDAN = "SS";
    const SAO_TOME_AND_PRINCIPE = "ST";
    const EL_SALVADOR = "SV";
    const SINT_MAARTEN_DUTCH_PART = "SX";
    const SYRIAN_ARAB_REPUBLIC = "SY";
    const SWAZILAND = "SZ";
    const TURKS_AND_CAICOS_ISLANDS = "TC";
    const CHAD = "TD";
    const FRENCH_SOUTHERN_TERRITORIES = "TF";
    const TOGO = "TG";
    const THAILAND = "TH";
    const TAJIKISTAN = "TJ";
    const TOKELAU = "TK";
    const TIMOR_LESTE = "TL";
    const TURKMENISTAN = "TM";
    const TUNISIA = "TN";
    const TONGA = "TO";
    const TURKEY = "TR";
    const TRINIDAD_AND_TOBAGO = "TT";
    const TUVALU = "TV";
    const TAIWAN_PROVINCE_OF_CHINA = "TW";
    const TANZANIA_UNITED_REPUBLIC_OF = "TZ";
    const UKRAINE = "UA";
    const UGANDA = "UG";
    const UNITED_STATES_MINOR_OUTLYING_ISLANDS = "UM";
    const UNITED_STATES = "US";
    const URUGUAY = "UY";
    const UZBEKISTAN = "UZ";
    const HOLY_SEE_VATICAN_CITY_STATE = "VA";
    const SAINT_VINCENT_AND_THE_GRENADINES = "VC";
    const VENEZUELA_BOLIVARIAN_REPUBLIC_OF = "VE";
    const VIRGIN_ISLANDS_BRITISH = "VG";
    const VIRGIN_ISLANDS_US = "VI";
    const VIET_NAM = "VN";
    const VANUATU = "VU";
    const WALLIS_AND_FUTUNA = "WF";
    const SAMOA = "WS";
    const YEMEN = "YE";
    const MAYOTTE = "YT";
    const SOUTH_AFRICA = "ZA";
    const ZAMBIA = "ZM";
    const ZIMBABWE = "ZW";

    /**
     * @var string
     */
    protected $countryCode;

    /**
     * CurrencyCode constructor.
     *
     * @param string $countryCode
     * @throws DataTypeException
     */
    public function __construct(string $countryCode = null)
    {
        $this->set($countryCode);
    }

    /**
     * @param string $countryCode
     * @throws DataTypeException
     * @return null
     */
    public function set(string $countryCode = null)
    {
        if ($countryCode !== null && !\array_key_exists($countryCode, $this->getConstants())) {
            throw new DataTypeException(
                'Unknown country: ' . $countryCode,
                DataTypeException::UNKNOWN_COUNTRY
            );
        }

        $this->countryCode = $countryCode;
    }

    // phpcs:disable SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint

    /**
     * @return string|null
     */
    public function get()
    {
        return $this->countryCode;
    }
    // phpcs:enable SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint
}
