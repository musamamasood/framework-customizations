<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'color_title'              => array(
		'label' => esc_html__( 'Color Title', 'my-theme' ),
		'type'  => 'color-picker',
		'value' => '#333',
		'desc'  => esc_html__( 'Set color for title text.',
			'my-theme' ),
	),
	'title'    => array(
		'type'  => 'text',
		'label' => esc_html__( 'Heading Title', 'my-theme' ),
		'desc'  => esc_html__( 'Write the heading title content', 'my-theme' ),
		'help' => esc_html__('Use [ ] if you want to highlight word.', 'my-theme')
	),
	'color_subtitle'              => array(
		'label' => esc_html__( 'Color SubTitle', 'my-theme' ),
		'type'  => 'color-picker',
		'value' => '#777',
		'desc'  => esc_html__( 'Set color for sub title text.',
			'my-theme' ),
	),
	'subtitle' => array(
		'type'  => 'text',
		'label' => esc_html__( 'Heading Subtitle', 'my-theme' ),
		'desc'  => esc_html__( 'Write the heading subtitle content', 'my-theme' ),
	),
	'heading' => array(
		'type'    => 'select',
		'label'   => esc_html__('Heading Size', 'my-theme'),
		'choices' => array(
			'h1' => 'H1',
			'h2' => 'H2',
			'h3' => 'H3',
			'h4' => 'H4',
			'h5' => 'H5',
			'h6' => 'H6',
		)
	),
	'centered' => array(
		'type'    => 'switch',
		'label'   => esc_html__('Centered', 'my-theme'),
		'value' 	=> 'yes',
		'right-choice' => array(
			'value' => 'yes',
			'label' => esc_html__( 'Yes', 'my-theme' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => esc_html__( 'No', 'my-theme' )
		),
	),
	'border' => array(
		'type'    => 'switch',
		'label'   => esc_html__('Border Bottom', 'my-theme'),
		'value' 	=> 'yes',
		'right-choice' => array(
			'value' => 'yes',
			'label' => esc_html__( 'Yes', 'my-theme' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => esc_html__( 'No', 'my-theme' )
		),
	)
);
