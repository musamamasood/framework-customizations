<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts
 */
$prcing_tables = $atts['pricing_tables'];
?>
<!-- end wrap-title -->
<ul class="list-pricing list-unstyled">
	<?php foreach($prcing_tables as $prcing_table) : ?>
	<li class="list-pricing__item wow zoomIn" data-wow-duration="2s"> <i class="<?php echo esc_attr($prcing_table['icon']); ?>"></i>
		<div class="list-pricing__name"><?php echo esc_html($prcing_table['title']); ?></div>
		<span class="list-pricing__currency"><?php echo esc_html($prcing_table['currency']); ?></span> <span class="list-pricing__value"><?php echo esc_html($prcing_table['price']); ?></span> <span class="list-pricing__month"><?php echo esc_html($prcing_table['time']); ?></span>
		<div class="list-pricing__inner">
			<ul class="list-pricing__description list-unstyled">
				<?php foreach($prcing_table['content'] as $content) : ?>
					<li><?php echo esc_html($content); ?></li>
				<?php endforeach; ?>
			</ul>
			<a class="list-pricing__link" target="<?php echo esc_html($prcing_table['button']['target']); ?>" href="<?php echo esc_html($prcing_table['button']['link']); ?>"><?php echo esc_html($prcing_table['button']['label']); ?></a> </div>
	</li>
	<?php endforeach; ?>
</ul>