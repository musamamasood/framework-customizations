<?php if (!defined('FW')) die('Forbidden');

/**
 * @var $atts The shortcode attributes
 */

$bg_image = $atts['bg_image'];
?>
<section class="section-video wow fadeInUp" data-wow-duration="2s" style="background: url('<?php echo esc_url($bg_image); ?>')">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="video-block"> <a class="video-block__link" href="<?php echo esc_attr($atts['video_url']); ?>" rel="prettyPhoto"><i class="icon stroke icon-Play"></i></a>
                    <h2 class="video-block__title"><?php echo esc_html($atts['title']); ?></h2>
                    <div class="video-block__subtitle"><?php echo esc_html($atts['sub_title']); ?></div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end section-video -->
