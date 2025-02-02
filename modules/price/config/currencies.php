<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Manages plugin currencies
 *
 * Here plugin currencies are defined and managed.
 *
 * @version        1.0.0
 * @package        ecommerce-product-catalog/functions
 * @author        impleCode
 */
function available_currencies() {
	$currencies = array(
		'USD',
		'EUR',
		'AUD',
		'CAD',
		'GBP',
		'JPY',
		'NZD',
		'CHF',
		'HKD',
		'SGD',
		'SEK',
		'DKK',
		'PLN',
		'NOK',
		'HUF',
		'CZK',
		'ILS',
		'MXN',
		'BRL',
		'MYR',
		'PHP',
		'TWD',
		'THB',
		'TRY',
		'RUB',
		'AFN',
		'ALL',
		'DZD',
		'AOA',
		'XCD',
		'ARS',
		'AMD',
		'AWG',
		'AZN',
		'BSD',
		'BHD',
		'BDT',
		'BBD',
		'BYR',
		'BZD',
		'XOF',
		'BMD',
		'BTN',
		'INR',
		'BOB',
		'BOV',
		'BAM',
		'BWP',
		'BND',
		'BGN',
		'BIF',
		'CVE',
		'KHR',
		'XAF',
		'KYD',
		'CLF',
		'CLP',
		'CNY',
		'COP',
		'COU',
		'KMF',
		'CDF',
		'CRC',
		'HRK',
		'CUC',
		'CUP',
		'ANG',
		'DJF',
		'DOP',
		'EGP',
		'SVC',
		'ERN',
		'ETB',
		'FKP',
		'FJD',
		'XPF',
		'GMD',
		'GEL',
		'GHS',
		'GIP',
		'GTQ',
		'GNF',
		'GYD',
		'HTG',
		'HNL',
		'ISK',
		'IDR',
		'XDR',
		'IRR',
		'IQD',
		'JMD',
		'JOD',
		'KZT',
		'KES',
		'KPW',
		'KRW',
		'KWD',
		'KGS',
		'LAK',
		'LBP',
		'LSL',
		'ZAR',
		'LRD',
		'LYD',
		'MOP',
		'MKD',
		'MGA',
		'MWK',
		'MVR',
		'MRO',
		'MUR',
		'XUA',
		'MXV',
		'MDL',
		'MNT',
		'MAD',
		'MZN',
		'MMK',
		'NAD',
		'NPR',
		'NIO',
		'NGN',
		'OMR',
		'PKR',
		'PAB',
		'PGK',
		'PYG',
		'PEN',
		'QAR',
		'RON',
		'RWF',
		'SHP',
		'WST',
		'STD',
		'SAR',
		'RSD',
		'SCR',
		'SLL',
		'XSU',
		'SBD',
		'SOS',
		'SSP',
		'LKR',
		'SDG',
		'SRD',
		'SZL',
		'CHE',
		'CHW',
		'SYP',
		'TJS',
		'TZS',
		'TOP',
		'TTD',
		'TND',
		'TMT',
		'UGX',
		'UAH',
		'AED',
		'USN',
		'UYI',
		'UYU',
		'UZS',
		'VUV',
		'VEF',
		'VND',
		'YER',
		'ZMW',
		'ZWL'
	);

	return $currencies;
}

function ic_cat_get_currencies() {
	$currencies = array_unique( apply_filters( 'ic_cat_currencies', array(
				'AED' => __( 'United Arab Emirates dirham', 'price-field' ),
				'AFN' => __( 'Afghan afghani', 'price-field' ),
				'ALL' => __( 'Albanian lek', 'price-field' ),
				'AMD' => __( 'Armenian dram', 'price-field' ),
				'ANG' => __( 'Netherlands Antillean guilder', 'price-field' ),
				'AOA' => __( 'Angolan kwanza', 'price-field' ),
				'ARS' => __( 'Argentine peso', 'price-field' ),
				'AUD' => __( 'Australian dollar', 'price-field' ),
				'AWG' => __( 'Aruban florin', 'price-field' ),
				'AZN' => __( 'Azerbaijani manat', 'price-field' ),
				'BAM' => __( 'Bosnia and Herzegovina convertible mark', 'price-field' ),
				'BBD' => __( 'Barbadian dollar', 'price-field' ),
				'BDT' => __( 'Bangladeshi taka', 'price-field' ),
				'BGN' => __( 'Bulgarian lev', 'price-field' ),
				'BHD' => __( 'Bahraini dinar', 'price-field' ),
				'BIF' => __( 'Burundian franc', 'price-field' ),
				'BMD' => __( 'Bermudian dollar', 'price-field' ),
				'BND' => __( 'Brunei dollar', 'price-field' ),
				'BOB' => __( 'Bolivian boliviano', 'price-field' ),
				'BRL' => __( 'Brazilian real', 'price-field' ),
				'BSD' => __( 'Bahamian dollar', 'price-field' ),
				'BTC' => __( 'Bitcoin', 'price-field' ),
				'BTN' => __( 'Bhutanese ngultrum', 'price-field' ),
				'BWP' => __( 'Botswana pula', 'price-field' ),
				'BYR' => __( 'Belarusian ruble (old)', 'price-field' ),
				'BYN' => __( 'Belarusian ruble', 'price-field' ),
				'BZD' => __( 'Belize dollar', 'price-field' ),
				'CAD' => __( 'Canadian dollar', 'price-field' ),
				'CDF' => __( 'Congolese franc', 'price-field' ),
				'CHF' => __( 'Swiss franc', 'price-field' ),
				'CLP' => __( 'Chilean peso', 'price-field' ),
				'CNY' => __( 'Chinese yuan', 'price-field' ),
				'COP' => __( 'Colombian peso', 'price-field' ),
				'CRC' => __( 'Costa Rican col&oacute;n', 'price-field' ),
				'CUC' => __( 'Cuban convertible peso', 'price-field' ),
				'CUP' => __( 'Cuban peso', 'price-field' ),
				'CVE' => __( 'Cape Verdean escudo', 'price-field' ),
				'CZK' => __( 'Czech koruna', 'price-field' ),
				'DJF' => __( 'Djiboutian franc', 'price-field' ),
				'DKK' => __( 'Danish krone', 'price-field' ),
				'DOP' => __( 'Dominican peso', 'price-field' ),
				'DZD' => __( 'Algerian dinar', 'price-field' ),
				'EGP' => __( 'Egyptian pound', 'price-field' ),
				'ERN' => __( 'Eritrean nakfa', 'price-field' ),
				'ETB' => __( 'Ethiopian birr', 'price-field' ),
				'EUR' => __( 'Euro', 'price-field' ),
				'FJD' => __( 'Fijian dollar', 'price-field' ),
				'FKP' => __( 'Falkland Islands pound', 'price-field' ),
				'GBP' => __( 'Pound sterling', 'price-field' ),
				'GEL' => __( 'Georgian lari', 'price-field' ),
				'GGP' => __( 'Guernsey pound', 'price-field' ),
				'GHS' => __( 'Ghana cedi', 'price-field' ),
				'GIP' => __( 'Gibraltar pound', 'price-field' ),
				'GMD' => __( 'Gambian dalasi', 'price-field' ),
				'GNF' => __( 'Guinean franc', 'price-field' ),
				'GTQ' => __( 'Guatemalan quetzal', 'price-field' ),
				'GYD' => __( 'Guyanese dollar', 'price-field' ),
				'HKD' => __( 'Hong Kong dollar', 'price-field' ),
				'HNL' => __( 'Honduran lempira', 'price-field' ),
				'HRK' => __( 'Croatian kuna', 'price-field' ),
				'HTG' => __( 'Haitian gourde', 'price-field' ),
				'HUF' => __( 'Hungarian forint', 'price-field' ),
				'IDR' => __( 'Indonesian rupiah', 'price-field' ),
				'ILS' => __( 'Israeli new shekel', 'price-field' ),
				'IMP' => __( 'Manx pound', 'price-field' ),
				'INR' => __( 'Indian rupee', 'price-field' ),
				'IQD' => __( 'Iraqi dinar', 'price-field' ),
				'IRR' => __( 'Iranian rial', 'price-field' ),
				'IRT' => __( 'Iranian toman', 'price-field' ),
				'ISK' => __( 'Icelandic kr&oacute;na', 'price-field' ),
				'JEP' => __( 'Jersey pound', 'price-field' ),
				'JMD' => __( 'Jamaican dollar', 'price-field' ),
				'JOD' => __( 'Jordanian dinar', 'price-field' ),
				'JPY' => __( 'Japanese yen', 'price-field' ),
				'KES' => __( 'Kenyan shilling', 'price-field' ),
				'KGS' => __( 'Kyrgyzstani som', 'price-field' ),
				'KHR' => __( 'Cambodian riel', 'price-field' ),
				'KMF' => __( 'Comorian franc', 'price-field' ),
				'KPW' => __( 'North Korean won', 'price-field' ),
				'KRW' => __( 'South Korean won', 'price-field' ),
				'KWD' => __( 'Kuwaiti dinar', 'price-field' ),
				'KYD' => __( 'Cayman Islands dollar', 'price-field' ),
				'KZT' => __( 'Kazakhstani tenge', 'price-field' ),
				'LAK' => __( 'Lao kip', 'price-field' ),
				'LBP' => __( 'Lebanese pound', 'price-field' ),
				'LKR' => __( 'Sri Lankan rupee', 'price-field' ),
				'LRD' => __( 'Liberian dollar', 'price-field' ),
				'LSL' => __( 'Lesotho loti', 'price-field' ),
				'LYD' => __( 'Libyan dinar', 'price-field' ),
				'MAD' => __( 'Moroccan dirham', 'price-field' ),
				'MDL' => __( 'Moldovan leu', 'price-field' ),
				'MGA' => __( 'Malagasy ariary', 'price-field' ),
				'MKD' => __( 'Macedonian denar', 'price-field' ),
				'MMK' => __( 'Burmese kyat', 'price-field' ),
				'MNT' => __( 'Mongolian t&ouml;gr&ouml;g', 'price-field' ),
				'MOP' => __( 'Macanese pataca', 'price-field' ),
				'MRO' => __( 'Mauritanian ouguiya', 'price-field' ),
				'MUR' => __( 'Mauritian rupee', 'price-field' ),
				'MVR' => __( 'Maldivian rufiyaa', 'price-field' ),
				'MWK' => __( 'Malawian kwacha', 'price-field' ),
				'MXN' => __( 'Mexican peso', 'price-field' ),
				'MYR' => __( 'Malaysian ringgit', 'price-field' ),
				'MZN' => __( 'Mozambican metical', 'price-field' ),
				'NAD' => __( 'Namibian dollar', 'price-field' ),
				'NGN' => __( 'Nigerian naira', 'price-field' ),
				'NIO' => __( 'Nicaraguan c&oacute;rdoba', 'price-field' ),
				'NOK' => __( 'Norwegian krone', 'price-field' ),
				'NPR' => __( 'Nepalese rupee', 'price-field' ),
				'NZD' => __( 'New Zealand dollar', 'price-field' ),
				'OMR' => __( 'Omani rial', 'price-field' ),
				'PAB' => __( 'Panamanian balboa', 'price-field' ),
				'PEN' => __( 'Peruvian nuevo sol', 'price-field' ),
				'PGK' => __( 'Papua New Guinean kina', 'price-field' ),
				'PHP' => __( 'Philippine peso', 'price-field' ),
				'PKR' => __( 'Pakistani rupee', 'price-field' ),
				'PLN' => __( 'Polish z&#x142;oty', 'price-field' ),
				'PRB' => __( 'Transnistrian ruble', 'price-field' ),
				'PYG' => __( 'Paraguayan guaran&iacute;', 'price-field' ),
				'QAR' => __( 'Qatari riyal', 'price-field' ),
				'RON' => __( 'Romanian leu', 'price-field' ),
				'RSD' => __( 'Serbian dinar', 'price-field' ),
				'RUB' => __( 'Russian ruble', 'price-field' ),
				'RWF' => __( 'Rwandan franc', 'price-field' ),
				'SAR' => __( 'Saudi riyal', 'price-field' ),
				'SBD' => __( 'Solomon Islands dollar', 'price-field' ),
				'SCR' => __( 'Seychellois rupee', 'price-field' ),
				'SDG' => __( 'Sudanese pound', 'price-field' ),
				'SEK' => __( 'Swedish krona', 'price-field' ),
				'SGD' => __( 'Singapore dollar', 'price-field' ),
				'SHP' => __( 'Saint Helena pound', 'price-field' ),
				'SLL' => __( 'Sierra Leonean leone', 'price-field' ),
				'SOS' => __( 'Somali shilling', 'price-field' ),
				'SRD' => __( 'Surinamese dollar', 'price-field' ),
				'SSP' => __( 'South Sudanese pound', 'price-field' ),
				'STD' => __( 'S&atilde;o Tom&eacute; and Pr&iacute;ncipe dobra', 'price-field' ),
				'SYP' => __( 'Syrian pound', 'price-field' ),
				'SZL' => __( 'Swazi lilangeni', 'price-field' ),
				'THB' => __( 'Thai baht', 'price-field' ),
				'TJS' => __( 'Tajikistani somoni', 'price-field' ),
				'TMT' => __( 'Turkmenistan manat', 'price-field' ),
				'TND' => __( 'Tunisian dinar', 'price-field' ),
				'TOP' => __( 'Tongan pa&#x2bb;anga', 'price-field' ),
				'TRY' => __( 'Turkish lira', 'price-field' ),
				'TTD' => __( 'Trinidad and Tobago dollar', 'price-field' ),
				'TWD' => __( 'New Taiwan dollar', 'price-field' ),
				'TZS' => __( 'Tanzanian shilling', 'price-field' ),
				'UAH' => __( 'Ukrainian hryvnia', 'price-field' ),
				'UGX' => __( 'Ugandan shilling', 'price-field' ),
				'USD' => __( 'United States dollar', 'price-field' ),
				'UYU' => __( 'Uruguayan peso', 'price-field' ),
				'UZS' => __( 'Uzbekistani som', 'price-field' ),
				'VEF' => __( 'Venezuelan bol&iacute;var', 'price-field' ),
				'VND' => __( 'Vietnamese &#x111;&#x1ed3;ng', 'price-field' ),
				'VUV' => __( 'Vanuatu vatu', 'price-field' ),
				'WST' => __( 'Samoan t&#x101;l&#x101;', 'price-field' ),
				'XAF' => __( 'Central African CFA franc', 'price-field' ),
				'XCD' => __( 'East Caribbean dollar', 'price-field' ),
				'XOF' => __( 'West African CFA franc', 'price-field' ),
				'XPF' => __( 'CFP franc', 'price-field' ),
				'YER' => __( 'Yemeni rial', 'price-field' ),
				'ZAR' => __( 'South African rand', 'price-field' ),
				'ZMW' => __( 'Zambian kwacha', 'price-field' ),
			)
		)
	);


	return $currencies;
}

function ic_cat_get_currency_symbol( $currency = '' ) {
	if ( empty( $currency ) ) {
		$currency = get_product_currency_code();
	}

	$symbols         = apply_filters( 'ic_cat_currency_symbols', array(
		'AED' => '&#x62f;.&#x625;',
		'AFN' => '&#x60b;',
		'ALL' => 'L',
		'AMD' => 'AMD',
		'ANG' => '&fnof;',
		'AOA' => 'Kz',
		'ARS' => '&#36;',
		'AUD' => '&#36;',
		'AWG' => 'Afl.',
		'AZN' => 'AZN',
		'BAM' => 'KM',
		'BBD' => '&#36;',
		'BDT' => '&#2547;&nbsp;',
		'BGN' => '&#1083;&#1074;.',
		'BHD' => '.&#x62f;.&#x628;',
		'BIF' => 'Fr',
		'BMD' => '&#36;',
		'BND' => '&#36;',
		'BOB' => 'Bs.',
		'BRL' => '&#82;&#36;',
		'BSD' => '&#36;',
		'BTC' => '&#3647;',
		'BTN' => 'Nu.',
		'BWP' => 'P',
		'BYR' => 'Br',
		'BYN' => 'Br',
		'BZD' => '&#36;',
		'CAD' => '&#36;',
		'CDF' => 'Fr',
		'CHF' => '&#67;&#72;&#70;',
		'CLP' => '&#36;',
		'CNY' => '&yen;',
		'COP' => '&#36;',
		'CRC' => '&#x20a1;',
		'CUC' => '&#36;',
		'CUP' => '&#36;',
		'CVE' => '&#36;',
		'CZK' => '&#75;&#269;',
		'DJF' => 'Fr',
		'DKK' => 'DKK',
		'DOP' => 'RD&#36;',
		'DZD' => '&#x62f;.&#x62c;',
		'EGP' => 'EGP',
		'ERN' => 'Nfk',
		'ETB' => 'Br',
		'EUR' => '&euro;',
		'FJD' => '&#36;',
		'FKP' => '&pound;',
		'GBP' => '&pound;',
		'GEL' => '&#x10da;',
		'GGP' => '&pound;',
		'GHS' => '&#x20b5;',
		'GIP' => '&pound;',
		'GMD' => 'D',
		'GNF' => 'Fr',
		'GTQ' => 'Q',
		'GYD' => '&#36;',
		'HKD' => '&#36;',
		'HNL' => 'L',
		'HRK' => 'Kn',
		'HTG' => 'G',
		'HUF' => '&#70;&#116;',
		'IDR' => 'Rp',
		'ILS' => '&#8362;',
		'IMP' => '&pound;',
		'INR' => '&#8377;',
		'IQD' => '&#x639;.&#x62f;',
		'IRR' => '&#xfdfc;',
		'IRT' => '&#x062A;&#x0648;&#x0645;&#x0627;&#x0646;',
		'ISK' => 'kr.',
		'JEP' => '&pound;',
		'JMD' => '&#36;',
		'JOD' => '&#x62f;.&#x627;',
		'JPY' => '&yen;',
		'KES' => 'KSh',
		'KGS' => '&#x441;&#x43e;&#x43c;',
		'KHR' => '&#x17db;',
		'KMF' => 'Fr',
		'KPW' => '&#x20a9;',
		'KRW' => '&#8361;',
		'KWD' => '&#x62f;.&#x643;',
		'KYD' => '&#36;',
		'KZT' => 'KZT',
		'LAK' => '&#8365;',
		'LBP' => '&#x644;.&#x644;',
		'LKR' => '&#xdbb;&#xdd4;',
		'LRD' => '&#36;',
		'LSL' => 'L',
		'LYD' => '&#x644;.&#x62f;',
		'MAD' => '&#x62f;.&#x645;.',
		'MDL' => 'MDL',
		'MGA' => 'Ar',
		'MKD' => '&#x434;&#x435;&#x43d;',
		'MMK' => 'Ks',
		'MNT' => '&#x20ae;',
		'MOP' => 'P',
		'MRO' => 'UM',
		'MUR' => '&#x20a8;',
		'MVR' => '.&#x783;',
		'MWK' => 'MK',
		'MXN' => '&#36;',
		'MYR' => '&#82;&#77;',
		'MZN' => 'MT',
		'NAD' => '&#36;',
		'NGN' => '&#8358;',
		'NIO' => 'C&#36;',
		'NOK' => '&#107;&#114;',
		'NPR' => '&#8360;',
		'NZD' => '&#36;',
		'OMR' => '&#x631;.&#x639;.',
		'PAB' => 'B/.',
		'PEN' => 'S/.',
		'PGK' => 'K',
		'PHP' => '&#8369;',
		'PKR' => '&#8360;',
		'PLN' => '&#122;&#322;',
		'PRB' => '&#x440;.',
		'PYG' => '&#8370;',
		'QAR' => '&#x631;.&#x642;',
		'RMB' => '&yen;',
		'RON' => 'lei',
		'RSD' => '&#x434;&#x438;&#x43d;.',
		'RUB' => '&#8381;',
		'RWF' => 'Fr',
		'SAR' => '&#x631;.&#x633;',
		'SBD' => '&#36;',
		'SCR' => '&#x20a8;',
		'SDG' => '&#x62c;.&#x633;.',
		'SEK' => '&#107;&#114;',
		'SGD' => '&#36;',
		'SHP' => '&pound;',
		'SLL' => 'Le',
		'SOS' => 'Sh',
		'SRD' => '&#36;',
		'SSP' => '&pound;',
		'STD' => 'Db',
		'SYP' => '&#x644;.&#x633;',
		'SZL' => 'L',
		'THB' => '&#3647;',
		'TJS' => '&#x405;&#x41c;',
		'TMT' => 'm',
		'TND' => '&#x62f;.&#x62a;',
		'TOP' => 'T&#36;',
		'TRY' => '&#8378;',
		'TTD' => '&#36;',
		'TWD' => '&#78;&#84;&#36;',
		'TZS' => 'Sh',
		'UAH' => '&#8372;',
		'UGX' => 'UGX',
		'USD' => '&#36;',
		'UYU' => '&#36;',
		'UZS' => 'UZS',
		'VEF' => 'Bs F',
		'VND' => '&#8363;',
		'VUV' => 'Vt',
		'WST' => 'T',
		'XAF' => 'CFA',
		'XCD' => '&#36;',
		'XOF' => 'CFA',
		'XPF' => 'Fr',
		'YER' => '&#xfdfc;',
		'ZAR' => '&#82;',
		'ZMW' => 'ZK',
	) );
	$currency_symbol = isset( $symbols[ $currency ] ) ? $symbols[ $currency ] : '';

	return apply_filters( 'ic_cat_currency_symbol', $currency_symbol, $currency );
}
