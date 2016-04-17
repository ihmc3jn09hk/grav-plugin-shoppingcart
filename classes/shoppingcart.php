<?php
namespace Grav\Plugin;

/**
 * Class ShoppingCart
 * @package Grav\Plugin
 */
class ShoppingCart
{
    /**
     * Get an array containing the ShoppingCart own page types
     * Useful to determine if the current page is own or another one
     *
     * @return array
     */
    public function getOwnPageTypes()
    {
        return [
            'categories',
            'products',
            'payment',
            'product',
            'checkout',
            'order'
        ];
    }

    /**
     * Returns the symbol of the passed currency code
     *
     * @param $currencyCode
     *
     * @return mixed
     */
    public static function getSymbolOfCurrencyCode($currencyCode) {
        $currencyCode = strtoupper($currencyCode);

        $currencies = [
            "AED" => "\u062f.\u0625;",
            "AFN" => "Afs",
            "ALL" => "L",
            "AMD" => "AMD",
            "ANG" => "NA\u0192",
            "AOA" => "Kz",
            "ARS" => "$",
            "AUD" => "$",
            "AWG" => "\u0192",
            "AZN" => "AZN",
            "BAM" => "KM",
            "BBD" => "Bds$",
            "BDT" => "\u09f3",
            "BGN" => "BGN",
            "BHD" => ".\u062f.\u0628",
            "BIF" => "FBu",
            "BMD" => "BD$",
            "BOB" => "Bs.",
            "BRL" => "R$",
            "BSD" => "B$",
            "BTN" => "Nu.",
            "BWP" => "P",
            "BYR" => "Br",
            "BZD" => "BZ$",
            "CAD" => "$",
            "CDF" => "F",
            "CHF" => "Fr.",
            "CLP" => "$",
            "CNY" => "\u00a5",
            "COP" => "Col$",
            "CRC" => "\u20a1",
            "CUC" => "$",
            "CVE" => "Esc",
            "CZK" => "K\u010d",
            "DJF" => "Fdj",
            "DKK" => "Kr",
            "DOP" => "RD$",
            "DZD" => "\u062f.\u062c",
            "EEK" => "KR",
            "EGP" => "\u00a3",
            "ERN" => "Nfa",
            "ETB" => "Br",
            "EUR" => "\u20ac",
            "FJD" => "FJ$",
            "FKP" => "\u00a3",
            "GBP" => "\u00a3",
            "GEL" => "GEL",
            "GHS" => "GH\u20b5",
            "GIP" => "\u00a3",
            "GMD" => "D",
            "GNF" => "FG",
            "GQE" => "CFA",
            "GTQ" => "Q",
            "GYD" => "GY$",
            "HKD" => "HK$",
            "HNL" => "L",
            "HRK" => "kn",
            "HTG" => "G",
            "HUF" => "Ft",
            "IDR" => "Rp",
            "ILS" => "\u20aa",
            "INR" => "\u2089",
            "IQD" => "\u062f.\u0639",
            "IRR" => "IRR",
            "ISK" => "kr",
            "JMD" => "J$",
            "JOD" => "JOD",
            "JPY" => "\u00a5",
            "KES" => "KSh",
            "KGS" => "\u0441\u043e\u043c",
            "KHR" => "\u17db",
            "KMF" => "KMF",
            "KPW" => "W",
            "KRW" => "W",
            "KWD" => "KWD",
            "KYD" => "KY$",
            "KZT" => "T",
            "LAK" => "KN",
            "LBP" => "\u00a3",
            "LKR" => "Rs",
            "LRD" => "L$",
            "LSL" => "M",
            "LTL" => "Lt",
            "LVL" => "Ls",
            "LYD" => "LD",
            "MAD" => "MAD",
            "MDL" => "MDL",
            "MGA" => "FMG",
            "MKD" => "MKD",
            "MMK" => "K",
            "MNT" => "\u20ae",
            "MOP" => "P",
            "MRO" => "UM",
            "MUR" => "Rs",
            "MVR" => "Rf",
            "MWK" => "MK",
            "MXN" => "$",
            "MYR" => "RM",
            "MZM" => "MTn",
            "NAD" => "N$",
            "NGN" => "\u20a6",
            "NIO" => "C$",
            "NOK" => "kr",
            "NPR" => "NRs",
            "NZD" => "NZ$",
            "OMR" => "OMR",
            "PAB" => "B./",
            "PEN" => "S/.",
            "PGK" => "K",
            "PHP" => "\u20b1",
            "PKR" => "Rs.",
            "PLN" => "z\u0142",
            "PYG" => "\u20b2",
            "QAR" => "QR",
            "RON" => "L",
            "RSD" => "din.",
            "RUB" => "R",
            "SAR" => "SR",
            "SBD" => "SI$",
            "SCR" => "SR",
            "SDG" => "SDG",
            "SEK" => "kr",
            "SGD" => "S$",
            "SHP" => "\u00a3",
            "SLL" => "Le",
            "SOS" => "Sh.",
            "SRD" => "$",
            "SYP" => "LS",
            "SZL" => "E",
            "THB" => "\u0e3f",
            "TJS" => "TJS",
            "TMT" => "m",
            "TND" => "DT",
            "TRY" => "TL",
            "TTD" => "TT$",
            "TWD" => "NT$",
            "TZS" => "TZS",
            "UAH" => "грн.",
            "UGX" => "USh",
            "USD" => "$",
            "UYU" => '$U',
            "UZS" => "UZS",
            "VEB" => "Bs",
            "VND" => "\u20ab",
            "VUV" => "VT",
            "WST" => "WS$",
            "XAF" => "CFA",
            "XCD" => "EC$",
            "XDR" => "SDR",
            "XOF" => "CFA",
            "XPF" => "F",
            "YER" => "YER",
            "ZAR" => "R",
            "ZMK" => "ZK",
            "ZWR" => "Z$"
        ];

        return json_decode('"' . $currencies[$currencyCode] . '"'); //Because JSON directly supports the \uxxxx syntax
    }
}
