<?php if (!defined('FW')) die('Forbidden');

/**
 * @var $atts The shortcode attributes
 */
$replace_target = array('<strong>','</strong>');
$replace_source = array('[',']');
$images = $atts['images'];
$display_borders = $atts['display_border'];
$color_text = $atts['color_text'];
?>

<style>
    <?php
        if($display_borders === "yes") {
 echo "
    .mod-sponsors-icons {
        border-left: 2px solid #dfdfdf;
        border-right: 2px solid #dfdfdf;
    }";
        }
    ?>
    .sponsor_icon_block{
        text-align: center;
        margin: 50px auto;
    }
    .sponsor_icon_block img {
        max-width: 100%;
    }
</style>

<div class="mod-sponsors-icons">
    <h4 class="text-center" style="color: <?php echo esc_attr($color_text); ?>"><?php echo esc_html($atts['desc']); ?></h4>
    <?php foreach ($images as $image) : ?>
        <div class="sponsor_icon_block wow fadeInUp"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr__('Sponsors', 'my-theme'); ?>"></div>
    <?php endforeach; ?>
</div>