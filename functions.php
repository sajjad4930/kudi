<?php
/**
 * Kudi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Kudi
 */

if ( ! function_exists( 'kudi_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function kudi_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Kudi, use a find and replace
		 * to change 'kudi' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'kudi', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'post-testimonial', 600, 600, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'kudi' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'kudi_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'kudi_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kudi_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'kudi_content_width', 640 );
}
add_action( 'after_setup_theme', 'kudi_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kudi_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'kudi' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'kudi' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'kudi_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kudi_scripts() {

	wp_enqueue_style( 'kudi-bootsrap', get_theme_file_uri( '/assets/css/bootstrap.min.css' ));
	wp_enqueue_style( 'kudi-normalize', get_theme_file_uri( '/assets/css/plugins/normalize.css' ));
	wp_enqueue_style( 'kudi-animate', get_theme_file_uri( '/assets/css/plugins/animate.css' ));
	wp_enqueue_style( 'kudi-animate', get_theme_file_uri( '/assets/css/plugins/animate.css' ));
	wp_enqueue_style( 'kudi-magnifieng', get_theme_file_uri( '/assets/css/plugins/magnific-popup.css' ));
	wp_enqueue_style( 'kudi-linea', get_theme_file_uri( '/assets/css/plugins/linea-basic.css' ));
	wp_enqueue_style( 'kudi-main', get_theme_file_uri( '/assets/css/main.css' ));
	wp_enqueue_style( 'kudi-style', get_stylesheet_uri() );


	wp_enqueue_script( 'kudi-bootstrapjs', get_theme_file_uri('/assets/js/bootstrap.min.js'), array('jquery'), '', true );
	wp_enqueue_script( 'kudi-popover', get_theme_file_uri('/assets/js/popper.min.js'), array('jquery'), '', true );
	wp_enqueue_script( 'kudi-isotope', get_theme_file_uri('/assets/js/plugins/isotope.pkgd.min.js'), array('jquery'), '', true );
	wp_enqueue_script( 'kudi-imagesloaded', get_theme_file_uri('/assets/js/plugins/imagesloaded.pkgd.min.js'), array('jquery'), '', true );
	wp_enqueue_script( 'kudi-waypoints', get_theme_file_uri('/assets/js/plugins/jquery.waypoints.min.js'), array('jquery'), '', true );
	wp_enqueue_script( 'kudi-counterup', get_theme_file_uri('/assets/js/plugins/jquery.counterup.min.js'), array('jquery'), '', true );
	wp_enqueue_script( 'kudi-magnific', get_theme_file_uri('/assets/js/plugins/magnific-popup.min.js'), array('jquery'), '', true );
	wp_enqueue_script( 'kudi-wow', get_theme_file_uri('/assets/js/plugins/wow.min.js'), array('jquery'), '', true );
	wp_enqueue_script( 'kudi-main', get_theme_file_uri('/assets/js/main.js'), array('jquery'), '', true );
	wp_enqueue_script( 'kudi-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'kudi-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kudi_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/shortcode.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

