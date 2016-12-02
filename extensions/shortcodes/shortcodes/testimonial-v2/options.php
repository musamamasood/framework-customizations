<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'title'         => array(
		'label' => esc_html__( 'Title', 'my-theme' ),
		'desc'  => esc_html__( 'Option Testimonials Title', 'my-theme' ),
		'type'  => 'text',
	),
	'testimonials' => array(
		'label'         => esc_html__( 'Testimonials', 'my-theme' ),
		'popup-title'   => esc_html__( 'Add/Edit Testimonial', 'my-theme' ),
		'desc'          => esc_html__( 'Here you can add, remove and edit your Testimonials.', 'my-theme' ),
		'type'          => 'addable-popup',
		'template'      => '{{=author_name}}',
		'popup-options' => array(
			'content'       => array(
				'label' => esc_html__( 'Quote', 'my-theme' ),
				'desc'  => esc_html__( 'Enter the testimonial here', 'my-theme' ),
				'type'  => 'textarea',
				'teeny' => true
			),
			'author_avatar' => array(
				'label' => esc_html__( 'Image', 'my-theme' ),
				'desc'  => esc_html__( 'Either upload a new, or choose an existing image from your media library', 'my-theme' ),
				'type'  => 'upload',
			),
			'author_name'   => array(
				'label' => esc_html__( 'Name', 'my-theme' ),
				'desc'  => esc_html__( 'Enter the Name of the Person to quote', 'my-theme' ),
				'type'  => 'text'
			),
			'author_job'    => array(
				'label' => esc_html__( 'Position', 'my-theme' ),
				'desc'  => esc_html__( 'Can be used for a job description', 'my-theme' ),
				'type'  => 'text'
			),
		)
	)

);