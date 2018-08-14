<?php

$DCA = &$GLOBALS['TL_DCA']['tl_content'];

// inject palette of fields
foreach ( $DCA['palettes'] as $name => $palette ) {
	if ( $name != '__selector__' ) {
		$DCA['palettes'][$name] = str_replace( '{type_legend}', '{area_legend:hide},area;{type_legend}', $palette );
	}
}

// define injected fields
$DCA['fields']['area'] = [
	'label'     => &$GLOBALS['TL_LANG']['tl_content']['area'],
	'exclude'   => false,
	'search'    => false,
	'inputType' => 'select',
	'options'   => [ 'area_auto', 'area_description', 'area_itinerary', 'area_example', 'area_prices', 'area_gallery' ],
	'reference' => &$GLOBALS['TL_LANG']['tl_content'],
	'eval'      => [
		'tl_class' => 'w50',
	],
	'sql'       => [
		'type'    => 'string',
		'length'  => '32',
		'default' => '',
	],
];

unset( $DCA );
