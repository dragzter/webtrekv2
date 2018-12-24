<?php
/**
 * webtrek functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package webtrek
 */

if ( ! function_exists( 'webtrek_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function webtrek_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on webtrek, use a find and replace
		 * to change 'webtrek' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'webtrek', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'webtrek' ),
		) );

		register_nav_menus( array(
			'secondary' => esc_html__( 'Footer Menu', 'webtrek' ),
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
		add_theme_support( 'custom-background', apply_filters( 'webtrek_custom_background_args', array(
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
add_action( 'after_setup_theme', 'webtrek_setup' );

/**
 * Enqueue scripts and styles.
 */
function webtrek_scripts() {

	$style_path = get_template_directory() . '/css/style.css';
	$ob_style_path = get_template_directory() . '/css/clean-css.css';
	$script_path = get_template_directory() . '/js/main.js';
	
	// Deregister WP jQuery
	wp_deregister_script('jquery');
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/lib/jquery/jquery.min.js', array(), '20151215', true );

	wp_enqueue_style( 'webtrek-wp-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/lib/bootstrap/css/bootstrap.min.css', array(), '1.0.0', false );
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/lib/font-awesome/css/font-awesome.min.css', array(), '1.0.0', false );
	wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/lib/animate/animate.min.css', array(), '1.0.0', false );
	wp_enqueue_style( 'ion-icons-css', get_template_directory_uri() . '/lib/ionicons/css/ionicons.min.css', array(), '1.0.0', false );
	wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css', array(), '1.0.0', false );
	wp_enqueue_style( 'lightbox-css', get_template_directory_uri() . '/lib/lightbox/css/lightbox.min.css', array(), '1.0.0', false );
	wp_enqueue_style( 'wt-main', get_template_directory_uri() . '/css/style.css', array(), filemtime( $style_path ), false );
	wp_enqueue_style( 'wt-custom-ob-css', get_template_directory_uri() . '/css/clean-css.css', array(), filemtime( $ob_style_path ), false );

	wp_enqueue_script( 'wt-jquery-migrate', get_template_directory_uri() . '/lib/jquery/jquery-migrate.min.js', array(), '20151215', true );
	wp_enqueue_script( 'bs-bundle', get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.bundle.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wt-easing', get_template_directory_uri() . '/lib/easing/easing.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wt-hover-intent', get_template_directory_uri() . '/lib/superfish/hoverIntent.js', array(), '20151215', true );
	wp_enqueue_script( 'wt-superfish', get_template_directory_uri() . '/lib/superfish/superfish.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wt-wow-min', get_template_directory_uri() . '/lib/wow/wow.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wt-countup', get_template_directory_uri() . '/lib/counterup/counterup.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wt-waypoints', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wt-owl-carousel', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wt-isotope', get_template_directory_uri() . '/lib/isotope/isotope.pkgd.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wt-lightbox', get_template_directory_uri() . '/lib/lightbox/js/lightbox.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wt-toushswipe', get_template_directory_uri() . '/lib/touchSwipe/jquery.touchSwipe.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wt-contactform', get_template_directory_uri() . '/contactform/contactform.js', array(), '20151215', true );
	wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'wt-main', get_template_directory_uri() . '/js/main.js', array(), filemtime( $script_path ), true );
	wp_enqueue_script( 'webtrek-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'webtrek_scripts' );


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
require get_template_directory() . '/inc/customizer/customizer.php';
require get_template_directory() . '/inc/customizer/blog-customizer-settings.php';
require get_template_directory() . '/inc/customizer/brand-customizations.php';

/**
 * Custom Functions and Includes
 */
require get_template_directory() . '/inc/metabox/metabox.php';
require get_template_directory() . '/inc/custom-functions/webtrek.php';
require get_template_directory() . '/inc/custom-widgets.php';
require get_template_directory() . '/inc/ob-css.php';

/**
 * Partials
 */
require get_template_directory() . '/partials/partial-cta.php';
require get_template_directory() . '/partials/partial-hero.php';
require get_template_directory() . '/partials/partial-about-us.php';
require get_template_directory() . '/partials/partial-clients.php';
require get_template_directory() . '/partials/partial-contact.php';
require get_template_directory() . '/partials/partial-facts.php';
require get_template_directory() . '/partials/partial-featured-services.php';
require get_template_directory() . '/partials/partial-portfolio.php';
require get_template_directory() . '/partials/partial-services.php';
require get_template_directory() . '/partials/partial-skills.php';
require get_template_directory() . '/partials/partial-team.php';
require get_template_directory() . '/partials/partial-testimonials.php';
require get_template_directory() . '/partials/partial-content.php';
require get_template_directory() . '/partials/partial-post.php';

/**
 * Remove Admin Bar
 */
add_filter('show_admin_bar', '__return_false');

/**
 * Set custom excerpt length
 */
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/**
 * Change Seach form placeholder text
 */
// function wpforo_search_form( $html ) {

// 	$html = str_replace( 'placeholder="Search ', 'placeholder="Search Webtrek', $html );
// 	return $html;
// }
// add_filter( 'get_search_form', 'wpforo_search_form' );
/**
 * Bootstrap navwalker
 */
require_once get_template_directory() . '/inc/bootstrap-navwalker.php';

/**
 * Run Custom css through output buffer
 */
css_generate();