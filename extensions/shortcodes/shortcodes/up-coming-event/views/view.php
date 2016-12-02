<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts
 */
$title = $atts['title'];
$events = $atts['events'];
?>
<section class="section-area wow bounceInRight" data-wow-duration="2s">
	<?php if($title != '') : ?>
	<div class="title-w-icon"> <i class="icon stroke icon-Agenda"></i>
		<h2 class="ui-title-inner"><?php echo esc_html($title); ?></h2>
	</div>
	<?php endif; ?>

	<?php
		foreach($events as $event_id) :
			$options = fw_get_db_post_option($event_id, fw()->extensions->get( 'events' )->get_event_option_id());
//			fw_print($options);
			$date_from = '';
			foreach($options['event_children'] as $row){
				$date_from = $row['event_date_range']['from'];
				$date_from_no_hour = explode(' ', $date_from);
				$date_from_hour = $date_from_no_hour[1];
				$date_from = explode('/', $date_from_no_hour[0]);

				$date_from_day = $date_from[2];
				$date_from_month = date('M', mktime(0, 0, 0, $date_from[1], 10));
			}
//			fw_print($date_from_hour);
	?>
		<article class="post post_mod-e clearfix">
			<div class="box-date"><span class="number"><?php echo esc_html($date_from_day); ?></span><?php echo esc_html($date_from_month); ?></div>
			<div class="entry-main">
				<h3 class="entry-title entry-title_mod-a"><a href="javascript:void(0);"><?php echo esc_html(get_the_title($event_id)); ?></a></h3>
				<div class="entry-content">
					<p>Eleifend donec sapien sed usaer tesqed Lorem ipsum dolor sit ban.</p>
				</div>
				<div class="entry-footer">
					<div class="entry-links entry-links_mod-a"><i class="icon stroke icon-Time"></i><?php esc_html_e('starting: ', 'my-theme'); ?> <a class="post-link" href="javascript:void(0);"><?php echo esc_html($date_from_hour); ?></a></div>
				</div>
			</div>
		</article>
		<!-- end post -->
	<?php endforeach; ?>

</section>