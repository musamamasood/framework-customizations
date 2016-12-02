<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * Output a review in the HTML5 format.
 *
 * @var object $comment Comment to display.
 * @var int $depth Depth of comment.
 * @var array $args An array of arguments.
 * @var bool $has_children
 * @var int $stars_number
 * @var int $rate
 */
$tag = ( 'div' === $args['style'] ) ? 'div' : 'li';
?>
<<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( $has_children ? 'parent' : '' ); ?>>
<article id="comment-<?php comment_ID(); ?>" class="comment">
		<div class="avatar-placeholder">
			<?php if ( 0 != $args['avatar_size'] ) {
				echo get_avatar( $comment, $args['avatar_size'] );
			} ?>

		</div>
		<!-- .comment-author -->
		<div class="comment-inner">
			<div class="comment-content-inner">

				<header class="comment-header">
					<cite class="comment-author"><?php comment_author(); ?></cite>
					<?php edit_comment_link(esc_html__('(Edit)', 'my-theme'), '  ', '') ?>
					<!--Rating-->
					<?php if(!empty($rate)) : ?>
						<div class="wrap-rating listing">
							<div class="rating">
								<?php
								for ( $i = 1; $i <= $stars_number; $i ++ ) {
									$voted = ( $i <= round( $rate ) ) ? ' voted' : '';
									echo '<span class="fa fa-star' . $voted . '" data-vote="' . $i . '"></span>';
								}
								?>
							</div>
						</div>
					<?php endif; ?>
					<!--/Rating-->
					<a class="date_comment" href="<?php echo esc_url( get_comment_link( $comment->comment_ID, $args ) ); ?>">
						<time datetime="<?php comment_time( 'F, Y' ); ?>">
							<?php printf( esc_html_x( '%1$s', '1: date', 'my-theme'), get_comment_date() ); ?>
						</time>
					</a>
				</header>


				<div class="comment-body"><?php comment_text() ?></div>
			</div>
			<!-- .comment-metadata -->
		</div>


		<?php if ( '0' == $comment->comment_approved ) : ?>
			<p class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'my-theme' ); ?></p>
		<?php endif; ?>
	<!-- .comment-meta -->

</article><!-- .comment-body -->