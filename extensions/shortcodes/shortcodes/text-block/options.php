<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'text' => array(
		'type'   => 'wp-editor',
		'reinit' => true,
		'label'  => esc_html__( 'Content', 'my-theme' ),
		'desc'   => esc_html__( 'Enter some content for this texblock', 'my-theme' ),
		'size'  => 'large',
		'editor_type' => 'tinymce',
		'editor_height' => 800,
		'tinymce' => true,
		'teeny' => false,
		'wpautop' => false,
	),
);
