<?php if (!defined('FW')) die('Forbidden');

/**
 * @var $atts The shortcode attributes
 */

$replace_target = array('<strong>','</strong>');
$replace_source = array('[',']');
$title = str_replace($replace_source, $replace_target, esc_html($atts['title']));

$testimonials = $atts['testimonials'];
?>
<section class="section-default wow bounceInLeft" data-wow-duration="2s">
    <?php
        $heading = "<h2 class='ui-title-block'>{$title}</h2>";
        echo '<h2 class="ui-title-block">'.$title.'</h2>';
    ?>
    <div class="slider-reviews owl-carousel owl-theme owl-theme_mod-c enable-owl-carousel"
         data-single-item="true"
         data-auto-play="7000"
         data-navigation="true"
         data-pagination="false"
         data-transition-style="fade"
         data-main-text-animation="true"
         data-after-init-delay="4000"
         data-after-move-delay="2000"
         data-stop-on-hover="true">
        <?php foreach($testimonials as $testimonial) : ?>
        <div class="reviews">
            <div class="reviews__text"><?php echo esc_html($testimonial['content']); ?></div>
            <div class="reviews__img"><img class="img-responsive" src="<?php echo esc_url($testimonial['author_avatar']['url']); ?>" height="60" width="60" alt=<?php echo esc_attr__('Foto', 'my-theme'); ?>></div>
            <span class="reviews__autor">-- <?php echo esc_html($testimonial['author_name']); ?></span> <span class="reviews__categories">(<?php echo esc_html($testimonial['author_job']); ?></span> </div>
        <!-- end reviews -->
        <?php endforeach; ?>
    </div>
    <!-- end slider-reviews -->
</section>
<!-- end section-default -->
