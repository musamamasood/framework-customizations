<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<?php
	$tabs_id = uniqid('fw-tabs-');
?>
<!-- end wrap-title -->
<div class="categories-tabs">
	<ul class="nav nav-tabs wow bounceInRight" data-wow-duration="2s">
		<?php foreach($atts['tabs'] as $key => $tab) : ?>
			<?php
				$id = $tabs_id.'-'.($key+1);
			?>
			<li <?php if($tab['default'] == 'yes') echo 'class="active"'; ?>> <a href="#<?php echo esc_attr($id); ?>" data-toggle="tab">
					<div class="nav__inner"><i class="<?php echo esc_attr($tab['tab_icon']); ?>"></i><span class="nav__name"><?php echo esc_html($tab['tab_title']); ?></span></div>
					<span class="helper"></span> </a> </li>
		<?php endforeach; ?>
	</ul>
	<div class="tab-content wow bounceInLeft" data-wow-duration="2s">
		<?php foreach($atts['tabs'] as $key => $tab) : ?>
			<?php
				$id = $tabs_id.'-'.($key+1);
				$replace_target = array('<strong class="color_primary">','</strong>');
				$replace_source = array('[',']');
				$sub_title = str_replace($replace_source, $replace_target, esc_html($tab['tab_content'][0]['tab_content_subtitle']));
			?>
			<div class="tab-pane fade  <?php if($tab['default'] == 'yes') echo 'in active'; ?>" id="<?php echo esc_attr($id); ?>">
				<h3 class="categories-tabs__title"><?php echo esc_html($tab['tab_content'][0]['tab_content_title']); ?></h3>
				<div class="categories-tabs__number"><?php echo str_replace($replace_source, $replace_target, esc_html($tab['tab_content'][0]['tab_content_subtitle'])); ?></div>
				<div class="categories-tabs__description">
					<?php echo do_shortcode($tab['tab_content'][0]['tab_content_desc']); ?>
				</div>
				<a class="btn btn-primary btn-effect" target="<?php echo esc_attr($tab['button']['target']); ?>" href="<?php echo esc_url($tab['button']['link']); ?>"><?php echo esc_html($tab['button']['label']); ?></a> </div>
		<?php endforeach; ?>

	</div>
</div>
<!-- end categories-tabs -->
