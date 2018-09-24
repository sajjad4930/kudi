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


}