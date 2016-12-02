<?php if (!defined('FW')) die( 'Forbidden' ); ?>

<?php $color_class = !empty($atts['color']) ? "fw-btn-{$atts['color']}" : ''; ?>
<?php if($atts['center'] == 'yes') : ?>
<div class="text-center">
	<a href="<?php echo esc_attr($atts['link']) ?>" target="<?php echo esc_attr($atts['target']) ?>" class="btn btn-primary btn-effect <?php echo esc_attr($color_class); ?>">
		<?php echo $atts['label']; ?>
	</a>
</div>
<?php else : ?>
	<a href="<?php echo esc_attr($atts['link']) ?>" target="<?php echo esc_attr($atts['target']) ?>" class="btn btn-primary btn-effect <?php echo esc_attr($color_class); ?>">
		<?php echo $atts['label']; ?>
	</a>
<?php endif; ?>

