<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<div class="textblock-shortcode">
	<?php echo do_shortcode( $atts['text'] ); ?>
</div>