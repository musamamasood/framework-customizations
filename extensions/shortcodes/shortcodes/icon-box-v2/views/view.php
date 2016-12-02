<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts
 */
$iconboxs = $atts['iconboxs'];
$style = $atts['style'];
?>
<?php if($style == 'inline') : ?>
<!-- end wrap-title -->
<ul class="advantages advantages_mod-b list-unstyled">
	<?php foreach($iconboxs as $iconbox) : ?>
		<li class="advantages__item wow zoomIn" data-wow-duration="2s">
			<div class="advantages__inner">
				<div class="advantages__info"> <span class="advantages__icon"><i class="<?php echo esc_attr($iconbox['icon']); ?>"></i></span>
					<h3 class="ui-title-inner decor decor_mod-a"><?php echo esc_html($iconbox['title']); ?></h3>
				</div>
			</div>
			<p><?php echo esc_html($iconbox['content']); ?></p>
		</li>
	<?php endforeach; ?>

</ul>

<?php else : ?>

<ul class="advantages advantages_mod-c list-unstyled">
	<?php foreach($iconboxs as $iconbox) : ?>
		<li class="advantages__item">
			<span class="advantages__icon decor decor_mod-a"><i class="<?php echo esc_attr($iconbox['icon']); ?>"></i></span>
			<span class="advantages__title ui-title-inner"><?php echo esc_html($iconbox['title']); ?></span>
		</li>
	<?php endforeach; ?>
</ul>
<?php endif; ?>