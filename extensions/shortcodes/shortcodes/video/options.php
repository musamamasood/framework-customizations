<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'bg_image' => array(
		'label'   => esc_html__('Background Image', 'my-theme'),
		'desc'    => esc_html__('Upload your background image here!', 'my-theme'),
		'type'    => 'upload',
		'image_only' => true
	),
	'video_url' => array(
		'label'   => esc_html__('Video Url', 'my-theme'),
		'desc'    => esc_html__('Paste your video url here.', 'my-theme'),
		'type'    => 'text',
	),
	'title' => array(
		'label'   => esc_html__('Video Title', 'my-theme'),
		'desc'    => esc_html__('Paste your video title here.', 'my-theme'),
		'type'    => 'text',
	),
	'sub_title' => array(
		'label'   => esc_html__('Video Sub Title', 'my-theme'),
		'desc'    => esc_html__('Paste your video sub title here.', 'my-theme'),
		'type'    => 'textarea',
	),

);