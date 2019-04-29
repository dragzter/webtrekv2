<?php
/**
 * webtrek functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package webtrek
 */

/**
 * Enqueue scripts and styles.
 */
function webtrek_scripts() {

	$style_path = get_template_directory() . '/assets/css/style.css';
	$ob_style_path = get_template_directory() . '/assets/css/clean-css.css';
	$script_path = get_template_directory() . '/assets/js/main.js';
	
	// Deregister WP jQuery
	wp_deregister_script('jquery');
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/lib/jquery/jquery.min.js', array(), '20151215', true );

	wp_enqueue_style( 'webtrek-wp-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/lib/bootstrap/css/bootstrap.min.css', array(), '1.0.0', false );
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/assets/lib/font-awesome/css/font-awesome.min.css', array(), '1.0.0', false );
	wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/assets/lib/animate/animate.min.css', array(), '1.0.0', false );
	wp_enqueue_style( 'ion-icons-css', get_template_directory_uri() . '/assets/lib/ionicons/css/ionicons.min.css', array(), '1.0.0', false );
	wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri() . '/assets/lib/owlcarousel/assets/owl.carousel.min.css', array(), '1.0.0', false );
	wp_enqueue_style( 'lightbox-css', get_template_directory_uri() . '/assets/lib/lightbox/css/lightbox.min.css', array(), '1.0.0', false );
	wp_enqueue_style( 'wt-main', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime( $style_path ), false );
	wp_enqueue_style( 'wt-custom-ob-css', get_template_directory_uri() . '/assets/css/clean-css.css', array(), filemtime( $ob_style_path ), false );

	wp_enqueue_script( 'wt-jquery-migrate', get_template_directory_uri() . '/assets/lib/jquery/jquery-migrate.min.js', array(), '20151215', true );
	wp_enqueue_script( 'bs-bundle', get_template_directory_uri() . '/assets/lib/bootstrap/js/bootstrap.bundle.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wt-easing', get_template_directory_uri() . '/assets/lib/easing/easing.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wt-hover-intent', get_template_directory_uri() . '/assets/lib/superfish/hoverIntent.js', array(), '20151215', true );
	wp_enqueue_script( 'wt-superfish', get_template_directory_uri() . '/assets/lib/superfish/superfish.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wt-wow-min', get_template_directory_uri() . '/assets/lib/wow/wow.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wt-countup', get_template_directory_uri() . '/assets/lib/counterup/counterup.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wt-waypoints', get_template_directory_uri() . '/assets/lib/waypoints/waypoints.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wt-owl-carousel', get_template_directory_uri() . '/assets/lib/owlcarousel/owl.carousel.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wt-isotope', get_template_directory_uri() . '/assets/lib/isotope/isotope.pkgd.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wt-lightbox', get_template_directory_uri() . '/assets/lib/lightbox/js/lightbox.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wt-toushswipe', get_template_directory_uri() . '/assets/lib/touchSwipe/jquery.touchSwipe.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wt-contactform', get_template_directory_uri() . '/contactform/contactform.js', array(), '20151215', true );
	wp_enqueue_script( 'wt-newsletter', get_template_directory_uri() . '/contactform/newsletter.js', array(), '20151215', true );
	wp_enqueue_script( 'wt-mailchimp', get_template_directory_uri() . '/contactform/mailchimp-submit.js', array(), '20758764', true );
	wp_enqueue_script( 'navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'wt-main', get_template_directory_uri() . '/assets/js/main-min.js', array(), filemtime( $script_path ), true );
	wp_enqueue_script( 'webtrek-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'webtrek_scripts' );

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
require get_template_directory() . '/inc/customizer/section-colors-customizer.php';
require get_template_directory() . '/inc/customizer/fixed-cta-customizer.php';
require get_template_directory() . '/inc/customizer/font-setter.php';

/**
 * Custom Functions and Includes
 */
require get_template_directory() . '/inc/metabox/metabox.php';
require get_template_directory() . '/inc/custom-functions/webtrek.php';
require get_template_directory() . '/inc/custom-widgets.php';
require get_template_directory() . '/inc/ob-css.php';
require get_template_directory() . '/inc/custom-functions/custom-functions.php';

/**
 * Ajax Handlers
 */
require get_template_directory() . '/contactform/insert-testimonial.php';

/**
 * Custom Post Types
 */
require get_template_directory() . '/inc/custom-post-types/testimonial.php';


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
require get_template_directory() . '/partials/partial-accordion.php';
require get_template_directory() . '/partials/partial-fifty-fifty.php';
require get_template_directory() . '/partials/fixed-cta.php';
require get_template_directory() . '/partials/partial-newsletter-signup.php';
require get_template_directory() . '/partials/partial-add-testimonial.php';
require get_template_directory() . '/partials/partial-display-testimonials.php';
require get_template_directory() . '/partials/partial-mailchimp.php';

/**
 * Bootstrap navwalker
 */
require_once get_template_directory() . '/inc/bootstrap-navwalker.php';


/**
 * Shortcodes
 * 
 * Newsletter signup [newsletter]
 * Testimonial Form [testimonial-form]
 * Mailchimp Signup [mailchimp-signup]
 * 
 */
function newsletter_form() {
	return get_partial_newsletter();
}
add_shortcode( 'newsletter', 'newsletter_form' );

function testimonial_form_short_code() {
	return get_partial_add_testimonial();
}
add_shortcode( 'testimonial-form', 'testimonial_form_short_code' );

function testimonial_cards_short_code() {
	return get_partial_display_testimonials();
}
add_shortcode( 'testimonial-cards', 'testimonial_cards_short_code' );

function mailchimp_signup_form() {
	return get_partial_mailchimp();
}
add_shortcode( 'mailchimp-signup', 'mailchimp_signup_form' );

/**
 * Run Custom css through output buffer
 */
css_generate();