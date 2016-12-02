<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<?php $tabs_id = uniqid('fw-tabs-'); ?>
<?php
/*
 * the `.fw-tabs-container` div also supports
 * a `tabs-justified` class, that strethes the tabs
 * to the width of the whole container
 */
?>

<ul class="nav nav-tabs nav-tabs_mod-a">
	<?php foreach ($atts['tabs'] as $key => $tab) : ?>
	<li <?php if($tab['default'] == 'yes') echo 'class="active"'; ?>><a class="ui-title-inner decor decor_mod-d" href="#<?php echo esc_attr($tabs_id . '-' . ($key + 1)); ?>" data-toggle="tab"><?php echo $tab['tab_title']; ?></a></li>
	<?php endforeach; ?>
</ul>

<div class="tab-content">
	<?php foreach ( $atts['tabs'] as $key => $tab ) : ?>
	<div class="tab-pane <?php if($tab['default'] == 'yes') echo 'active'; ?>" id="<?php echo esc_attr($tabs_id . '-' . ($key + 1)); ?>">
		<p><?php echo do_shortcode( $tab['tab_content'] ) ?></p>
	</div>
	<?php endforeach; ?>
</div>
