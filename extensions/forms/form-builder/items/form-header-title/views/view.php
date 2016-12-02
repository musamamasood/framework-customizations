<?php if (!defined('FW')) die('Forbidden');
/**
 * @var string $title
 * @var string $subtitle
 */

if ( empty( $title ) ) {
	return;
}
?>
<div class="header title text-center">
	<h3 class="heading"><?php echo esc_html($title); ?></h3>
	<?php if( !empty($subtitle) ) : ?>
	    <p class="sub-heading"><?php echo esc_html($subtitle); ?></p>
	<?php endif ?>
</div>