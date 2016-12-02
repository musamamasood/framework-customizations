<?php
$options = array(
    'c_header' => array(
        'type' => 'box',
        'title' => esc_html__('General', 'my-theme'),
        'options' => array(
            'c_preload'                    => array(
                'label'        => esc_html__( 'Enable Preload', 'my-theme' ),
                'type'         => 'switch',
                'right-choice' => array(
                    'value' => 'yes',
                    'label' => esc_html__( 'Yes', 'my-theme' )
                ),
                'left-choice'  => array(
                    'value' => 'no',
                    'label' => esc_html__( 'No', 'my-theme' )
                ),
                'value'        => 'yes',
                'desc'         => esc_html__( 'Preload will be displayed before the site is load fully.', 'my-theme' ),
            ),
            'c_logo' => array(
                'label' => esc_html__('Upload Logo', 'my-theme'),
                'desc' => esc_html__('Logo will be displayed in Header of page.', 'my-theme'),
                'type' => 'upload'
            ),
            'c_sticky_menu'                    => array(
                'label'        => esc_html__( 'Sitcky Menu', 'my-theme' ),
                'type'         => 'switch',
                'right-choice' => array(
                    'value' => 'no',
                    'label' => esc_html__( 'Yes', 'my-theme' )
                ),
                'left-choice'  => array(
                    'value' => 'no',
                    'label' => esc_html__( 'No', 'my-theme' )
                ),
                'value'        => 'yes',
                'desc'         => esc_html__( 'The menu will be fixed at top bar when the site is scrolled.', 'my-theme' ),
            ),
            'c_logo_sticky' => array(
                'label' => esc_html__('Upload Sticky Logo', 'my-theme'),
                'desc' => esc_html__('Logo will be used in sticky Menu.', 'my-theme'),
                'type' => 'upload'
            ),
			'c_trans_menu'                    => array(
                'label'        => esc_html__( 'Transparent Menu', 'my-theme' ),
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
                'desc'         => esc_html__( 'The menu will be set to transparent background.', 'my-theme' ),
            ),
            'c_topbar'       => array(
                'type'         => 'multi-picker',
                'label'        => false,
                'desc'         => false,
                'picker'       => array(
                    'gadget' => array(
                        'label'        => esc_html__( 'Topbar', 'my-theme' ),
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
                        'desc'         => esc_html__( 'Enable Topbar section to display extrar imformation in header.', 'my-theme' ),
                    )
                ),
                'choices'      => array(
                    'yes'  => array(
                        'c_topbar_left'  => array(
                            'type'  => 'textarea',
                            'label' => esc_html__( 'Topbar Left', 'my-theme' ),
                            'value' => '
                            <div class="top-header__contacts"><i class="icon stroke icon-Phone2"></i>(000) 0000 12345</div>
								<div class="top-header__contacts">
								<i class="icon stroke icon-Mail"></i><a href="mailto:info@crimestoppersnm.org">Info@crimestoppersnm.org</a></div>
								<div class="top-header__link">
									<button class="btn-header btn-effect">LATEST</button>
									<span>Sample Text Line Goes Here ...</span>
								</div>
                            '
                        ),
                    ),
                ),
                'show_borders' => false,
            ),
            'c_head_social'    => array(
                'label'        => esc_html__( 'Social Links', 'my-theme' ),
                'type'         => 'addable-box',
                'value'        => array(),
                'desc'         => esc_html__( 'Add multiple social Icons to header.', 'my-theme' ),
                'box-controls' => array(
                ),
                'box-options'  => array(
                    'icon'                      => array(
                        'label' => esc_html__( 'Icon', 'my-theme' ),
                        'type'  => 'icon',
                        'value' => 'fa fa-facebook',
                        'desc'  => esc_html__( 'Select social icon here!.', 'my-theme' ),
                    ),
                    'url'     => array(
                        'label' => esc_html__( 'Link URL:', 'my-theme' ),
                        'type'  => 'text',
                        'value' => 'http://',
                    ),
                ),
                'template'     => '{{- url }}',
            ),
            'c_head_phone' => array(
                'label' => esc_html__('Phone Number', 'my-theme'),
                'type' => 'text',
                'value' => '(505) 843-STOP',
                'desc' => esc_html__('Please provide phone number for header.', 'my-theme')
            ),
            'c_head_info' => array(
                'label' => esc_html__('Header Text', 'my-theme'),
                'type' => 'text',
                'value' => 'Tips earn cash and we NEVER ask your name',
                'desc' => esc_html__('This text will be displayed below the phone number in header.', 'my-theme')
            ),
        ),
    ),
    'c_page_header' => array(
        'type' => 'box',
        'title' => esc_html__('Page Header', 'my-theme'),
        'options' => array(
            'c_breadcrumb'                    => array(
                'label'        => esc_html__( 'Breadcrumb', 'my-theme' ),
                'type'         => 'switch',
                'right-choice' => array(
                    'value' => 'yes',
                    'label' => esc_html__( 'Yes', 'my-theme' )
                ),
                'left-choice'  => array(
                    'value' => 'no',
                    'label' => esc_html__( 'No', 'my-theme' )
                ),
                'value'        => 'yes',
                'desc'         => esc_html__( 'Choose "yes" to show breadcrumb in all page.', 'my-theme'),
            ),
			'c_page_header'       => array(
                'type'         => 'multi-picker',
                'label'        => false,
                'desc'         => false,
                'picker'       => array(
                    'gadget' => array(
                        'label'        => esc_html__( 'Enable Page header', 'my-theme' ),
                        'type'         => 'switch',
                        'right-choice' => array(
                            'value' => 'yes',
                            'label' => esc_html__( 'Yes', 'my-theme' )
                        ),
                        'left-choice'  => array(
                            'value' => 'no',
                            'label' => esc_html__( 'No', 'my-theme' )
                        ),
                        'value'        => 'yes',
                        'help'         => esc_html__( 'Page header will show image, page title and breadcrumb of page.', 'my-theme' ),
                    )
                ),
                'choices'      => array(
                    'yes'  => array(
                        'c_header_bg_image' => array(
                            'label'   => esc_html__( 'Header Background', 'my-theme' ),
                            'type'    => 'upload',
                        ),
                        'c_header_bg_overlay' => array(
                            'label' => esc_html__( 'Overlay Color', 'my-theme' ),
                            'type'  => 'rgba-color-picker',
                            'value' => 'rgba(45, 62, 80, 0.85)',
                            'desc'  => esc_html__( 'Add a overlay color to background image.', 'my-theme' ),
                        ),
                    ),
                ),
                'show_borders' => true,
            ),
        )
    ),
    'c_footer' => array(
        'type' => 'box',
        'title' => esc_html__('Footer', 'my-theme'),
        'options' => array(
            'c_foot_color' => array(
                'label' => esc_html__('Text Color', 'my-theme'),
                'type' => 'color-picker',
                'value' => '#FFF',
                'desc' => esc_html__('Choose text color for footer.', 'my-theme'),
            ),
            'c_foot_bg' => array(
                'label' => esc_html__('Background Color', 'my-theme'),
                'type' => 'rgba-color-picker',
                'value' => '#464646',
                'desc' => esc_html__('Set color background for footer.', 'my-theme')
            ),
            'c_foot_copyright' => array(
                'label' => esc_html__('Copyright Text', 'my-theme'),
                'type' => 'textarea',
                'value' => 'LDD Web Design <br />2420 Midtown, Suite K <br />Albuquerque, NM 87107',
                'desc' => esc_html__('Set copyright text in Footer', 'my-theme')
            )
        ),
    ),
    'c_donationbtn' => array(
        'type' => 'box',
        'title' => esc_html__('Donation Button', 'my-theme'),
        'options' => array(
            'c_donationbtn_title' => array(
                'label' => esc_html__('Button Title', 'my-theme'),
                'type' => 'textarea',
                'value' => 'HELP SUPPORT AMCS <br />[DONATE NOW]',
                'desc' => esc_html__('User [] for making text bold.', 'my-theme')
            ),
			'c_donationbtn_mobile_title' => array(
                'label' => esc_html__('Mobile Button Title', 'my-theme'),
                'type' => 'text',
                'value' => 'DONATE NOW',
                'desc' => esc_html__('User [] for making text bold.', 'my-theme')
            ),
            'c_donationbtn_url' => array(
                'label' => esc_html__('Button URL', 'my-theme'),
                'type' => 'text',
                'value' => '#',
                'desc' => esc_html__('Please provide donation button url.', 'my-theme')
            ),
            'c_donationbtn_option' => array(
                'label' => esc_html__('Button URL Option', 'my-theme'),
                'type'  => 'select',
                'desc'  => esc_html__('Please provide donation button url.', 'my-theme'),
                'value' => '_blank',
                'choices' => array(
                    '_blank' => __('Open in new tab', 'my-theme'),
                    '_self'  => __('Open in same tab', 'my-theme'),
                ),
            )
        ),
    ),
    'c_submitatip' => array(
        'type' => 'box',
        'title' => esc_html__('Submit A Tip Button', 'my-theme'),
        'options' => array(
            'c_submitatip_title' => array(
                'label' => esc_html__('Button Title', 'my-theme'),
                'type' => 'text',
                'value' => 'SUBMIT A TIP ONLINE'
            ),
			'c_submitatip_mobile_title' => array(
                'label' => esc_html__('Mobile Button Title', 'my-theme'),
                'type' => 'text',
                'value' => 'SUBMIT A TIP',
                'desc' => esc_html__('User [] for making text bold.', 'my-theme')
            ),
            'c_submitatip_url' => array(
                'label' => esc_html__('Button URL', 'my-theme'),
                'type' => 'text',
                'value' => '#',
                'desc' => esc_html__('Please provide button url.', 'my-theme')
            ),
            'c_submitatip_option' => array(
                'label' => esc_html__('Button URL Option', 'my-theme'),
                'type'  => 'select',
                'value' => '_blank',
                'choices' => array(
                    '_blank' => __('Open in new tab', 'my-theme'),
                    '_self'  => __('Open in same tab', 'my-theme'),
                ),
            )
        ),
    ),
	
);
?>