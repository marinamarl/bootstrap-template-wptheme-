<!-- Title -->
<h1 class="mt-4"><?php the_title(); ?></h1>

<!-- Author -->
<p class="lead">
  by
  <a href="#"><?php the_author(); ?></a>
</p>

<hr>

<!-- Date/Time -->
<p><?php the_date(); ?></p>

<hr>

<!-- Preview Image -->
<?php if ( has_post_thumbnail() ) { ?>
  <img class="<?php the_title_attribute(); ?>" src="<?php the_post_thumbnail_url(); ?>" alt="<?php get_post_thumbnail_id(); ?>">
  <?php
} else
echo'<p>This post has no thumbnail!</p>';
 ?>


<!-- Post Content -->
 <?php the_content(); ?>

<!-- comments part -->
<?php  if ( comments_open() || get_comments_number() ) :
  echo'<h5> The comments have a custom template placed in a template-parts directory</h5>';
  global $withcomments;
  $withcomments = 1;
    comments_template('/template-parts/comments.php');
  endif;?>
