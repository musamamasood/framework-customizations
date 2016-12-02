<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'tabs' => array(
		'type'          => 'addable-popup',
		'label'         => esc_html__( 'Tabs', 'my-theme' ),
		'popup-title'   => esc_html__( 'Add/Edit Tab', 'my-theme' ),
		'desc'          => esc_html__( 'Create your tabs', 'my-theme' ),
		'template'      => '{{=tab_title}}',
		'popup-options' => array(
			'tab_icon'                      => array(
				'label' => esc_html__( 'Icon', 'my-theme' ),
				'type'  => 'icon',
				'set'   => 'custom_icon',
				'value' => 'icon stroke icon-Agenda',
			),
			'tab_title' => array(
				'type'  => 'text',
				'label' => esc_html__('Title', 'my-theme')
			),
			'tab_content' => array(
				'type'  => 'textarea',
				'label' => esc_html__('Content', 'my-theme')
			),
			'tab_content' => array(
				'label'         => esc_html__( 'Content', 'my-theme' ),
				'type'          => 'addable-popup',
				'template'      => '{{- tab_content_title }}',
				'limit' => 1,
				'popup-options' => array(
					'tab_content_title' => array(
						'type'  => 'text',
						'label' => esc_html__('Title Content', 'my-theme')
					),
					'tab_content_subtitle' => array(
						'type'  => 'text',
						'value' => 'COURSES AVAILABLE : [400]',
						'help'  => esc_html__('Add [] to highlight word', 'my-theme'),
						'label' => esc_html__('Sub Title Content', 'my-theme')
					),
					'tab_content_desc' => array(
						'type'  => 'wp-editor',
						'label' => esc_html__('Description', 'my-theme'),
						'reinit' => true,
					),

				)
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
						'value' => 'SEE COURSES'
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
			),
			'default'                    => array(
				'label'        => esc_html__( 'Default', 'my-theme' ),
				'type'         => 'switch',
				'value'        => 'no',
				'desc'         => esc_html__( 'Set this tab to default.',
					'my-theme' ),
			),
		),
	)
);