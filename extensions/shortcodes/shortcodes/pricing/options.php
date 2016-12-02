<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'pricing_tables'             => array(
		'label'         => esc_html__( 'Pricing Table', 'my-theme' ),
		'type'          => 'addable-popup',
		'desc'          => esc_html__( 'Add some pricing tables here.',
			'my-theme' ),
		'template'      => '{{- title }}',
		'popup-options' => array(
			'icon'    => array(
				'type'  => 'icon',
				'set'   => 'custom_icon',
				'value' => 'icon stroke icon-Agenda',
				'label' => esc_html__('Choose an Icon', 'my-theme'),
			),
			'title'   => array(
				'type'  => 'text',
				'label' => esc_html__( 'Title of the Table', 'my-theme' ),
			),
			'price' => array(
				'type'  => 'short-text',
				'label' => esc_html__( 'Price', 'my-theme' ),
				'desc'  => esc_html__( 'Enter the price', 'my-theme' ),
			),
			'currency' => array(
				'type'  => 'short-text',
				'label' => esc_html__( 'Currency', 'my-theme' ),
				'value' => '$',
				'desc'  => esc_html__( 'Enter the Currency', 'my-theme' ),
			),
			'time' => array(
				'type'         => 'short-text',
				'label'        => 'Time',
				'desc'         => false,
				'value'        => esc_html__('/ Month', 'my-theme'),
			),
			'content'            => array(
				'label'  => esc_html__( 'Description', 'my-theme' ),
				'type'   => 'addable-option',
				'option' => array(
					'type' => 'text',
				),
				'value'  => array( 'Option 1', 'Option 2', 'Option 3' ),
				'desc'   => esc_html__( 'Add content to the table.',
					'my-theme' ),
			),
			'button' =>  array(
					'type'          => 'popup',
					'popup-title'   => esc_html__( 'Button', 'my-theme' ),
					'button'        => esc_html__( 'Add', 'my-theme' ),
					'popup-options' => array(
						'label'  => array(
							'label' => esc_html__( 'Button Label', 'my-theme' ),
							'desc'  => esc_html__( 'This is the text that appears on your button', 'my-theme' ),
							'type'  => 'text',
							'value' => 'Submit'
						),
						'link'   => array(
							'label' => esc_html__( 'Button Link', 'my-theme' ),
							'desc'  => esc_html__( 'Where should your button link to', 'my-theme' ),
							'type'  => 'text',
							'value' => '#'
						),
						'target' => array(
							'type'  => 'switch',
							'label'   => esc_html__( 'Open Link in New Window', 'my-theme' ),
							'desc'    => esc_html__( 'Select here if you want to open the linked page in a new window', 'my-theme' ),
							'right-choice' => array(
								'value' => '_blank',
								'label' => esc_html__('Yes', 'my-theme'),
							),
							'left-choice' => array(
								'value' => '_self',
								'label' => esc_html__('No', 'my-theme'),
							),
						),
					)
			)

		),
	),
);

