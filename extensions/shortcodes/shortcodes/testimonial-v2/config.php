<?php if (!defined('FW')) die('Forbidden');

$cfg = array(
	'page_builder' => array(
		'title'       => esc_html__( 'Testimonial', 'my-theme' ),
		'description' => esc_html__( 'Add some Testimonials', 'my-theme' ),
		'tab'         => esc_html__( 'Content Elements', 'my-theme' ),
		'icon'        => 'fa fa-commenting-o',
		'title_template' => '{{- title }}: {{- o.title }}',
	)
);