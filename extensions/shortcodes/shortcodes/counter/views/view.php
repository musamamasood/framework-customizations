<?php if (!defined('FW')) die('Forbidden');

/**
 * @var $atts The shortcode attributes
 */

$bg_image = $atts['bg_image'];
$counters = $atts['counters'];
?>
<div class="section-progress wow fadeInUp section-parallax" data-speed="25"  data-wow-duration="2s" style="background: url('<?php echo esc_url($bg_image); ?>')">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="list-progress list-unstyled">
                    <?php foreach($counters as $counter) : ?>
                    <li class="list-progress__item"> <span class="chart label-chart decor decor_mod-c" data-percent="<?php echo esc_attr($counter['number']); ?>"><i class="<?php echo esc_attr($counter['icon']); ?>"></i><span class="percent"></span> </span> <span class="list-progress__name"><?php echo esc_html($counter['title']); ?></span> </li>
                    <?php endforeach; ?>
                </ul>
                <!-- end list-progress -->
            </div>
            <!-- end col  -->
        </div>
        <!-- end row  -->
    </div>
    <!-- end container-->
</div>
<!-- end section-progress-->
