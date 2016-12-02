<?php if (!defined('FW')) die( 'Forbidden' );
/**
 * @var $atts
 */

$replace_target = array('<strong>','</strong>');
$replace_source = array('[',']');
$title = str_replace($replace_source, $replace_target, esc_html($atts['title']));
$border = $atts['border'];
if($atts['centered'] == 'yes') : ?>

<div class="<?php if($border == 'yes') echo 'wrap-title'; ?> fw-heading fw-heading-<?php echo esc_attr($atts['heading']); ?> <?php echo !empty($atts['centered']) ? 'fw-heading-center' : ''; ?>">
	<?php $heading = "<{$atts['heading']} class='fw-special-title ui-title-block' style='color: {$atts['color_title']};'>{$title}</{$atts['heading']}>"; ?>
	<?php echo $heading; ?>
	<?php if (!empty($atts['subtitle'])): ?>
		<div class="fw-special-subtitle ui-subtitle-block ui-subtitle-block_mod-b" style="color: <?php echo esc_attr($atts['color_subtitle']); ?>"><?php echo esc_html($atts['subtitle']); ?></div>
	<?php endif; ?>
</div>

<?php else : ?>
	<?php $heading = "<{$atts['heading']} class='fw-special-title ui-title-block' style='color: {$atts['color_title']};'>{$title}</{$atts['heading']}>"; ?>
	<?php echo $heading; ?>

	<?php if (!empty($atts['subtitle'])): ?>
	<div class="wrap-subtitle">
		<div class="ui-subtitle-block ui-subtitle-block_w-line" style="color: <?php echo esc_attr($atts['color_subtitle']); ?>"> <?php echo esc_html($atts['subtitle']); ?> </div>
	</div>
	<?php endif; ?>
<?php endif; ?>