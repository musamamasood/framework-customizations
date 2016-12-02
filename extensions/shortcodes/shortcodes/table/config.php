<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => esc_html__( 'Table', 'my-theme' ),
	'description' => esc_html__( 'Add a Table', 'my-theme' ),
	'tab'         => esc_html__( 'Content Elements', 'my-theme' ),
	'popup_size'  => 'large'
);