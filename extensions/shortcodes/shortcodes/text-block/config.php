<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => esc_html__( 'Text Block', 'my-theme' ),
	'description' => esc_html__( 'Add a Text Block', 'my-theme' ),
	'tab'         => esc_html__( 'Content Elements', 'my-theme' ),
	'title_template' => '{{- title }}{{ if (o.text.replace(/(<([^>]+)>)/ig,"")) { }} : {{- o.text.replace(/(<([^>]+)>)/ig,"") }}{{ } }}',
	//'popup_size'  => 'large'
);
