<?php
/**
 * Add required and recommended plugins.
 *
 * @package yosemite-lite
 */

add_action( 'tgmpa_register', 'yosemite_lite_register_required_plugins' );
add_filter( 'ocdi/register_plugins', 'yosemite_lite_register_ocdi_plugins' );

function yosemite_lite_register_required_plugins() {
	tgmpa( yosemite_lite_required_plugins(), [
		'id'          => 'yosemite-lite',
		'has_notices' => true,
	] );
}

function yosemite_lite_register_ocdi_plugins( $plugins ) {
	return array_merge( $plugins, yosemite_lite_required_plugins() );
}

/**
 * List of required plugins
 */
function yosemite_lite_required_plugins() {
	return [
		[
			'name' =>  'Jetpack',
			'slug' => 'jetpack',
		],
		[
			'name' =>  'Slim SEO',
			'slug' => 'slim-seo',
		],
		[
			'name' =>  'Falcon',
			'slug' => 'falcon',
		],
		[
			'name' =>  'One Click Demo Import',
			'slug' => 'one-click-demo-import',
		],
	];
}
