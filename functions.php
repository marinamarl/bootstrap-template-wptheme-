<?php
add_theme_support( 'post-thumbnails' );
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
// Bootstrap core CSS- built in styles from bootstrap
wp_enqueue_style( 'bootstrap-css' , get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css' );
wp_enqueue_script( 'bootstrap-js' , get_template_directory_uri() . '/js/bootstrap.min.js' , array( 'jquery' ) , false , true );
// Custom styles for this template- styles that can be changed
wp_enqueue_style( 'bootstrap-css' , get_template_directory_uri() . '/css/blog-post.css' );

// Load Custom Comments Layout file.
require get_template_directory() . '/inc/comments-helper.php';
