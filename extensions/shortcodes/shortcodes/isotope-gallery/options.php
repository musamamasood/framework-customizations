<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'gallery_box'               => array(
		'label'        => esc_html__( 'Add a Gallery', 'my-theme' ),
		'type'         => 'addable-box',
		'value'        => array(),
		'box-controls' => array(//'custom' => '<small class="dashicons dashicons-smiley" title="Custom"></small>',
		),
		'box-options'  => array(
			'tag'     => array(
				'label' => esc_html__( 'Tag', 'my-theme' ),
				'type'  => 'text',
				'value' => 'Tag',
			),
			'gallery'       => array(
				'label' => esc_html__( 'Gallery Image', 'my-theme' ),
				'desc'  => esc_html__( 'Upload multi image here.', 'my-theme' ),
				'type'  => 'multi-upload',
			),
		),
		'template'     => '{{- tag }}',
	),
);