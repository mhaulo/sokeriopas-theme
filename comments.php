<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to deeblogi_comment() which is
 * located in the functions.php file.
 *
 * @package Deeblogi
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>

<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			Kommentit tähän postaukseen
		</h2>

		<ol class="commentlist">
			<?php wp_list_comments( array( 'callback' => 'deeblogi_comment', 'style' => 'ol' ) ); ?>
		</ol><!-- .commentlist -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="navigation" role="navigation">
			<h1 class="assistive-text section-heading"><?php _e( 'Comment navigation', 'deeblogi' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'deeblogi' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'deeblogi' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

		<?php
		/* If there are no comments and comments are closed, let's leave a note.
		 * But we only want the note on posts and pages that had comments in the first place.
		 */
		if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="nocomments"><?php _e( 'Comments are closed.' , 'deeblogi' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php comment_form( array (
	                      'comment_field' => '<div class="comment-form-comment form-group"><label for="comment">' .
	                                          _x( 'Comment', 'noun') . 
	                                          '</label><textarea id="comment" name="comment" class="form-control" cols="45" rows="8" aria-required="true"></textarea></div>',
	                                          
	                      'fields' => apply_filters( 'comment_form_default_fields', array(
	                               'author' =>'<div class="comment-form-author form-group">' .
                                              '<label for="author">' . __( 'Name', 'domainreference' ) . '</label> ' .
                                              ( $req ? '<span class="required">*</span>' : '' ) .
                                              '<input id="author" name="author" class="form-control" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
                                              '" size="30"' . ' /></div>',

	                               'email' => '<div class="comment-form-email form-group"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' .
                                              ( $req ? '<span class="required">*</span>' : '' ) .
                                              '<input id="email" name="email" class="form-control" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                                              '" size="30"' . ' /></div>',

	                               'url' => '<div class="comment-form-url form-group"><label for="url">' 
	                                        .__( 'Website', 'domainreference' ) . '</label>' .
                                            '<input id="url" name="url" class="form-control" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
                                            '" size="30" /></div>'
                                   )),
	                   )); 
	?>

</div><!-- #comments .comments-area -->