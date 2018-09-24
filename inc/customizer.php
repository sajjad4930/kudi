<?php

if ( !function_exists( 'kudi_customize_register' ) ) {
function kudi_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
}
add_action( 'customize_register', 'kudi_customize_register' );

 // Custom section

 if ( ! function_exists( 'profectis_customize_register' ) ) {

	function profectis_customize_register( $wp_customize ) {

			// Theme General settigs
			$wp_customize->add_section( 'general_option', array(
					'title'       => __( 'General Option', 'kudi' ),
					'description'       => __( 'Theme general option', 'kudi' ),
					'priority'    => 20,
			) );

			$wp_customize->add_setting( 'favicon' , array(
					'default' => ''
			));
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'favicon', array(
					'label' => __( 'Your Favicon', 'kudi' ),
					'section' => 'general_option',
					'settings' => 'favicon'
			) ) );

			$wp_customize->add_setting('logo_option',array(

					'default' => '',
					'transport' => 'refresh',
			));

			$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'logo_option',array(
					'label'      => __( 'Logo', 'beauty' ),
					'description'       => __( 'Upload your logo image', 'kudi' ),
					'section'    => 'general_option',
					'settings'   => 'logo_option',

			)));

			// Theme Footer  settigs
			$wp_customize->add_section( 'footer_option', array(
				'title'       => __( 'Footer', 'kudi' ),
				'description'       => __( 'Theme footer option', 'kudi' ),
				'priority'    => 30,
		) );

		$wp_customize->add_setting('footer_text',array(

			'default' => 'Copy Right text Here',
			'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'footer_text',array(
			'label' => __('Footer Text','Beauty'),
			'description'       => __( 'footer copy right text', 'profectis' ),
			'section' => 'footer_option',
			'type' => 'text',
	)));
	$wp_customize->add_setting('footer_logo',array(

		'default' => '',
		'transport' => 'refresh',
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'footer_logo',array(
		'label'      => __( 'Footer Logo', 'kudi' ),
		'description'       => __( 'Upload your footer  logo image', 'kudi' ),
		'section'    => 'footer_option',
		'settings'   => 'footer_logo',

)));

// Add Twitter Setting
$wp_customize->add_setting( 'twitter' , array( 'default' => 'https://twitter.com' ));
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter', array(
	'label' => __( 'Twitter', 'kudi' ),
	'section' => 'footer_option',
	'settings' => 'twitter',
	'type' => 'text'
) ) );
// Add FB Setting
$wp_customize->add_setting( 'facebook' , array( 'default' => 'https://facebook.com' ));
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook', array(
	'label' => __( 'Facebook', 'kudi' ),
	'section' => 'footer_option',
	'settings' => 'facebook',
	'type' => 'text'
) ) );

// Add Google plus Setting
$wp_customize->add_setting( 'googleplus' , array( 'default' => 'https://plus.google.com' ));
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'googleplus', array(
	'label' => __( 'Google Plus', 'kudi' ),
	'section' => 'footer_option',
	'settings' => 'googleplus',
	'type' => 'text'
) ) );
// Add Linkdin Setting
$wp_customize->add_setting( 'linkdin' , array( 'default' => 'https://www.linkedin.com' ));
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'linkdin', array(
	'label' => __( 'Linkdin', 'kudi' ),
	'section' => 'footer_option',
	'settings' => 'linkdin',
	'type' => 'text'
) ) );
// Add pinterest Setting
$wp_customize->add_setting( 'pinterest' , array( 'default' => 'https://www.pinterest.com' ));
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pinterest', array(
	'label' => __( 'Pinterest', 'kudi' ),
	'section' => 'footer_option',
	'settings' => 'pinterest',
	'type' => 'text'
) ) );

// Add behance Setting
$wp_customize->add_setting( 'behance' , array( 'default' => 'https://www.behance.com' ));
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pinterest', array(
	'label' => __( 'behance', 'kudi' ),
	'section' => 'footer_option',
	'settings' => 'behance',
	'type' => 'text'
) ) );

	}
}
add_action( 'customize_register', 'profectis_customize_register' );


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */

if ( !function_exists( 'kudi_customize_preview_js' ) ) {
function kudi_customize_preview_js() {
	wp_enqueue_script( 'kudi-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
}
add_action( 'customize_preview_init', 'kudi_customize_preview_js' );
