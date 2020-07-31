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
			'NationalNumberPattern'   => '(?:[37]\\d|6[0-79])\\d{6}|(?:[2-48]\\d|50)\\d{3}',
			'PossibleLength'          =>
				array(
					0 => 5,
					1 => 8,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'fixedLine'                     =>
		array(
			'NationalNumberPattern'   => '(?:[24]\\d|3[1-9]|50|65(?:02[12]|12[56]|22[89]|[3-5]00)|7(?:27\\d\\d|3100|5(?:02[12]|12[56]|22[89]|[34](?:00|81)|500))|8[0-5])\\d{3}',
			'ExampleNumber'           => '31234',
			'PossibleLength'          =>
				array(),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'mobile'                        =>
		array(
			'NationalNumberPattern'   => '73140\\d{3}|(?:630[01]|730[0-5])\\d{4}|[67]200[01]\\d{3}',
			'ExampleNumber'           => '72001234',
			'PossibleLength'          =>
				array(
					0 => 8,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'tollFree'                      =>
		array(
			'PossibleLength'          =>
				array(
					0 => - 1,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'premiumRate'                   =>
		array(
			'PossibleLength'          =>
				array(
					0 => - 1,
				),
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
			'PossibleLength'          =>
				array(
					0 => - 1,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'voip'                          =>
		array(
			'NationalNumberPattern'   => '30(?:0[01]\\d\\d|12(?:11|20))\\d\\d',
			'ExampleNumber'           => '30010000',
			'PossibleLength'          =>
				array(
					0 => 8,
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
			'PossibleLength'          =>
				array(
					0 => - 1,
				),
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
	'id'                            => 'KI',
	'countryCode'                   => 686,
	'internationalPrefix'           => '00',
	'nationalPrefix'                => '0',
	'nationalPrefixForParsing'      => '0',
	'sameMobileAndFixedLinePattern' => false,
	'numberFormat'                  =>
		array(),
	'intlNumberFormat'              =>
		array(),
	'mainCountryForCode'            => false,
	'leadingZeroPossible'           => false,
	'mobileNumberPortableRegion'    => false,
);
