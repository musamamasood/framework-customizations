<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$replace_target = array('<strong>','</strong>');
$replace_source = array('[',']');
$title = str_replace($replace_source, $replace_target, esc_html($atts['title']));
$count = 0;
?>
<section class="section-default wow bounceInRight" data-wow-duration="2s">
	<h2 class="ui-title-block"><?php echo str_replace($replace_source, $replace_target, esc_html($atts['title'])); ?></h2>
	<div class="panel-group accordion accordion" id="accordion-1">
		<?php
			foreach ( $atts['tabs'] as $tab ) :
			$count = $count + 1;
		?>
		<div class="panel <?php if($tab['default'] == 'yes') echo 'panel-default'; ?>">
			<div class="panel-heading"> <a class="btn-collapse" data-toggle="collapse" data-parent="#accordion-<?php echo esc_attr($count); ?>" href="#collapse-<?php echo esc_attr($count); ?>"><i class="icon"></i></a>
				<h3 class="panel-title"><?php echo $tab['tab_title']; ?></h3>
			</div>
			<div id="collapse-<?php echo esc_attr($count); ?>" class="panel-collapse collapse <?php if($tab['default'] == 'yes') echo 'in'; ?>">
				<div class="panel-body">
					<p class="ui-text"><?php echo do_shortcode($tab['tab_content']); ?></p>
				</div>
			</div>
		</div>
		<!-- end panel -->
		<?php endforeach; ?>
	</div>
	<!-- end accordion -->
</section>