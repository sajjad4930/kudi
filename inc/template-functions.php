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


if(function_exists('vc_map')){
 // Slider vc addons
	vc_map( array(
		'name' => __('Kudi Slider Home','kudi'),
		'base' => 'kudi-slider',
    'category' => __( 'Kudi Theme', 'craiglistmarketingpro' ),     
		'icon' => 'icon-wpb-wp',
		
		'params' => array(
			array(
				'type' => 'textfield',
				'param_name' => 'title',
				'value' => '',
				'heading' => 'Slider Title'
			),
			
			array(
				'type' => 'textarea',
				'param_name' => 'description',
				'value' => '',
				'heading' => 'Slider Descriptin'
			),
			
      array(
				'type' => 'textfield',
				'param_name' => 'buttonlink',
				'value' => '',
				'heading' => 'Slider Button Link'
			),
			array(
				'type' => 'textfield',
				'param_name' => 'buttontext',
				'value' => '',
				'heading' => 'Slider Button Text'
			),

			array(
				'type' => 'attach_image',
				'param_name' => 'bcimage',
				'value' => '',
				'heading' => 'Upload Section Background image'
			),

		)

	));

	 // Testimonial 
	 vc_map( array(
		'name' => __('Testimonial','kudi'),
		'base' => 'testimonial',
    'category' => __( 'Kudi Theme', 'kudi' ),     
		'icon' => 'icon-wpb-wp',
		
		'params' => array(
			array(
				'type' => 'textfield',
				'param_name' => 'title',
				'value' => '',
				'heading' => 'Testimonial Title'
			),
			array(
				'type' => 'attach_image',
				'param_name' => 'testimonialicon',
				'value' => '',
				'heading' => 'Testimonial coat icon'
			),

		)

	));

}


/*
 * testimonial custom post.
 */
add_action('init', 'kudi_testimonial');
function kudi_testimonial() 
{
  $labels = array(
    'name' => _x('Testimonial', 'kudi'),
    'singular_name' => __('Testimonial', 'kudi'),
    'add_new' => _x('Add New', 'kudi'),
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

