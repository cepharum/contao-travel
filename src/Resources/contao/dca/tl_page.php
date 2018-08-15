<?php

$DCA = &$GLOBALS['TL_DCA']['tl_page'];

// inject palette of fields
foreach ( $DCA['palettes'] as $name => $palette ) {
	if ( $name != '__selector__' ) {
		$DCA['palettes'][$name] = str_replace( '{meta_legend}', '{position_legend:hide},lon,lat;{tags_legend:hide},tags;{meta_legend}', $palette );
	}
}

// define injected fields
$DCA['fields']['lon'] = [
	'label'     => &$GLOBALS['TL_LANG']['tl_page']['lon'],
	'exclude'   => false,
	'search'    => false,
	'inputType' => 'text',
	'eval'      => [
		'maxval'   => 180,
		'minval'   => -180,
		'rgxp'     => 'digit',
		'tl_class' => 'w50',
	],
	'sql'       => [
		'type'    => 'string',
		'length'  => '12',
		'default' => '',
	],
];

$DCA['fields']['lat'] = [
	'label'     => &$GLOBALS['TL_LANG']['tl_page']['lat'],
	'exclude'   => false,
	'search'    => false,
	'inputType' => 'text',
	'eval'      => [
		'maxval'   => 180,
		'minval'   => -180,
		'rgxp'     => 'digit',
		'tl_class' => 'w50',
	],
	'sql'       => [
		'type'    => 'string',
		'length'  => '12',
		'default' => '',
	],
];

$DCA['fields']['tags'] = [
	'label'     => &$GLOBALS['TL_LANG']['tl_page']['tags'],
	'exclude'   => true,
	'inputType' => 'cfgTags',
	'eval'      => [
		'tagsManager' => 'app.page',
		'tagsCreate'  => false,
		'maxItems'    => 10,
		'hideList'    => false,
		'tl_class'    => 'clr'
	],
];

unset( $DCA );
