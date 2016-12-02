<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'bg_image' => array(
		'label'   => esc_html__('Background Image', 'my-theme'),
		'desc'    => esc_html__('Upload a background image', 'my-theme'),
		'type'    => 'upload',
		'images_only' => true
	),
	'counters'               => array(
		'label'        => esc_html__( 'Add Counter', 'my-theme' ),
		'type'         => 'addable-popup',
		'value'        => array(),
		'popup-controls' => array(//'custom' => '<small class="dashicons dashicons-smiley" title="Custom"></small>',
		),
		'popup-options'  => array(
			'icon'                      => array(
				'label' => esc_html__( 'Icon', 'my-theme' ),
				'type'  => 'icon',
				'set' => 'custom_icon',
				'value' => 'icon stroke icon-Agenda'
			),
			'title'     => array(
				'label' => esc_html__( 'Title', 'my-theme' ),
				'type'  => 'text',
				'value' => 'Title Demo',
			),
			'number' => array(
				'label' => esc_html__( 'Number', 'my-theme' ),
				'type'  => 'short-text',
				'value' => 1000,
				'desc'  => esc_html__( 'Input a number here.',
					'my-theme' ),
			),
		),
		'template'     => '{{- title }}',
	),

);