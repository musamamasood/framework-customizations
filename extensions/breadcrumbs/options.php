<?php if ( ! defined( 'my-theme' ) ) {
	die( 'Forbidden' );
}

/**
 * Breadcrumbs settings options
 */

$options = array(
	'box' => array(
		'title'   => false,
		'type'    => 'box',
		'options' => array(
			'homepage-title2'      => array(
				'label' => esc_html__( 'Text for Homepage', 'my-theme' ),
				'desc'  => esc_html__( 'The homepage anchor will have this text', 'my-theme' ),
				'type'  => 'text',
				'value' => esc_html__( 'Homepage', 'my-theme' )
			),
			'blogpage-title'      => array(
				'label' => esc_html__( 'Text for Blog Page', 'my-theme' ),
				'desc'  => esc_html__( 'The blog page anchor will have this text. In case homepage will be set as blog page, will be taken the homepage text', 'my-theme' ),
				'type'  => 'text',
				'value' => esc_html__( 'Blog', 'my-theme' )
			),
			'404-title'           => array(
				'label' => esc_html__( 'Text for 404 Page', 'my-theme' ),
				'desc'  => esc_html__( 'The 404 anchor will have this text', 'my-theme' ),
				'type'  => 'text',
				'value' => '404 Not Found'
			),
		)
	)
);