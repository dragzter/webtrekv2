<?php

// Header scroll class
function header_scroll_class() {
    $header_behavior = get_theme_mod('header_scroll_behavior', 'scroll');

    $solid_on_load = "<script class='header-scroll-function' type='text/javascript'>jQuery('#header').addClass('header-scrolled');</script>";
	$solid_on_scroll = "<script class='header-scroll-function' type='text/javascript'>jQuery(window).scroll(function(){if(jQuery(this).scrollTop()>100){jQuery('#header').addClass('header-scrolled');}else{jQuery('#header').removeClass('header-scrolled');}});</script>";
    
    if ($header_behavior == 'scroll') {
        echo $solid_on_scroll;
    } elseif ($header_behavior == 'no_scroll') {
        echo $solid_on_load;
    } else {
        // Do Nothing
    }
}
add_action('wp_footer', 'header_scroll_class', 100);


function custom_login_stylesheet() {

	wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/css/admin/style.css' );
	
	$logo = get_theme_mod('custom_login_logo');
	
	if ($logo !== '') {
		$logo_ = 'url("'.$logo.'")!important;background-size:cover!important;width: 100%!important';
	} else {
		$logo_ = 'url("/wp-admin/images/wordpress-logo.svg")!important';
	}

	$custom_logo = '<style>';
	$custom_logo .= '.login h1 a {background-image:'.$logo_.';}';
	$custom_logo .= '</style>';
	echo $custom_logo;
}
add_action( 'login_enqueue_scripts', 'custom_login_stylesheet' );

// Font settings for customizer
function generate_fonts() {
	
	$body_font = get_theme_mod('font_family_body');
	$p_font = get_theme_mod('font_family_p');
	$a_font = get_theme_mod('font_family_a');
	$h1_font = get_theme_mod('font_family_h1');
	$h2_font = get_theme_mod('font_family_h2');
	$h3_font = get_theme_mod('font_family_h3');
	$h4_font = get_theme_mod('font_family_h4');
	$h5_font = get_theme_mod('font_family_h5');
	$h6_font = get_theme_mod('font_family_h6');
	
	$css = '<style id="font-custom" type="text/css">';
	$css .= 'body {font-family:'.$body_font.';}';
	$css .= 'p {font-family:'.$p_font.';}';
	$css .= 'a {font-family:'.$a_font.';}';
	$css .= 'h1 {font-family:'.$h1_font.';}';
	$css .= 'h2 {font-family:'.$h2_font.';}';
	$css .= 'h3 {font-family:'.$h3_font.';}';
	$css .= 'h4 {font-family:'.$h4_font.';}';
	$css .= 'h5 {font-family:'.$h5_font.';}';
	$css .= 'h6 {font-family:'.$h6_font.';}';
	$css .= '</style>';

	echo $css;

}
add_action('wp_head', 'generate_fonts');

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

function webtrek_remove_comment_url($arg) {
    $arg['url'] = '';
    return $arg;
}
add_filter('comment_form_default_fields', 'webtrek_remove_comment_url');

function webtrek_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
}  
add_filter( 'comment_form_fields', 'webtrek_move_comment_field_to_bottom');

// Custom Admin footer
function webtrek_remove_footer_admin () {
	echo '<span id="footer-thankyou">Built with love by <a href="https://gowebtrek.com/" target="_blank">Webtrek</a></span>';
}
add_filter( 'admin_footer_text', 'webtrek_remove_footer_admin' );

function webtrek_login_logo_url() {
	return esc_url( home_url( '/' ) );
}
add_filter( 'login_headerurl', 'webtrek_login_logo_url' );

function webtrek_login_logo_url_title() {
	return 'Powered by Webrek';
}
add_filter( 'login_headertitle', 'webtrek_login_logo_url_title' );

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