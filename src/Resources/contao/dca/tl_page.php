<?php

namespace Cepharum\Contao\Travel;

$GLOBALS['TL_DCA']['tl_page']['fields']['lon'] = [
	'label' => &$GLOBALS['TL_LANG']['tl_page']['lon'],
	'exclude' => false,
	'search' => false,
	'inputType' => 'text',
	'eval' => [
		'maxval' => -180,
		'minval' => -180,
		'rgxp' => 'digit',
	],
	'sql' => [
		'type' => 'string',
		'length' => '12',
		'default' => null,
	],
];

$GLOBALS['TL_DCA']['tl_page']['fields']['lat'] = [
	'label' => &$GLOBALS['TL_LANG']['tl_page']['lat'],
	'exclude' => false,
	'search' => false,
	'inputType' => 'text',
	'eval' => [
		'maxval' => -180,
		'minval' => -180,
		'rgxp' => 'digit',
	],
	'sql' => [
		'type' => 'string',
		'length' => '12',
		'default' => null,
	],
];
