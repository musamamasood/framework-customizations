<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$bg_color = '';
if ( ! empty( $atts['background_color'] ) ) {
	$bg_color = 'background-color:' . $atts['background_color'] . ';';
}

$font_color = '';
if ( ! empty( $atts['text_color'] ) ) {
	$font_color = 'color:' . $atts['text_color'] . ';';
}


$bg_image = '';
if ( ! empty( $atts['background_image'] ) && ! empty( $atts['background_image']['data']['icon'] ) ) {
	$bg_image = 'background-image:url(' . $atts['background_image']['data']['icon'] . ');';
}

$bg_video_data_attr    = '';
$section_extra_classes = '';
if ( ! empty( $atts['video'] ) ) {
	$filetype           = wp_check_filetype( $atts['video'] );
	$filetypes          = array( 'mp4' => 'mp4', 'ogv' => 'ogg', 'webm' => 'webm', 'jpg' => 'poster' );
	$filetype           = array_key_exists( (string) $filetype['ext'], $filetypes ) ? $filetypes[ $filetype['ext'] ] : 'video';
	$bg_video_data_attr = 'data-wallpaper-options="' . fw_htmlspecialchars( json_encode( array( 'source' => array( $filetype => $atts['video'] ) ) ) ) . '"';
	$section_extra_classes .= ' background-video ';
}

if ( ! empty( $atts['section_class'] ) ) {
	$section_extra_classes = $atts['section_class'];
}

$section_style   = ( $bg_color || $bg_image || $font_color ) ? 'style="' . $bg_color . $font_color . $bg_image . '"' : '';
$container_class = ( isset( $atts['is_fullwidth'] ) && $atts['is_fullwidth'] ) ? 'fw-container-fluid' : 'container';
?>
<section class="fw-main-row <?php echo $section_extra_classes ?>" <?php echo $section_style; ?> <?php echo $bg_video_data_attr; ?>>
	<h2 class="screen-reader-text" style="display: none"><?php esc_html_e('Heading section', 'my-theme'); ?></h2>
	<div class="<?php echo $container_class; ?>">
		<?php echo do_shortcode( $content ); ?>
	</div>
</section>
