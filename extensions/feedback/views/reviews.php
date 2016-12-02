<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * The template for displaying Reviews
 *
 * The area of the page that contains reviews and the review form.
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the reviews.
 */
if ( post_password_required() ) {
	return;
}
?>
<?php if(have_comments()) : ?>
	<section class="section-comment decor-2">
		<h3 class="widget-title widget-title_mod-a ui-title-inner decor decor_mod-a"><?php esc_html_e('Comments', 'my-theme'); ?></h3>
		<ul class="comments-list list-unstyled clearfix">
			<?php
			wp_list_comments( array(
				'walker'      => fw_ext_feedback_get_listing_walker(),
				'avatar_size'=> 90,
			) );
			?>

		</ul>
	</section><!-- end section-comment -->
<?php endif; ?>

<section class="section-comment decor-2">
	<h3 class="widget-title widget-title_mod-a ui-title-inner decor decor_mod-a"><?php esc_html_e('Add Your Review', 'my-theme'); ?></h3>
	<?php
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );

	$fields =  array(
		'author' =>
			'<div class="row"><div class="col-md-4">' .
			'<input id="comment-author" placeholder="'. esc_attr__('Name', 'my-theme'). '" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ).'"/>',

		'email' =>
			'<input class="form-control" id="comment-email" name="email"  placeholder="'. esc_attr__('Email', 'my-theme'). '" type="text" value="' . esc_attr(  $commenter['comment_author_email'] )  . '" />',

		'url' =>
			'<input id="url" name="url" class="form-control" type="text" placeholder="'. esc_attr__('Website', 'my-theme'). '" value="' . esc_attr( $commenter['comment_author_url'] ) .
			'"  /></div>',
		'comment_field' =>
			'<div class="col-md-8"><textarea id="comment-text" class="form-control" placeholder="'. esc_attr__('Comment', 'my-theme'). '" name="comment" rows="11" aria-required="true">' .
			'</textarea></div></div>'
	);

	$args = array(
		'id_form'           => 'comment-reply-form',
		'id_submit'         => 'submit_default',
		'class_submit'      => 'submit',
		'name_submit'       => 'submit',
		'title_reply'       => ( '' ),
		'title_reply_to'    => esc_html__( 'Leave a Reply to %s', 'my-theme' ),
		'cancel_reply_link' => esc_html__( 'Cancel Reply', 'my-theme' ),
		'label_submit'      => esc_html__( 'Post Comment', 'my-theme' ),
		'format'            => 'xhtml',
		'submit_field' 		=> '<div class="row">
											<div class="col-xs-12">%1$s %2$s</div></div>',
		'submit_button'		=> sprintf('<button class="btn btn-primary btn-effect">%s</button>', esc_html__('Submit', 'my-theme')),
		'comment_field' =>  '',
		'comment_notes_before' => '',
		'comment_notes_after' => '',
		'fields' => apply_filters( 'comment_form_default_fields', $fields ),
	);

	comment_form($args);
	?>
</section>



