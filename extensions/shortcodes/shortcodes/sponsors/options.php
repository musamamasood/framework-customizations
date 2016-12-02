<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'display_border'                    => array(
		'label'        => esc_html__( 'Display borders', 'my-theme' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => esc_html__( 'Yes', 'my-theme' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => esc_html__( 'No', 'my-theme' )
		),
		'value'        => 'no',
	),
	'images'       => array(
		'label' => esc_html__( 'Sponsors Logo', 'my-theme' ),
		'desc'  => esc_html__( 'Upload multi Sponsors logo.',
			'my-theme' ),
		'type'  => 'multi-upload',
	),
	'desc'         => array(
		'label' => esc_html__( 'Description', 'my-theme' ),
		'desc'  => esc_html__( 'Add the description', 'my-theme' ),
		'type'  => 'textarea',
	),
	'color_text'              => array(
		'label' => esc_html__( 'Color Text', 'my-theme' ),
		'type'  => 'color-picker',
		'value' => '#333',
		'desc'  => esc_html__( 'Set color for title text.',
			'my-theme' ),
	),
);