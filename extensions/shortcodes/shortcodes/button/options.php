<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'label'  => array(
		'label' => esc_html__( 'Button Label', 'my-theme' ),
		'desc'  => esc_html__( 'This is the text that appears on your button', 'my-theme' ),
		'type'  => 'text',
		'value' => 'Submit'
	),
	'link'   => array(
		'label' => esc_html__( 'Button Link', 'my-theme' ),
		'desc'  => esc_html__( 'Where should your button link to', 'my-theme' ),
		'type'  => 'text',
		'value' => '#'
	),
	'target' => array(
		'type'  => 'switch',
		'label'   => esc_html__( 'Open Link in New Window', 'my-theme' ),
		'desc'    => esc_html__( 'Select here if you want to open the linked page in a new window', 'my-theme' ),
		'right-choice' => array(
			'value' => '_blank',
			'label' => esc_html__('Yes', 'my-theme'),
		),
		'left-choice' => array(
			'value' => '_self',
			'label' => esc_html__('No', 'my-theme'),
		),
	),
	'center'                    => array(
		'label'        => esc_html__( 'Center', 'my-theme' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => esc_html__( 'Yes', 'my-theme' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => esc_html__( 'No', 'my-theme' )
		),
		'value'        => 'yes',
	),
	'color'  => array(
		'label'   => esc_html__( 'Button Color', 'my-theme' ),
		'desc'    => esc_html__( 'Choose a color for your button', 'my-theme' ),
		'type'    => 'select',
		'choices' => array(
			''      => esc_html__('Default', 'my-theme'),
			'black' => esc_html__( 'Black', 'my-theme' ),
			'blue'  => esc_html__( 'Blue', 'my-theme' ),
			'green' => esc_html__( 'Green', 'my-theme' ),
			'red'   => esc_html__( 'Red', 'my-theme' ),
		)
	),
);