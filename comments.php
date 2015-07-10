<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package MDLWP
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="mdl-card__supporting-text comments mdl-cell mdl-cell--12-col mdl-card">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h3 class="comments-title">
			<?php
				printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'mdlwp' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h3>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="comment-navigation" role="navigation">
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'mdlwp' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'mdlwp' ) ); ?></div>
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'mdlwp' ); ?></p>
	<?php endif; ?>



	<?php 
	    $req = get_option( 'require_name_email' );
	    $aria_req = ( $req ? " aria-required='true'" : '' );

		$comments_args = array(
        // change the title of send button 
        'label_submit'=>'Submit',
        // change the title of the reply section
        'title_reply'=>'Leave a Comment',
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_notes_after' => '',
        // redefine your own textarea (the comment body)
        'comment_field' => ' 
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"><textarea class="mdl-textfield__input" rows="10" id="comment" name="comment" aria-required="true"></textarea>
        <label class="mdl-textfield__label" for="comment">' . __( 'Comments', 'mdlwp' ) . '</label></div>',

        'fields' => apply_filters( 'comment_form_default_fields', array(

	    'author' =>
	      '<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">' .
	      '<input class="mdl-textfield__input" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
	      '" size="30"' . $aria_req . ' /><label class="mdl-textfield__label" for="author">' . __( 'Name', 'mdlwp' ) . '</label></div>',


	    'email' =>
	      '<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">' .
	      '<input class="mdl-textfield__input"  id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
	      '" size="30"' . $aria_req . ' /><label class="mdl-textfield__label" for="email">' . __( 'Email', 'mdlwp' ) . '</label></div>',

	    'url' =>
	      '<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">'.
	      '<input class="mdl-textfield__input" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
	      '" size="30" /><label class="mdl-textfield__label" for="website">' . __( 'Website', 'mdlwp' ) . '</label></div>'
	    )
	  ),
	);

	comment_form($comments_args); 	?>

</div><!-- #comments -->