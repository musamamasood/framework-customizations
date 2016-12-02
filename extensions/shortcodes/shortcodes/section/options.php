<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'is_fullwidth' => array(
		'label'        => esc_html__('Full Width', 'my-theme'),
		'type'         => 'switch',
	),
	'text_color' => array(
		'label' => esc_html__('Text Color', 'my-theme'),
		'desc'  => esc_html__('Please select the text color', 'my-theme'),
		'type'  => 'color-picker',
	),
	'background_color' => array(
		'label' => esc_html__('Background Color', 'my-theme'),
		'desc'  => esc_html__('Please select the background color', 'my-theme'),
		'type'  => 'color-picker',
	),
	'background_image' => array(
		'label'   => esc_html__('Background Image', 'my-theme'),
		'desc'    => esc_html__('Please select the background image', 'my-theme'),
		'type'    => 'background-image',
		'choices' => array(//	in future may will set predefined images
		)
	),
	'video' => array(
		'label' => esc_html__('Background Video', 'my-theme'),
		'desc'  => esc_html__('Insert Video URL to embed this video', 'my-theme'),
		'type'  => 'text',
	),
	'section_class' => array(
		'label' => esc_html__('Additional Class', 'my-theme'),
		'desc'  => esc_html__('Insert additional classes to the current section', 'my-theme'),
		'type'  => 'text',
	)
);
