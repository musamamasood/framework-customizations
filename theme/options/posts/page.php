<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'page_option' => array(
        'title'   => 'Page Options',
        'type'    => 'box',
        'options' => array(
            'page_option_page_header'       => array(
                'type'         => 'multi-picker',
                'label'        => false,
                'desc'         => false,
                'picker'       => array(
                    'gadget' => array(
                        'label'        => esc_html__( 'Custom Page Header', 'my-theme' ),
                        'type'         => 'short-select',
                        'choices' => array(
                            'default' => 'Default',
                            'enable' => esc_html__( 'Enable', 'my-theme' ),
                            'disable' => esc_html__( 'Disable', 'my-theme' )
                        ),
                        'value'        => 'default',
                        'desc'         => esc_html__('Choose Enable if you want to custom Page Header for this page only.', 'my-theme'),
                        'help'         => esc_html__( 'Page header will show image, page title and breadcrumb of page.', 'my-theme' ),
                    )
                ),
                'choices'      => array(
                    'enable'  => array(
                        'page_header_bg_image' => array(
                            'label'   => esc_html__( 'Page header background', 'my-theme' ),
                            'type'    => 'upload',
                        ),
                        'page_header_overlay' => array(
                            'label' => esc_html__( 'Overlay Color', 'my-theme' ),
                            'type'  => 'rgba-color-picker',
                            'value' => 'rgba(45, 62, 80, 0.85)',
                            'desc'  => esc_html__( 'Add a overlay color to background image.', 'my-theme' ),
                        ),
                        'page_alternative_title' => array(
                            'label' => esc_html__('Alternative Title', 'my-theme'),
                            'type' => 'text',
                            'desc' => esc_html__('This will replace title of breadcrumb', 'my-theme')
                        ),
                    ),
                ),
                'show_borders' => false,
            ),
            'page_option_footer_border'                    => array(
                'label'        => esc_html__( 'Footer Border', 'my-theme' ),
                'type'         => 'switch',
                'right-choice' => array(
                    'value' => 'yes',
                    'label' => esc_html__( 'Enable', 'my-theme' )
                ),
                'left-choice'  => array(
                    'value' => 'no',
                    'label' => esc_html__( 'Disable', 'my-theme' )
                ),
                'value'        => 'yes',
                'desc'         => esc_html__( 'Choose Enable to show border top of the footer.', 'my-theme' ),
            ),
        )
    )
);