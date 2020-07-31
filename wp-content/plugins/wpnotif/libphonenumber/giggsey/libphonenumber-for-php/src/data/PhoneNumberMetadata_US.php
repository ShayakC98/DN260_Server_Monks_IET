<?php
/**
 * This file has been @generated by a phing task by {@link BuildMetadataPHPFromXml}.
 * See [README.md](README.md#generating-data) for more information.
 *
 * Pull requests changing data in these files will not be accepted. See the
 * [FAQ in the README](README.md#problems-with-invalid-numbers] on how to make
 * metadata changes.
 *
 * Do not modify this file directly!
 */


return array(
	'generalDesc'                   =>
		array(
			'NationalNumberPattern'   => '[2-9]\\d{9}',
			'PossibleLength'          =>
				array(
					0 => 10,
				),
			'PossibleLengthLocalOnly' =>
				array(
					0 => 7,
				),
		),
	'fixedLine'                     =>
		array(
			'NationalNumberPattern'   => '(?:2(?:0[1-35-9]|1[02-9]|2[03-589]|3[149]|4[08]|5[1-46]|6[0279]|7[0269]|8[13])|3(?:0[1-57-9]|1[02-9]|2[0135]|3[0-24679]|4[67]|5[12]|6[014]|8[056])|4(?:0[124-9]|1[02-579]|2[3-5]|3[0245]|4[0235]|58|6[39]|7[0589]|8[04])|5(?:0[1-57-9]|1[0235-8]|20|3[0149]|4[01]|5[19]|6[1-47]|7[013-5]|8[056])|6(?:0[1-35-9]|1[024-9]|2[03689]|[34][016]|5[017]|6[0-279]|78|8[0-2])|7(?:0[1-46-8]|1[2-9]|2[04-7]|3[1247]|4[037]|5[47]|6[02359]|7[02-59]|8[156])|8(?:0[1-68]|1[02-8]|2[08]|3[0-28]|4[3578]|5[046-9]|6[02-5]|7[028])|9(?:0[1346-9]|1[02-9]|2[0589]|3[0146-8]|4[0179]|5[12469]|7[0-389]|8[04-69]))[2-9]\\d{6}',
			'ExampleNumber'           => '2015550123',
			'PossibleLength'          =>
				array(),
			'PossibleLengthLocalOnly' =>
				array(
					0 => 7,
				),
		),
	'mobile'                        =>
		array(
			'NationalNumberPattern'   => '(?:2(?:0[1-35-9]|1[02-9]|2[03-589]|3[149]|4[08]|5[1-46]|6[0279]|7[0269]|8[13])|3(?:0[1-57-9]|1[02-9]|2[0135]|3[0-24679]|4[67]|5[12]|6[014]|8[056])|4(?:0[124-9]|1[02-579]|2[3-5]|3[0245]|4[0235]|58|6[39]|7[0589]|8[04])|5(?:0[1-57-9]|1[0235-8]|20|3[0149]|4[01]|5[19]|6[1-47]|7[013-5]|8[056])|6(?:0[1-35-9]|1[024-9]|2[03689]|[34][016]|5[017]|6[0-279]|78|8[0-2])|7(?:0[1-46-8]|1[2-9]|2[04-7]|3[1247]|4[037]|5[47]|6[02359]|7[02-59]|8[156])|8(?:0[1-68]|1[02-8]|2[08]|3[0-28]|4[3578]|5[046-9]|6[02-5]|7[028])|9(?:0[1346-9]|1[02-9]|2[0589]|3[0146-8]|4[0179]|5[12469]|7[0-389]|8[04-69]))[2-9]\\d{6}',
			'ExampleNumber'           => '2015550123',
			'PossibleLength'          =>
				array(),
			'PossibleLengthLocalOnly' =>
				array(
					0 => 7,
				),
		),
	'tollFree'                      =>
		array(
			'NationalNumberPattern'   => '8(?:00|33|44|55|66|77|88)[2-9]\\d{6}',
			'ExampleNumber'           => '8002345678',
			'PossibleLength'          =>
				array(),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'premiumRate'                   =>
		array(
			'NationalNumberPattern'   => '900[2-9]\\d{6}',
			'ExampleNumber'           => '9002345678',
			'PossibleLength'          =>
				array(),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'sharedCost'                    =>
		array(
			'PossibleLength'          =>
				array(
					0 => - 1,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'personalNumber'                =>
		array(
			'NationalNumberPattern'   => '5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}',
			'ExampleNumber'           => '5002345678',
			'PossibleLength'          =>
				array(),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'voip'                          =>
		array(
			'PossibleLength'          =>
				array(
					0 => - 1,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'pager'                         =>
		array(
			'PossibleLength'          =>
				array(
					0 => - 1,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'uan'                           =>
		array(
			'NationalNumberPattern'   => '710[2-9]\\d{6}',
			'ExampleNumber'           => '7102123456',
			'PossibleLength'          =>
				array(),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'voicemail'                     =>
		array(
			'PossibleLength'          =>
				array(
					0 => - 1,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'noInternationalDialling'       =>
		array(
			'PossibleLength'          =>
				array(
					0 => - 1,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'id'                            => 'US',
	'countryCode'                   => 1,
	'internationalPrefix'           => '011',
	'nationalPrefix'                => '1',
	'nationalPrefixForParsing'      => '1',
	'sameMobileAndFixedLinePattern' => true,
	'numberFormat'                  =>
		array(
			0 =>
				array(
					'pattern'                              => '(\\d{3})(\\d{4})',
					'format'                               => '$1-$2',
					'leadingDigitsPatterns'                =>
						array(
							0 => '[2-9]',
						),
					'nationalPrefixFormattingRule'         => '',
					'domesticCarrierCodeFormattingRule'    => '',
					'nationalPrefixOptionalWhenFormatting' => false,
				),
			1 =>
				array(
					'pattern'                              => '(\\d{3})(\\d{3})(\\d{4})',
					'format'                               => '($1) $2-$3',
					'leadingDigitsPatterns'                =>
						array(
							0 => '[2-9]',
						),
					'nationalPrefixFormattingRule'         => '',
					'domesticCarrierCodeFormattingRule'    => '',
					'nationalPrefixOptionalWhenFormatting' => true,
				),
		),
	'intlNumberFormat'              =>
		array(
			0 =>
				array(
					'pattern'               => '(\\d{3})(\\d{3})(\\d{4})',
					'format'                => '$1-$2-$3',
					'leadingDigitsPatterns' =>
						array(
							0 => '[2-9]',
						),
				),
		),
	'mainCountryForCode'            => true,
	'leadingZeroPossible'           => false,
	'mobileNumberPortableRegion'    => true,
);
