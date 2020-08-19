<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
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
    public const ANDORRA = "AD";
    public const UNITED_ARAB_EMIRATES = "AE";
    public const AFGHANISTAN = "AF";
    public const ANTIGUA_AND_BARBUDA = "AG";
    public const ANGUILLA = "AI";
    public const ALBANIA = "AL";
    public const ARMENIA = "AM";
    public const ANGOLA = "AO";
    public const ANTARCTICA = "AQ";
    public const ARGENTINA = "AR";
    public const AMERICAN_SAMOA = "AS";
    public const AUSTRIA = "AT";
    public const AUSTRALIA = "AU";
    public const ARUBA = "AW";
    public const ALAND_ISLANDS = "AX";
    public const AZERBAIJAN = "AZ";
    public const BOSNIA_AND_HERZEGOVINA = "BA";
    public const BARBADOS = "BB";
    public const BANGLADESH = "BD";
    public const BELGIUM = "BE";
    public const BURKINA_FASO = "BF";
    public const BULGARIA = "BG";
    public const BAHRAIN = "BH";
    public const BURUNDI = "BI";
    public const BENIN = "BJ";
    public const SAINT_BARTHELEMY = "BL";
    public const BERMUDA = "BM";
    public const BRUNEI_DARUSSALAM = "BN";
    public const BOLIVIA = "BO";
    public const BONAIRE = "BQ";
    public const BRAZIL = "BR";
    public const BAHAMAS = "BS";
    public const BHUTAN = "BT";
    public const BOUVET_ISLAND = "BV";
    public const BOTSWANA = "BW";
    public const BELARUS = "BY";
    public const BELIZE = "BZ";
    public const CANADA = "CA";
    public const COCOS_KEELING_ISLANDS = "CC";
    public const CONGO_KINSHANA = "CD";
    public const CENTRAL_AFRICAN_REPUBLIC = "CF";
    public const CONGO_BRAZZAVILLE = "CG";
    public const SWITZERLAND = "CH";
    public const COTE_DIVOIRE = "CI";
    public const COOK_ISLANDS = "CK";
    public const CHILE = "CL";
    public const CAMEROON = "CM";
    public const CHINA = "CN";
    public const COLOMBIA = "CO";
    public const COSTA_RICA = "CR";
    public const CUBA = "CU";
    public const CAPE_VERDE = "CV";
    public const CURACAO = "CW";
    public const CHRISTMAS_ISLAND = "CX";
    public const CYPRUS = "CY";
    public const CZECH_REPUBLIC = "CZ";
    public const GERMANY = "DE";
    public const DJIBOUTI = "DJ";
    public const DENMARK = "DK";
    public const DOMINICA = "DM";
    public const DOMINICAN_REPUBLIC = "DO";
    public const ALGERIA = "DZ";
    public const ECUADOR = "EC";
    public const ESTONIA = "EE";
    public const EGYPT = "EG";
    public const WESTERN_SAHARA = "EH";
    public const ERITREA = "ER";
    public const SPAIN = "ES";
    public const ETHIOPIA = "ET";
    public const FINLAND = "FI";
    public const FIJI = "FJ";
    public const FALKLAND_ISLANDS_MALVINAS = "FK";
    public const MICRONESIA = "FM";
    public const FAROE_ISLANDS = "FO";
    public const FRANCE = "FR";
    public const GABON = "GA";
    public const UNITED_KINGDOM = "GB";
    public const GRENADA = "GD";
    public const GEORGIA = "GE";
    public const FRENCH_GUIANA = "GF";
    public const GUERNSEY = "GG";
    public const GHANA = "GH";
    public const GIBRALTAR = "GI";
    public const GREENLAND = "GL";
    public const GAMBIA = "GM";
    public const GUINEA = "GN";
    public const GUADELOUPE = "GP";
    public const EQUATORIAL_GUINEA = "GQ";
    public const GREECE = "GR";
    public const SOUTH_GEORGIA_AND_THE_SOUTH_SANDWICH_ISLANDS = "GS";
    public const GUATEMALA = "GT";
    public const GUAM = "GU";
    public const GUINEA_BISSAU = "GW";
    public const GUYANA = "GY";
    public const HONG_KONG = "HK";
    public const HEARD_ISLAND_AND_MCDONALD_ISLANDS = "HM";
    public const HONDURAS = "HN";
    public const CROATIA = "HR";
    public const HAITI = "HT";
    public const HUNGARY = "HU";
    public const INDONESIA = "ID";
    public const IRELAND = "IE";
    public const ISRAEL = "IL";
    public const ISLE_OF_MAN = "IM";
    public const INDIA = "IN";
    public const BRITISH_INDIAN_OCEAN_TERRITORY = "IO";
    public const IRAQ = "IQ";
    public const IRAN_ISLAMIC_REPUBLIC_OF = "IR";
    public const ICELAND = "IS";
    public const ITALY = "IT";
    public const JERSEY = "JE";
    public const JAMAICA = "JM";
    public const JORDAN = "JO";
    public const JAPAN = "JP";
    public const KENYA = "KE";
    public const KYRGYZSTAN = "KG";
    public const CAMBODIA = "KH";
    public const KIRIBATI = "KI";
    public const COMOROS = "KM";
    public const SAINT_KITTS_AND_NEVIS = "KN";
    public const KOREA_DEMOCRATIC_PEOPLES_REPUBLIC_OF = "KP";
    public const KOREA_REPUBLIC_OF = "KR";
    public const KUWAIT = "KW";
    public const CAYMAN_ISLANDS = "KY";
    public const KAZAKHSTAN = "KZ";
    public const LAO_PEOPLES_DEMOCRATIC_REPUBLIC = "LA";
    public const LEBANON = "LB";
    public const SAINT_LUCIA = "LC";
    public const LIECHTENSTEIN = "LI";
    public const SRI_LANKA = "LK";
    public const LIBERIA = "LR";
    public const LESOTHO = "LS";
    public const LITHUANIA = "LT";
    public const LUXEMBOURG = "LU";
    public const LATVIA = "LV";
    public const LIBYA = "LY";
    public const MOROCCO = "MA";
    public const MONACO = "MC";
    public const MOLDOVA_REPUBLIC_OF = "MD";
    public const MONTENEGRO = "ME";
    public const SAINT_MARTIN_FRENCH_PART = "MF";
    public const MADAGASCAR = "MG";
    public const MARSHALL_ISLANDS = "MH";
    public const MACEDONIA_THE_FORMER_YUGOSLAV_REPUBLIC_OF = "MK";
    public const MALI = "ML";
    public const MYANMAR = "MM";
    public const MONGOLIA = "MN";
    public const MACAO = "MO";
    public const NORTHERN_MARIANA_ISLANDS = "MP";
    public const MARTINIQUE = "MQ";
    public const MAURITANIA = "MR";
    public const MONTSERRAT = "MS";
    public const MALTA = "MT";
    public const MAURITIUS = "MU";
    public const MALDIVES = "MV";
    public const MALAWI = "MW";
    public const MEXICO = "MX";
    public const MALAYSIA = "MY";
    public const MOZAMBIQUE = "MZ";
    public const NAMIBIA = "NA";
    public const NEW_CALEDONIA = "NC";
    public const NIGER = "NE";
    public const NORFOLK_ISLAND = "NF";
    public const NIGERIA = "NG";
    public const NICARAGUA = "NI";
    public const NETHERLANDS = "NL";
    public const NORWAY = "NO";
    public const NEPAL = "NP";
    public const NAURU = "NR";
    public const NIUE = "NU";
    public const NEW_ZEALAND = "NZ";
    public const OMAN = "OM";
    public const PANAMA = "PA";
    public const PERU = "PE";
    public const FRENCH_POLYNESIA = "PF";
    public const PAPUA_NEW_GUINEA = "PG";
    public const PHILIPPINES = "PH";
    public const PAKISTAN = "PK";
    public const POLAND = "PL";
    public const SAINT_PIERRE_AND_MIQUELON = "PM";
    public const PITCAIRN = "PN";
    public const PUERTO_RICO = "PR";
    public const PALESTINE_STATE_OF = "PS";
    public const PORTUGAL = "PT";
    public const PALAU = "PW";
    public const PARAGUAY = "PY";
    public const QATAR = "QA";
    public const REUNION = "RE";
    public const ROMANIA = "RO";
    public const SERBIA = "RS";
    public const RUSSIAN_FEDERATION = "RU";
    public const RWANDA = "RW";
    public const SAUDI_ARABIA = "SA";
    public const SOLOMON_ISLANDS = "SB";
    public const SEYCHELLES = "SC";
    public const SUDAN = "SD";
    public const SWEDEN = "SE";
    public const SINGAPORE = "SG";
    public const SAINT_HELENA_ASCENSION_AND_TRISTAN_DA_CUNHA = "SH";
    public const SLOVENIA = "SI";
    public const SVALBARD_AND_JAN_MAYEN = "SJ";
    public const SLOVAKIA = "SK";
    public const SIERRA_LEONE = "SL";
    public const SAN_MARINO = "SM";
    public const SENEGAL = "SN";
    public const SOMALIA = "SO";
    public const SURINAME = "SR";
    public const SOUTH_SUDAN = "SS";
    public const SAO_TOME_AND_PRINCIPE = "ST";
    public const EL_SALVADOR = "SV";
    public const SINT_MAARTEN_DUTCH_PART = "SX";
    public const SYRIAN_ARAB_REPUBLIC = "SY";
    public const SWAZILAND = "SZ";
    public const TURKS_AND_CAICOS_ISLANDS = "TC";
    public const CHAD = "TD";
    public const FRENCH_SOUTHERN_TERRITORIES = "TF";
    public const TOGO = "TG";
    public const THAILAND = "TH";
    public const TAJIKISTAN = "TJ";
    public const TOKELAU = "TK";
    public const TIMOR_LESTE = "TL";
    public const TURKMENISTAN = "TM";
    public const TUNISIA = "TN";
    public const TONGA = "TO";
    public const TURKEY = "TR";
    public const TRINIDAD_AND_TOBAGO = "TT";
    public const TUVALU = "TV";
    public const TAIWAN_PROVINCE_OF_CHINA = "TW";
    public const TANZANIA_UNITED_REPUBLIC_OF = "TZ";
    public const UKRAINE = "UA";
    public const UGANDA = "UG";
    public const UNITED_STATES_MINOR_OUTLYING_ISLANDS = "UM";
    public const UNITED_STATES = "US";
    public const URUGUAY = "UY";
    public const UZBEKISTAN = "UZ";
    public const HOLY_SEE_VATICAN_CITY_STATE = "VA";
    public const SAINT_VINCENT_AND_THE_GRENADINES = "VC";
    public const VENEZUELA_BOLIVARIAN_REPUBLIC_OF = "VE";
    public const VIRGIN_ISLANDS_BRITISH = "VG";
    public const VIRGIN_ISLANDS_US = "VI";
    public const VIET_NAM = "VN";
    public const VANUATU = "VU";
    public const WALLIS_AND_FUTUNA = "WF";
    public const SAMOA = "WS";
    public const YEMEN = "YE";
    public const MAYOTTE = "YT";
    public const SOUTH_AFRICA = "ZA";
    public const ZAMBIA = "ZM";
    public const ZIMBABWE = "ZW";

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
     */
    public function set(string $countryCode = null): void
    {
        if ($countryCode !== null && !\array_key_exists($countryCode, $this->getConstants())) {
            throw new DataTypeException(
                'Unknown country: ' . $countryCode,
                DataTypeException::UNKNOWN_COUNTRY
            );
        }

        $this->countryCode = $countryCode;
    }

    /**
     * @return string|null
     */
    public function get(): ?string
    {
        return $this->countryCode;
    }
}
