<?php
/**
 * Tibicle-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Tibicle-theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function tibicle_theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Tibicle-theme, use a find and replace
		* to change 'tibicle-theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'tibicle-theme', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'tibicle-theme' ),
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

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'tibicle_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
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
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'tibicle_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tibicle_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tibicle_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'tibicle_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tibicle_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'tibicle-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'tibicle-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'tibicle_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tibicle_theme_scripts() {
	wp_enqueue_style( 'tibicle-theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'tibicle-theme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'tibicle-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tibicle_theme_scripts' );

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

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function portfolio_post_type() {
    $labels = array(
        'name'               => _x( 'Portfolio', 'post type general name' ),
        'singular_name'      => _x( 'Portfolio Item', 'post type singular name' ),
        'menu_name'          => _x( 'Portfolio', 'admin menu' ),
        'add_new'            => _x( 'Add Portfolio Item', 'portfolio' ),
        'add_new_item'       => __( 'Add New Portfolio Item' ),
        'new_item'           => __( 'New Portfolio Item' ),
        'edit_item'          => __( 'Edit Portfolio Item' ),
        'view_item'          => __( 'View Portfolio Item' ),
        'all_items'          => __( 'All Portfolio Items' ),
        'search_items'       => __( 'Search Portfolio Items' ),
        'not_found'          => __( 'No portfolio items found' ),
        'not_found_in_trash' => __( 'No portfolio items found in Trash' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'portfolio' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'menu_icon'          => 'dashicons-portfolio',
    );

    register_post_type( 'portfolio', $args );
}

add_action( 'init', 'portfolio_post_type' );


function porfolo_catagory_taxonomy() {
    $labels = array(
        'name' => _x('Catagory', 'taxonomy general name'),
        'singular_name' => _x('Catagory', 'taxonomy singular name'),
        'search_items' => __('Search Catagory'),
        'all_items' => __('All Catagory'),
        'parent_item' => __('Parent Catagory'),
        'parent_item_colon' => __('Parent Catagory:'),
        'edit_item' => __('Edit Catagory'),
        'update_item' => __('Update Catagory'),
        'add_new_item' => __('Add New Catagory'),
        'new_item_name' => __('New App Catagory'),
        'menu_name' => __('Catagory'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'catagory'),
    );

    register_taxonomy('catagory', array('portfolio'), $args);
}

add_action('init', 'porfolo_catagory_taxonomy');
