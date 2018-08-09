<!-- Sidebar Widgets Column -->
<div class="col-md-4">

  <!-- Search Widget -->
  <div class="card my-4">
    <h5 class="card-header">Search</h5>
    <div class="card-body">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for...">
        <span class="input-group-btn">
          <button class="btn btn-secondary" type="button">Go!</button>
        </span>
      </div>
    </div>
  </div>

  <!-- Categories Widget -->
  <div class="card my-4">
    <h5 class="card-header">Categories</h5>
    <div class="card-body">
      <div class="row">
        <div class="col-lg-6">
          <ul class="list-unstyled mb-0">
            <!-- displays a li of the categories that have an article -->
            <?php
            $categories = get_categories();
            foreach($categories as $category) {
              echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
            }?>

          </ul>
      </div>
    </div>
  </div>

  <!-- Side Widget -->
  <div class="card my-4">
    <h5 class="card-header">Side Widget</h5>
    <div class="card-body">
      <?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
      	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
      		<?php dynamic_sidebar( 'home_right_1' ); ?>
      	</div><!-- #primary-sidebar -->
      <?php else : ?> <p> There are no widgets in home right 1! add one to see it here.</p>
      <?php endif; ?>    </div>
  </div>
</div>
