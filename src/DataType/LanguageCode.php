<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\DataType;

use Payvision\SDK\Exception\DataTypeException;

/**
 * Language codes conform ISO 639-1 standards
 *
 * @package Payvision\SDK\DataType
 */
class LanguageCode extends AbstractCode implements DataType
{
    const ABKHAZIAN = "ab";
    const AFAR = "aa";
    const AFRIKAANS = "af";
    const AKAN = "ak";
    const ALBANIAN = "sq";
    const AMHARIC = "am";
    const ARABIC = "ar";
    const ARAGONESE = "an";
    const ARMENIAN = "hy";
    const ASSAMESE = "as";
    const AVARIC = "av";
    const AVESTAN = "ae";
    const AYMARA = "ay";
    const AZERBAIJANI = "az";
    const BAMBARA = "bm";
    const BASHKIR = "ba";
    const BASQUE = "eu";
    const BELARUSIAN = "be";
    const BENGALI = "bn";
    const BIHARI_LANGUAGES = "bh";
    const BISLAMA = "bi";
    const BOSNIAN = "bs";
    const BRETON = "br";
    const BULGARIAN = "bg";
    const BURMESE = "my";
    const CATALAN = "ca";
    const CENTRAL_KHMER = "km";
    const CHAMORRO = "ch";
    const CHECHEN = "ce";
    const CHICHEWA_CHEWA_NYANJA = "ny";
    const CHINESE = "zh";
    const CHURCH_SLAVONIC = "cu";
    const CHUVASH = "cv";
    const CORNISH = "kw";
    const CORSICAN = "co";
    const CREE = "cr";
    const CROATIAN = "hr";
    const CZECH = "cs";
    const DANISH = "da";
    const DIVEHI = "dv";
    const DUTCH = "nl";
    const DZONGKHA = "dz";
    const ENGLISH = "en";
    const ESPERANTO = "eo";
    const ESTONIAN = "et";
    const EWE = "ee";
    const FAROESE = "fo";
    const FIJIAN = "fj";
    const FINNISH = "fi";
    const FRENCH = "fr";
    const FULAH = "ff";
    const GAELIC = "gd";
    const GALICIAN = "gl";
    const GANDA = "lg";
    const GEORGIAN = "ka";
    const GERMAN = "de";
    const KIKUYU = "ki";
    const GREEK = "el";
    const KALAALLISUT = "kl";
    const GUARANI = "gn";
    const GUJARATI = "gu";
    const HAITIAN = "ht";
    const HAUSA = "ha";
    const HEBREW = "he";
    const HERERO = "hz";
    const HINDI = "hi";
    const HIRI_MOTU = "ho";
    const HUNGARIAN = "hu";
    const ICELANDIC = "is";
    const IDO = "io";
    const IGBO = "ig";
    const INDONESIAN = "id";
    const INTERNATIONAL_AUXILIARY_LANGUAGE_ASSOCIATION = "ia";
    const INTERLINGUE = "ie";
    const INUKTITUT = "iu";
    const INUPIAQ = "ik";
    const IRISH = "ga";
    const ITALIAN = "it";
    const JAPANESE = "ja";
    const JAVANESE = "jv";
    const KANNADA = "kn";
    const KANURI = "kr";
    const KASHMIRI = "ks";
    const KAZAKH = "kk";
    const KINYARWANDA = "rw";
    const KOMI = "kv";
    const KONGO = "kg";
    const KOREAN = "ko";
    const KWANYAMA = "kj";
    const KURDISH = "ku";
    const KYRGYZ = "ky";
    const LAO = "lo";
    const LATIN = "la";
    const LATVIAN = "lv";
    const LUXEMBOURGISH = "lb";
    const LIMBURGISH = "li";
    const LINGALA = "ln";
    const LITHUANIAN = "lt";
    const LUBA_KATANGA = "lu";
    const MACEDONIAN = "mk";
    const MALAGASY = "mg";
    const MALAY = "ms";
    const MALAYALAM = "ml";
    const MALTESE = "mt";
    const MANX = "gv";
    const MAORI = "mi";
    const MARATHI = "mr";
    const MARSHALLESE = "mh";
    const ROMANIAN = "ro";
    const MONGOLIAN = "mn";
    const NAURU = "na";
    const NAVAJO = "nv";
    const NORTHERN_NDEBELE = "nd";
    const NDONGA = "ng";
    const NEPALI = "ne";
    const NORTHERN_SAMI = "se";
    const NORWEGIAN = "no";
    const NORWEGIAN_BOKMAL = "nb";
    const NORWEGIAN_NYNORSK = "nn";
    const NUOSU = "ii";
    const OCCITAN = "oc";
    const OJIBWA = "oj";
    const ORIYA = "or";
    const OROMO = "om";
    const OSSETIAN = "os";
    const PALI = "pi";
    const PANJABI = "pa";
    const PASHTO = "ps";
    const PERSIAN = "fa";
    const POLISH = "pl";
    const PORTUGUESE = "pt";
    const QUECHUA = "qu";
    const ROMANSH = "rm";
    const RUNDI = "rn";
    const RUSSIAN = "ru";
    const SAMOAN = "sm";
    const SANGO = "sg";
    const SANSKRIT = "sa";
    const SARDINIAN = "sc";
    const SERBIAN = "sr";
    const SHONA = "sn";
    const SINDHI = "sd";
    const SINHALA = "si";
    const SLOVAK = "sk";
    const SLOVENIAN = "sl";
    const SOMALI = "so";
    const SOTHO = "st";
    const SOUTH_NDEBELE = "nr";
    const SPANISH = "es";
    const SUNDANESE = "su";
    const SWAHILI = "sw";
    const SWATI = "ss";
    const SWEDISH = "sv";
    const TAGALOG = "tl";
    const TAHITIAN = "ty";
    const TAJIK = "tg";
    const TAMIL = "ta";
    const TATAR = "tt";
    const TELUGU = "te";
    const THAI = "th";
    const TIBETAN = "bo";
    const TIGRINYA = "ti";
    const TONGA = "to";
    const TSONGA = "ts";
    const TSWANA = "tn";
    const TURKISH = "tr";
    const TURKMEN = "tk";
    const TWI = "tw";
    const UIGHUR = "ug";
    const UKRAINIAN = "uk";
    const URDU = "ur";
    const UZBEK = "uz";
    const VENDA = "ve";
    const VIETNAMESE = "vi";
    const VOLAP_K = "vo";
    const WALLOON = "wa";
    const WELSH = "cy";
    const WESTERN_FRISIAN = "fy";
    const WOLOF = "wo";
    const XHOSA = "xh";
    const YIDDISH = "yi";
    const YORUBA = "yo";
    const ZHUANG = "za";
    const ZULU = "zu";

    /**
     * @var string
     */
    protected $languageCode;

    /**
     * CurrencyCode constructor.
     *
     * @param string $languageCode
     * @throws DataTypeException
     */
    public function __construct(string $languageCode = null)
    {
        $this->set($languageCode);
    }

    /**
     * @param string $languageCode
     * @throws DataTypeException
     * @return null
     */
    public function set(string $languageCode = null)
    {
        if ($languageCode !== null && !\array_key_exists($languageCode, $this->getConstants())) {
            throw new DataTypeException(
                'Unknown language: ' . $languageCode,
                DataTypeException::UNKNOWN_LANGUAGE
            );
        }

        $this->languageCode = $languageCode;
    }

    // phpcs:disable SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint

    /**
     * @return string|null
     */
    public function get()
    {
        return $this->languageCode;
    }
    // phpcs:enable SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint
}
