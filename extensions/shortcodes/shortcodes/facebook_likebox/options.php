<?php if (!defined('FW')) die('Forbidden');

$options = array(
		'fb_width'  => array(
				'type'  => 'text',
				'label' => esc_html__( 'Width', 'my-theme' ),
				'desc'  => esc_html__( 'Please provide iframe width in "px" only.', 'my-theme' ),
				'value' => 340
		),
		'fb_height'    => array(
				'type'  => 'text',
				'label' => esc_html__( 'Height', 'my-theme' ),
				'desc'  => esc_html__( 'Please provide iframe height in "px" only.', 'my-theme' ),
				'value' => 500
		),
		'fb_page_url' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Facebook Page URL', 'my-theme' ),
				'desc'  => esc_html__( 'Please provide facebook page\'s URL', 'my-theme' ),
				'value' => 'https://facebook.com/xxx',
		),
);