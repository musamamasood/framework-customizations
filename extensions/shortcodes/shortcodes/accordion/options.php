<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title' => array(
		'type' => 'text',
		'label' => esc_html__('Title', 'my-theme'),
		'help' => esc_html__('Add [ ] to hightlight the text.', 'my-theme')
	),
	'tabs' => array(
		'type'          => 'addable-popup',
		'label'         => esc_html__( 'Tabs', 'my-theme' ),
		'popup-title'   => esc_html__( 'Add/Edit Tabs', 'my-theme' ),
		'desc'          => esc_html__( 'Create your tabs', 'my-theme' ),
		'template'      => '{{=tab_title}}',
		'popup-options' => array(
			'tab_title'   => array(
				'type'  => 'text',
				'label' => esc_html__('Title', 'my-theme')
			),
			'tab_content' => array(
				'type'  => 'textarea',
				'label' => esc_html__('Content', 'my-theme')
			),
			'default'                    => array(
				'label'        => esc_html__( 'Set Active', 'my-theme' ),
				'type'         => 'switch',
				'right-choice' => array(
					'value' => 'yes',
					'label' => esc_html__( 'Yes', 'my-theme' )
				),
				'left-choice'  => array(
					'value' => 'no',
					'label' => esc_html__( 'No', 'my-theme' )
				),
				'value'        => 'no',
			),
		)
	)
);