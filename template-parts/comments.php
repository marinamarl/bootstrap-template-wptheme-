<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage theming
 * @since theming 1.0
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
<div id="comments" class="comments-area">
	<!-- Comments Form -->
	<div class="card my-4">
	  <h5 class="card-header">Leave a Comment:</h5>
	  <div class="card-body">
	    <form>
	      <div class="form-group">
	        <textarea class="form-control" rows="3"></textarea>
	      </div>
	      <button type="submit" class="btn btn-primary">Submit</button>
	    </form>
	  </div>
	</div>
<!-- comments list starts -->
<?php
if ( have_comments() ) {
	wp_list_comments( array(
		'style'      => 'ul',
		'short_ping' => true,
					 'callback' => 'better_comments'
				 ) );
			 } else echo 'There are no comments yet!';
?>
</div>
