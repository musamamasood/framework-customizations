<?php if (!defined('FW')) die('Forbidden');

$cfg = array(
	'page_builder' => array(
		'title'       => esc_html__( 'Facebook Likebox', 'my-theme' ),
		'description' => esc_html__( 'Show Facebook likebox using iframe.', 'my-theme' ),
		'tab'         => esc_html__( 'Content Elements', 'my-theme' ),
		'icon' 		  => 'fa fa-facebook',
		'title_template' => '{{- title }}',
	)
);