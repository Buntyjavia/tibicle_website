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

function enqueue_custom_scripts() {
    // Enqueue your JavaScript file
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/wp-content/themes/tibicle-theme/asset/javascript/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function portfolio_post_type() {
    $labels = array(
        'name'               => _x( 'Portfolio', 'post type general name' ),
        'singular_name'      => _x( 'Portfolio Item', 'post type singular name' ),
        'menu_name'          => _x( 'Portfolio', 'admin menu' ),
        'add_new'            => _x( 'Add Portfolio', 'portfolio' ),
        'add_new_item'       => __( 'Add New Portfolio' ),
        'new_item'           => __( 'New Portfolio' ),
        'edit_item'          => __( 'Edit Portfolio' ),
        'view_item'          => __( 'View Portfolio' ),
        'all_items'          => __( 'All Portfolio' ),
        'search_items'       => __( 'Search Portfolio' ),
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




function tiblers_shortcode() {
    ob_start(); ?>
    <div class="title">Tiblers as in</div>
    <div class="main-title-section">
        <div class="main-title">
            <span>Designer</span> 
            <p>+Developer</p>
        </div>
        <div class="sub-title">
            <p>“We <span> Digitize</span> Your Dreams That Help You <span>Grow</span> ”</p>
        </div>
    </div>
    <div class="mouse-section">
        <span></span>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('tiblers', 'tiblers_shortcode');




function shortcode_ourwork() {
    ob_start();
    ?>
    <div class="slider-section" id="slider_box">
        <div class="slider-header ml-180">
            <div class="title">Our Work</div>
            <a href="http://localhost/tibicle/all-projects/">
                <button class="btn icon-btn">
                    All Projects
                    <div class="icon">
                        <img src="<?php echo esc_url(get_template_directory_uri()) . '/asset/img/arrow-white.svg'; ?>" alt="arrow-icon">
                    </div>
                </button>
            </a>
        </div>
        
        <div class="slider-inner">
            <div class="slider-content">
                <?php
                $portfolio_query = new WP_Query( array(
                    'post_type'      => 'portfolio',
                    'posts_per_page' => -1,
                ) );

                if ( $portfolio_query->have_posts() ) {
                    while ( $portfolio_query->have_posts() ) {
                        $portfolio_query->the_post();
                        $categories     = get_the_terms( get_the_ID(), 'category' );
                        $category_class = '';
                        $title_slug     = sanitize_title( get_the_title() );
                        $category_class .= $title_slug . '-project';
                        $color          = get_field( 'project_background_color' );

                        if ( has_post_thumbnail() ) {
                            $post_thumbnail_url = get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' );
                            $thumbnail_image    = $post_thumbnail_url ? '<img src="' . esc_url( $post_thumbnail_url ) . '" alt="">' : '<img src="' . esc_url( get_template_directory_uri() . '/placeholder-image.jpg' ) . '" alt="Placeholder Image">';
                            ?>
                            <div class="slider project_card <?php echo esc_attr( $category_class ); ?>">
                                <div class="slider-img">
                                    <div class="image" data-color="<?php echo esc_attr( $color ); ?>" onmouseover="get_bg_color(this)" onmouseout="mouseOut()">
                                        <?php echo $thumbnail_image; ?>
                                    </div>
                                    <div class="project-name">
                                        <span><?php echo get_the_title(); ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    wp_reset_postdata();
                } else {
                    echo 'No services found.';
                }
                ?>
            </div>
            <div class="latest-work">
                We’d like it if you look at our latest Work
            </div>
        </div>
    </div>
    <?php
    $output = ob_get_clean();

    return $output;
}
add_shortcode( 'ourwork_section', 'shortcode_ourwork' );

function our_services_shortcode() {
    ob_start();
    ?>
    <div class="services-content">
        <div class="header-title">
            <span class="border-text">OUR</span>
            <span>Services</span>
        </div>
        <div class="services-list">
            <?php if (have_rows('our_services', 'option')) : ?>
                <?php while (have_rows('our_services', 'option')) : the_row(); ?>
                    <div class="services-item">
                        <div class="services-icon">
                            <div class="icon">
                                <img src="<?php echo esc_url(get_sub_field('os_image')); ?>" alt="logo">
                            </div>
                        </div>
                        <div class="services-name">
                            <?php echo esc_html(get_sub_field('os_title')); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <?php
    $output = ob_get_clean();

    return $output;
}
add_shortcode('our_services', 'our_services_shortcode');


function shortcode_life_at() {
    ob_start();
    ?>
    <div class="our-life-content ml-180">
        <div class="tree-image">
            <img src="<?php echo esc_url(get_template_directory_uri()) . '/asset/img/tree-icon.svg'; ?>" alt="tree-icon">
        </div>
        <div class="tree-image tree-image-two">
            <img src="<?php echo esc_url(get_template_directory_uri()) . '/asset/img/tree-icon.svg'; ?>" alt="tree-icon">
        </div>
        <div class="tree-image tree-image-three">
            <img src="<?php echo esc_url(get_template_directory_uri()) . '/asset/img/tree-icon.svg'; ?>" alt="tree-icon">
        </div>
        <div class="header-title">
            <span class="border-text">OUR</span>
            <span>LIFE@T</span>
        </div>
        <div class="our-life">
            <div class="life-section trips-section">
                <h4>T</h4>
                <div class="trips-text">
                    <span>RIPS</span>
                </div>
                <div class="image">
                    <img src="<?php echo esc_url(get_template_directory_uri()) . '/asset/img/car.svg'; ?>" alt="car-icon">
                </div>
            </div>
            <div class="life-section rejoice-section">
                <h4>R</h4>
                <div class="trips-text">
                    <span>EJOICE</span>
                </div>
                <div class="image">
                    <img src="<?php echo esc_url(get_template_directory_uri()) . '/asset/img/rejoice-icon.svg'; ?>" alt="rejoice-icon">
                </div>
            </div>
            <div class="life-section dinner-section">
                <h4>D</h4>
                <div class="dinner-text">
                    <span>R</span>
                    <span>E</span>
                    <span>N</span>
                    <span>N</span>
                    <span>I</span>
                </div>
                <div class="image">
                    <img src="<?php echo esc_url(get_template_directory_uri()) . '/asset/img/dinner-icon.svg'; ?>" alt="dinner-icon">
                </div>
            </div>
        </div>
        <p>
            “The strength of the team 
            is each individual member. 
            The strength of each member 
            is the team.” - <span>Tibicle LLP.</span> 
        </p>
    </div>
    <?php
    $output = ob_get_clean();

    return $output;
}
add_shortcode('life_at_section', 'shortcode_life_at');

function hire_section_shortcode() {
    ob_start();
    ?>
    <div class="hire-content ml-180">
        <div class="left-section">
            <div class="header-title">
                <span class="border-text">Hire Tibicle</span>
                <span>For Your Dream</span>
            </div>
            <p>In our world, there's no such thing as having too many clients</p>
            <div class="contact-info">
                <div class="contact-section email-section">
                    <div class="phone-icon bg-pink">
                        <img src="<?php echo esc_url(get_template_directory_uri()) . '/asset/img/phone-icon.svg'; ?>" alt="icon">             
                    </div>
                    <div class="contact-details">
                        <span>Career Email</span>
                        <div class="phone-number">info@tibicle.com</div>
                    </div>
                </div>
                <div class="contact-section">
                    <div class="phone-icon bg-yellow">
                        <img src="<?php echo esc_url(get_template_directory_uri()) . '/asset/img/phone-icon.svg'; ?>" alt="icon">             
                    </div>
                    <div class="contact-details">
                        <span>Phone</span>
                        <div class="phone-number">+91 97249 22880</div>
                    </div>
                </div>
            </div>
            <form>
                <div class="input-field">
                    <input type="text" placeholder="Name*">
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Email*">
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Phone Number*">
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Website">
                </div>
                <div class="input-field textarea-field">
                    <textarea name="Message" cols="30" rows="5" placeholder="Write Message"></textarea>
                </div>
                <div class="btn-section">
                    <a href="#">
                        <button class="btn icon-btn">
                            Let’s Connect
                            <div class="icon">
                                <img src="<?php echo esc_url(get_template_directory_uri()) . '/asset/img/purple-arrow.svg'; ?>" alt="arrow-icon">
                            </div>
                        </button>
                    </a>
                </div>
            </form>
        </div>
        <div class="right-section">
            <div class="image">
                <img src="<?php echo esc_url(get_template_directory_uri()) . '/asset/img/hire-section-img.svg'; ?>" alt="img">
            </div>
        </div>
    </div>
    <?php
    $output = ob_get_clean();

    return $output;
}
add_shortcode('hire_section', 'hire_section_shortcode');


function shortcode_join_tibicle(){
	return '<div class="join-content">
		<div class="image">
		  <img src="' . esc_url(get_template_directory_uri()) . '/asset/img/join-section-bg.svg" alt="bg">
		</div>
		<div class="left-section">
		  <div class="header-title">
			<span class="border-text">JOIN</span>
			<span>Tibicle</span>
		  </div>
		  <div class="border"></div>
		  <p>We\'re always on the lookout for talented.</p>
		  <a href="#">
			<button class="btn icon-btn">
			  Apply Now
			  <div class="icon">
				<img src="' . esc_url(get_template_directory_uri()) . '/asset/img/arrow-white.svg" alt="arrow-icon">
			  </div>
			</button>
		  </a>
		</div>
		<div class="right-section">
		  <div class="image-icon">
			<img src="' . esc_url(get_template_directory_uri()) . '/asset/img/join-section-icon.svg" alt="bgjoin-section-icon">
		  </div>
		</div>
	  </div>';
}

add_shortcode('join_tibicle_section','shortcode_join_tibicle');


