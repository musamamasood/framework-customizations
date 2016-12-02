<?php if (!defined('FW')) die('Forbidden');

$cfg = array();

$cfg['page_builder'] = array(
	'title'         => esc_html__('Special Heading', 'my-theme'),
	'description'   => esc_html__('Add a Special Heading', 'my-theme'),
	'tab'           => esc_html__('Content Elements', 'my-theme'),
	'title_template' => '{{- title }}: {{- o.title }}',
);