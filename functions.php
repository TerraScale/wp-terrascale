<?php
/**
 * Terrascale functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Terrascale
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'terrascale_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function terrascale_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Terrascale, use a find and replace
		 * to change 'terrascale' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'terrascale', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'header-nav' => esc_html__( 'Header Nav', 'terrascale' ),
				'top-nav'    => esc_html__( 'Top Nav', 'terrascale' ),
				'footer-nav' => esc_html__( 'Footer Nav', 'terrascale' )
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);


		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 44,
				'width'       => 288,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'terrascale_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function terrascale_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'terrascale_content_width', 640 );
}

add_action( 'after_setup_theme', 'terrascale_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function terrascale_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Top Bar left', 'terrascale' ),
			'id'            => 'top-bar-left',
			'description'   => esc_html__( 'Add widgets here.', 'terrascale' ),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title" hidden>',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Social Links', 'terrascale' ),
			'id'            => 'social-links',
			'description'   => esc_html__( 'Add widgets here.', 'terrascale' ),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title" hidden>',
			'after_title'   => '</h2>',
		)
	);
}

add_action( 'widgets_init', 'terrascale_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function terrascale_scripts() {
	wp_enqueue_style( 'terrascale-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_style( 'BootStrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.0.0' );
	wp_enqueue_style( 'FontAw', get_template_directory_uri() . '/assets/css/all.min.css', array(), '5.15.1' );
	wp_enqueue_style( 'Layout', get_template_directory_uri() . '/assets/css/layout.css', array(), _S_VERSION );

	wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', array(), '3.5.1', true );
	wp_enqueue_script( 'BootStrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '5.0.0', true );
	wp_enqueue_script( 'Custom', get_template_directory_uri() . '/assets/js/custom.js', array(), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'terrascale_scripts' );

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

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

