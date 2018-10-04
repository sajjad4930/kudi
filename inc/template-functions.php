<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Kudi
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function kudi_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'kudi_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function kudi_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'kudi_pingback_header' );

/*
 * testimonial custom post.
 */
add_action('init', 'kudi_testimonial');
function kudi_testimonial() 
{
  $labels = array(
    'name' => __('Testimonial', 'kudi'),
    'singular_name' => __('Testimonial', 'kudi'),
    'add_new' => __('Add New', 'kudi'),
    'add_new_item' => __('Add New Testimonial Item'),
    'edit_item' => __('Edit Item'),
    'new_item' => __('New Item'),
    'view_item' => __('View Item'),
    'search_items' => __('Search Items'),
    'not_found' =>  __('No items found'),
    'not_found_in_trash' => __('No items found in Trash'), 
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'show_ui' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 20,
    'supports' => array('title','editor','thumbnail')
  ); 
  register_post_type('testimonial',$args);
}


/*
 * testimonial custom post.
 */
add_action('init', 'kudi_portfolio');
function kudi_portfolio() 
{
  $labels = array(
    'name' => __('Portfolio', 'kudi'),
    'singular_name' => __('Portfolio', 'kudi'),
    'add_new' => _x('Add New Portfolio', 'kudi'),
    'add_new_item' => __('Add New Portfolio Item'),
    'edit_item' => __('Edit Item'),
    'new_item' => __('New Item'),
    'view_item' => __('View Item'),
    'search_items' => __('Search Items'),
    'not_found' =>  __('No items found'),
    'not_found_in_trash' => __('No items found in Trash'), 
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'show_ui' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 20,
    'supports' => array('title','editor','thumbnail')
  ); 
  register_post_type('portfolio',$args);
}
register_taxonomy( "portfolio-categories", 
	array( 	"portfolio" ), 
	array( 	"hierarchical" => true,
			"labels" => array('name'=>"Portfolio Categories",'add_new_item'=>"Add New Field"), 
			"singular_label" => __( "Field" ), 
			"rewrite" => array( 'slug' => 'fields','with_front' => false)
		 ) );



