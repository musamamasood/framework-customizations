<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title' => array(
		'label' => esc_html__( 'Title', 'my-theme' ),
		'type'  => 'text',
		'value' => 'UPCOMING EVENTS',
	),
	'events'      => array(
		'type'       => 'multi-select',
		'label'      => esc_html__( 'Select: Events', 'my-theme' ),
		'population' => 'posts',
		'source'     => 'fw-event',
		'desc'       => esc_html__( 'Select multi event.', 'my-theme' ),
	),
);