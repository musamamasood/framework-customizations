<?php if (!defined('FW')) die('Forbidden');

/**
 * @var $atts The shortcode attributes
 */

$page_title         = $atts['post_title'];
$post_categories    = $atts['post_categories'];
$post_limit         = (int) $atts['post_limit'];
$post_word_limit    = (int) $atts['post_word_limit'];
?>
<?php if (!empty($post_categories)) : ?>
    <div class="posts-wrap">
        <?php
        if(isset($page_title) and !empty($page_title)) {
            echo "<h1 class='posts_by_category_title'>$page_title</h1>";
        }
        foreach($post_categories as $categor_id) :
            $args = array(
                'posts_per_page'   => $post_limit,
                'category'         => $categor_id,
                'orderby'          => 'date',
                'order'            => 'DESC',
                'post_type'        => 'post',
                'post_status'      => 'publish',
                'suppress_filters' => true
            );
            $posts_array = get_posts( $args );
            if(!empty($posts_array)):

                $count = 0;
                foreach ($posts_array as $post):
                    $count++;
                    $post_id    = $post->ID;
                    $thumb_url  = wp_get_attachment_url(get_post_thumbnail_id($post_id));

                    /* Truncate post content and removing shortcodes */
                    $content_limit = $post_word_limit;
                    $content = explode(' ', strip_tags($post->post_content), $content_limit);
                    if (count($content) >= $content_limit) {
                        array_pop($content);
                        $content = implode(" ",$content).'...';
                    } else {
                        $content = implode(" ",$content);
                    }
                    $content = preg_replace('/\[.+\]/','', $content);
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]&gt;', $content);

                    ?>
                    <article class="mod-post_by_category <?php print ($count % 2 == 1) ? "odd" : "even"; ?> clearfix wow zoomIn" data-wow-duration="2s">
                        <div class="col-sm-3">
                            <div class="entry-thumbnail">
                                <img class="img-responsive" src="<?php echo fw_resize($thumb_url, 150, 150, true); ?>" width="150" height="150" alt=<?php echo esc_attr__('Foto', 'my-theme'); ?>/>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <h4 class="post_title"><?php echo $post->post_title;?></h4>
                            <div class="entry-meta">
                                <span class="posted_on_mod"><i>Posted on:</i> <?php echo get_the_date('F j, Y', $post_id); ?></span>
                            </div>
                            <div class="post-content">
                                <?php echo $content; ?>
                            </div>
                            <div class="entry-footer"><a href="<?php echo get_permalink($post_id);  ?>" class="mod-readmore-link"><?php esc_html_e('read more...', 'my-theme'); ?></a></div>
                        </div>
                    </article>
                    <!-- end post -->
                    <?php
                endforeach;
            endif;
        endforeach;
        ?>
    </div>
<?php endif; ?>