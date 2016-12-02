<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'cases_option' => array(
        'title'   => 'Case Details',
        'type'    => 'box',
        'options' => array(
		
            'cases_date_range' => array(
                'label'        => esc_html__( 'Date Range', 'my-theme' ),
                'type'         => 'text',
                'desc'         => esc_html__( 'Input Date Range (i.e. “June 30 – July 6, 2016”)' )
            ),
			
			'cases_additional_images' => array(
                'label'        => esc_html__( 'Additional Images', 'my-theme' ),
                'type'         => 'multi-upload',
                'desc'         => esc_html__( 'Upload additional Images' ),
				'images_only'  => true
            ),
			
			'cases_overlay_image' => array(
								'type'  => 'radio',
								'value' => 'none',
								'choices' => array(
									'none' => __('None', 'my-theme'),
									'solved' => __('Solved', 'my-theme'),
									'captured' => __('Captured', 'my-theme'),
								),
			),
			
			'cases_custom_text' => array(
                'label'        => esc_html__( 'Custom Text', 'my-theme' ),
                'type'         => 'wp-editor',
                'value'        => 'If you have information on a fugitive or a crime, contact Crime Stoppers at 843-7867. Information leading to an arrest can earn you up to $1,000 cash reward and you will remain completely anonymous. For more information, contact Crime Stoppers 843-7867 or see us at www.crimestoppersnm.org.
				
You can now text your tip to Crime Stoppers and still remain completely anonymous. Visit www.smscrimetips.com for more information.',
                'desc'         => esc_html__( 'This text will appear below the cases post type' ),
            )
        )
    )
);