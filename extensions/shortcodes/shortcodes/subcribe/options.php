<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'icon'    => array(
		'type'  => 'icon',
		'set'   => 'custom_icon',
		'value' => 'icon stroke icon-Imbox',
		'label' => esc_html__('Choose an Icon', 'my-theme'),
	),
	'title'   => array(
		'type'  => 'text',
		'label' => esc_html__( 'Title', 'my-theme' ),
	),
	'desc' => array(
		'type'  => 'textarea',
		'label' => esc_html__( 'Description', 'my-theme' ),
		'desc'  => esc_html__( 'Enter the desired content', 'my-theme' ),
	),
);