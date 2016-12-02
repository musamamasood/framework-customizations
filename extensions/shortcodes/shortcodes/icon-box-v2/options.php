<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'style'              => array(
		'label'   => esc_html__( 'Box Style', 'my-theme' ),
		'type'    => 'select',
		'value'   => 'inline',
		'desc'    => esc_html__( 'Click here to choose style of Iconbox.',
			'my-theme' ),
		'choices' => array(
			'inline' => 'Icon inline with the Title',
			'above'  => 'Icon Above Title'
		),
	),
	'iconboxs'             => array(
		'label'         => esc_html__( 'Icon Box', 'my-theme' ),
		'type'          => 'addable-popup',
		'desc'          => esc_html__( 'Add some icon box here.',
			'my-theme' ),
		'template'      => '{{- title }}',
		'popup-options' => array(
			'icon'    => array(
				'type'  => 'icon',
				'set'   => 'custom_icon',
				'value' => 'icon stroke icon-Agenda',
				'label' => esc_html__('Choose an Icon', 'my-theme'),
			),
			'title'   => array(
				'type'  => 'text',
				'label' => esc_html__( 'Title of the Box', 'my-theme' ),
			),
			'content' => array(
				'type'  => 'textarea',
				'label' => esc_html__( 'Content', 'my-theme' ),
				'desc'  => esc_html__( 'Enter the desired content', 'my-theme' ),
			),
		),
	),
);