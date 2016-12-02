<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => esc_html__( 'Icon Tabs', 'my-theme' ),
	'description' => esc_html__( 'Add some Icon Tabs', 'my-theme' ),
	'tab'         => esc_html__( 'Content Elements', 'my-theme' ),
	'icon'		  => 'fa fa-folder'
);