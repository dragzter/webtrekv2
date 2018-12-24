<?php
/**
 * webtrek Theme Customizer
 *
 * @package webtrek
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function webtrek_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'webtrek_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'webtrek_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'webtrek_customize_register' );


/**
 * Remove redundant/default WordPress sections in the Theme Customizer.
 * 
 * This removes unused customizer sections.
 * Conets out or remove this function to re-enabl them.
 * 
 */
function remove_redundant_sections( $wp_customize ) {
	$wp_customize->remove_section('colors');
    $wp_customize->remove_section('header_image');
    $wp_customize->remove_section('background_image');
}
add_action( 'customize_register', 'remove_redundant_sections' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function webtrek_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function webtrek_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function webtrek_customize_preview_js() {
	wp_enqueue_script( 'webtrek-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'webtrek_customize_preview_js' );
