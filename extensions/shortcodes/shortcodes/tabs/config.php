<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => esc_html__( 'Simple Tabs', 'my-theme' ),
	'description' => esc_html__( 'Add some Tabs', 'my-theme' ),
	'tab'         => esc_html__( 'Content Elements', 'my-theme' ),
);