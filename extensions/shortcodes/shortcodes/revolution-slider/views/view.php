<?php if (!defined('FW')) die('Forbidden');

/**
 * @var $atts The shortcode attributes
 */

$alias = $atts['alias'];
if( $alias != '0' ){
	echo do_shortcode('[rev_slider '.$alias.']');
}
?>
