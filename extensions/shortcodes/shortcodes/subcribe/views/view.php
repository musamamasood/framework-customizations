<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts
 */

?>
<div class="section-subscribe wow fadeInUp" data-wow-duration="2s">
	<div class="subscribe">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="subscribe__icon-wrap"> <i class="icon_bg <?php echo esc_attr($atts['icon']); ?>"></i><i class="icon <?php echo esc_attr($atts['icon']); ?>"></i> </div>
					<div class="subscribe__inner">
						<h2 class="subscribe__title"><?php echo esc_html($atts['title']); ?></h2>
						<div class="subscribe__description"><?php echo esc_html($atts['desc']); ?></div>
					</div>
				</div>
				<!-- end col -->
				<div class="col-sm-6">
					<form class="subscribe__form" action="get">
						<input class="subscribe__input form-control" type="text" placeholder="<?php echo esc_attr__('Your Email address ...', 'my-theme'); ?>">
						<button class="subscribe__btn btn btn-success btn-effect"><?php esc_html_e('SUBSCRIBE', 'my-theme'); ?></button>
					</form>
				</div>
				<!-- end col -->
			</div>
			<!-- end row -->
		</div>
		<!-- end container -->
	</div>
</div>
<!-- end section-subscribe -->