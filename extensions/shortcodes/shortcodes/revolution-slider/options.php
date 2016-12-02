<?php if (!defined('FW')) die('Forbidden');

if ( function_exists('is_plugin_active') && is_plugin_active( 'revslider/revslider.php' ) ) {
	global $wpdb;
	$rs = $wpdb->get_results(
		"SELECT id, title, alias FROM " . $wpdb->prefix . "revslider_sliders ORDER BY id ASC LIMIT 999"
	);
	$revsliders = array();
	if ( $rs ) {
		foreach ( $rs as $slider ) {
			$revsliders[$slider->alias] = $slider->title;
		}
	} else {
		$revsliders['0'] = esc_html__('No sliders found', 'my-theme');
	}
}else{
	$revsliders['0'] = esc_html__('No sliders found', 'my-theme');
}

$options = array(
	'alias' => array(
		'type' => 'select',
		'label' => esc_html__('Slide', 'my-theme'),
		'choices' => $revsliders
	)
);