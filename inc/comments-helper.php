<?php if( !function_exists( 'better_comments' ) ):
function better_comments($comment, $args, $depth) {
    ?>
<!-- Comment with nested comments -->
 <div class="media mb-4">
  <img class="d-flex mr-3 rounded-circle" src="<?php echo esc_url( get_avatar_url( $user->ID )); ?>" alt="_avatar image">
  <div class="media-body">
    <?php if ($comment->comment_approved == '0') : ?>
        <em><?php esc_html_e('Your comment is awaiting moderation.','theming') ?></em>
        <br />
    <?php endif; ?>
    <!-- the comment's author -->
    <h5 class="mt-0"><?php comment_author( $comment_ID ); ?> </h5>
    <!-- for some reason the comment content cant be wraped in p (it already comes wraped in a p) -->
		<div class="comment-list"><?php comment_text( $comment_ID ); ?></div>
    <div class="media mt-4">
      <div class="media-body">
        <!-- the reply link -->
        <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></div>
    </div>

  </div>
</div>

<?php } endif;?>
