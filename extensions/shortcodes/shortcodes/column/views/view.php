<?php if (!defined('FW')) die('Forbidden');

$class = fw_ext_builder_get_item_width('page-builder', $atts['width'] . '/frontend_class');
$bg_color = $atts['bg_color'];
$extra_classes = $atts['column_class'];
?>
<div <?php if($bg_color != '') echo 'style="background-color:'.$bg_color.';"'; ?>class="<?php echo esc_attr($class); echo " $extra_classes "; ?>">
	<?php echo do_shortcode($content); ?>
</div>
