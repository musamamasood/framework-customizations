<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'bg_color' => array(
		'label'   => esc_html__('Background Color', 'my-theme'),
		'desc'    => esc_html__('Please provide background color for this column.', 'my-theme'),
		'type'    => 'rgba-color-picker',
		'value'   => ''
	),
	'column_class' => array(
			'label'   => esc_html__('Class', 'my-theme'),
			'desc'    => esc_html__('Please provide extra css classes here for this column.', 'my-theme'),
			'type'    => 'text',
			'value'   => ''
	),
);