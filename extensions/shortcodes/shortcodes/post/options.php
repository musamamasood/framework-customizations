<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'style'              => array(
		'label'   => esc_html__( 'Style', 'my-theme' ),
		'type'    => 'short-select',
		'value'   => 'grid',
		'desc'    => esc_html__( 'Select style of list post.',
			'my-theme' ),
		'choices' => array(
			'grid' => esc_html__('Grid', 'my-theme'),
			'slide' => esc_html__('Slide', 'my-theme'),
		),
	),
	'post_items' => array(
		'type'       => 'multi-select',
		'label'      => esc_html__( 'Select Post(s)', 'my-theme' ),
		'population' => 'posts',
		'source'     => 'post',
	),
);