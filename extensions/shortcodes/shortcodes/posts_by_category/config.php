<?php if (!defined('FW')) die('Forbidden');

$cfg = array(
	'page_builder' => array(
		'title'       => esc_html__( 'Cateogry Posts', 'my-theme' ),
		'description' => esc_html__( 'Show posts by category', 'my-theme' ),
		'tab'         => esc_html__( 'Content Elements', 'my-theme' ),
		'icon' 		  => 'fa fa-pencil-square-o',
		'title_template' => '{{- title }}: {{- o.post_title }}',
	)
);