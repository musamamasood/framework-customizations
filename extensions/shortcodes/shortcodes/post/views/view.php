<?php if (!defined('FW')) die('Forbidden');

/**
 * @var $atts The shortcode attributes
 */

$post_items = $atts['post_items'];
$style = $atts['style'];
?>
<?php if ($style == 'grid') : ?>
<div class="posts-wrap">
    <?php
        foreach($post_items as $post_id) :
            $post = get_post($post_id);
            $thumb_url = wp_get_attachment_url(get_post_thumbnail_id($post_id));
    ?>

            <article class="post post_mod-b clearfix wow zoomIn" data-wow-duration="2s">
                <div class="entry-media">
                    <div class="entry-thumbnail"> <a href="javascript:void(0);" ><img class="img-responsive" src="<?php echo fw_resize($thumb_url, 370, 220, true); ?>" width="370" height="220" alt=<?php echo esc_attr__('Foto', 'my-theme'); ?>/></a> </div>
                </div>
                <div class="entry-main">
                    <div class="entry-meta decor decor_mod-a">
                        <span class="entry-autor">
                            <span><?php esc_html_e('By', 'my-theme'); ?> </span>
                            <a class="post-link" href="javascript:void(0);"><?php the_author_meta('user_nicename', $post->post_author); ?></a>
                        </span>
                        <span class="entry-links entry-time_mod-a"><i class="icon stroke icon-Agenda"></i><?php echo get_the_date('F j, Y', $post_id); ?></span>
                    </div>
                    <h3 class="entry-title ui-title-inner"><a href="<?php echo get_permalink($post_id);  ?>"><?php echo esc_html($post->post_title); ?></a></h3>
                    <div class="entry-content">
                        <?php echo esc_html($post->post_excerpt); ?>
                    </div>
                    <div class="entry-footer"><a href="<?php echo get_permalink($post_id);  ?>" class="post-btn btn btn-primary btn-effect"><?php esc_html_e('READ MORE', 'my-theme'); ?></a></div>
                </div>
            </article>
            <!-- end post -->
    <?php endforeach; ?>
</div>

<?php else : ?>
    <div class="post-slider owl-carousel owl-theme enable-owl-carousel"
         data-min480="1"
         data-min768="2"
         data-min992="2"
         data-min1200="2"
         data-pagination="false"
         data-navigation="true"
         data-auto-play="400000"
         data-stop-on-hover="true" >
        <?php
        foreach($post_items as $post_id) :
            $post = get_post($post_id);
            $thumb_url = wp_get_attachment_url(get_post_thumbnail_id($post_id));
            ?>

            <article class="post post_mod-d clearfix">
                <div class="entry-media">
                    <a href="<?php echo get_permalink($post_id); ?>" >
                        <img class="img-responsive" src="<?php echo fw_resize($thumb_url, 250, 240); ?>" width="250" height="240" alt=<?php echo esc_attr__('Foto', 'my-theme'); ?>/>
                    </a>
                </div>
                <div class="entry-main">
                    <div class="entry-meta decor decor_mod-a">
                        <span class="entry-autor">
                            <span><?php esc_html_e('By', 'my-theme'); ?> </span>
                            <a class="post-link" href="javascript:void(0);">
                                <?php the_author_meta('user_nicename', $post->post_author); ?>
                            </a>
                        </span>
                        <span class="entry-links entry-time_mod-a">
                            <i class="icon stroke icon-Agenda"></i>
                            <?php echo get_the_date('F j, Y', $post_id); ?>
                        </span>
                    </div>

                    <h3 class="entry-title ui-title-inner decor decor_mod-b"><a href="<?php echo get_permalink($post_id); ?>"><?php echo esc_html($post->post_title); ?></a></h3>

                    <div class="entry-content">
                        <?php echo esc_html($post->post_excerpt); ?>
                    </div>
                </div>
            </article>
            <!-- end post -->
        <?php endforeach; ?>
    </div>
<?php endif; ?>