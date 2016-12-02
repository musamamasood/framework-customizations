<?php if (!defined('FW')) die('Forbidden');

$cfg = array(
	'page_builder' => array(
		'title'       => esc_html__( 'Sponsors', 'my-theme' ),
		'description' => esc_html__( 'Add some Sponsors logo', 'my-theme' ),
		'tab'         => esc_html__( 'Content Elements', 'my-theme' ),
		'icon'        => 'fa fa-user-plus',
		'title_template' => '{{- title }}: {{- o.title }}',
	)
);