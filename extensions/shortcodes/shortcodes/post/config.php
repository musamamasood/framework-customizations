<?php if (!defined('FW')) die('Forbidden');

$cfg = array(
	'page_builder' => array(
		'title'       => esc_html__( 'Blog Posts', 'my-theme' ),
		'description' => esc_html__( 'Select some blog posts', 'my-theme' ),
		'tab'         => esc_html__( 'Content Elements', 'my-theme' ),
		'icon' 		  => 'fa fa-pencil-square-o',
		'title_template' => '{{- title }}: {{- o.style }}',
	)
);