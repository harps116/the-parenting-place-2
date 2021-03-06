<?php
/**
 * the_parenting_place_2 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package the_parenting_place_2
 */

if ( ! function_exists( 'the_parenting_place_2_setup' ) ) :
	function the_parenting_place_2_setup() {
		load_theme_textdomain( 'the_parenting_place_2', get_template_directory() . '/languages' );

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

		/**
		 * Register Menu Locations
		 */		 
		$args = array(
			'main' 			=>  __( 'Main Menu', 'the_parenting_place_2'),
			'footer-left' 	=>  __( 'Footer Left', 'the_parenting_place_2' ),
			'footer-right' 	=>  __( 'Footer Right', 'the_parenting_place_2' ),
		); 
		register_nav_menus( $args );

		/*
		 * Enable support for Post Types
		 *
		 * @link https://developer.wordpress.org/themes/functionality/post-formats/
		 */
		add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );

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
		add_theme_support( 'custom-background', apply_filters( 'the_parenting_place_2_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
		 */
		add_theme_support( 'custom-header' );

		/**
		 * Allows starter content to help with initial setup.
		 */
		add_theme_support( 'starter-content' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'the_parenting_place_2_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function the_parenting_place_2_content_width() {
	// erin+adam=sweetsawyer
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'the_parenting_place_2_content_width', 640 );
}
add_action( 'after_setup_theme', 'the_parenting_place_2_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function the_parenting_place_2_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( ' Main Sidebar', 'the_parenting_place_2' ),
		'id'            => 'main-sidebar',
		'description'   => esc_html__( 'Add widgets for the main sidebar here.', 'the_parenting_place_2' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( ' Footer Sidebar', 'the_parenting_place_2' ),
		'id'            => 'footer-sidebar',
		'description'   => esc_html__( 'Add widgets for the footer sidebar here.', 'the_parenting_place_2' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'the_parenting_place_2_widgets_init' );

/**
 * Enqueue built styles from assets
 * 
 */
 function the_parenting_place_2_styles(){
	//TODO: remove time
	wp_enqueue_style( 'the_parenting_place_2-style', get_template_directory_uri() . '/assets/style.css', array(), time(), 'all');

 }
 add_action( 'wp_enqueue_scripts', 'the_parenting_place_2_styles' );

/**
 * Enqueue built scripts from assets
 */
function the_parenting_place_2_scripts() {

	wp_enqueue_script( 'the_parenting_place_2-skip-link-focus-fix', get_template_directory_uri() . '/assets/bundle.js', array(), time(), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'the_parenting_place_2_scripts' );



// Tag Support for Pages
require_once get_template_directory() . '/inc/page-tags.php';

//Navigation Walker
require_once get_template_directory() . '/inc/wp-bootstrap-navwalker.php';

// Post Helpers
require_once get_template_directory() . '/inc/post-helpers.php';

// Automatic Sub Nav creation
require_once get_template_directory() . '/inc/sub-nav.php';

// Customizer Options
require get_template_directory() . '/inc/customizer.php';

// Advanced Custom Fields
// require get_template_directory() . '/inc/custom-fields.php';



 
