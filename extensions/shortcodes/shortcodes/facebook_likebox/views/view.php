<?php if (!defined('FW')) die('Forbidden');

/**
 * @var $atts The shortcode attributes
 */

$iframe_width   = (int) (isset($atts['fb_width']) and !empty($atts['fb_width']))?$atts['fb_width']:"340";
$iframe_height  = (int) (isset($atts['fb_height']) and !empty($atts['fb_height']))?$atts['fb_height']:"500";
$iframe_url     = urlencode($atts['fb_page_url']);
?>
<iframe src="https://www.facebook.com/plugins/page.php?href=<?php echo $iframe_url;?>&tabs=timeline&width=<?php echo $iframe_width;?>&height=<?php echo $iframe_height;?>&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="<?php echo $iframe_width;?>" height="<?php echo $iframe_height;?>" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>