<?php

/**
 * Register custom widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function webtrek_widgets_init() {
    register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'webtrek' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'webtrek' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
    ) );
    
    
    register_sidebar( array(
        'name'          => 'Footer Sidebar 1',
        'id'            => 'sidebar-footer-1',
        'class'         => 'footer-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="footer-sidebar-title">',
        'after_title'   => '</h4>'
    ));

    register_sidebar( array(
        'name'          => 'Footer Sidebar 2',
        'id'            => 'sidebar-footer-2',
        'class'         => 'footer-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="footer-sidebar-title">',
        'after_title'   => '</h4>'
    ));

    register_sidebar( array(
        'name'          => 'Footer Sidebar 3',
        'id'            => 'sidebar-footer-3',
        'class'         => 'footer-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="footer-sidebar-title">',
        'after_title'   => '</h4>'
    ));
}
add_action( 'widgets_init', 'webtrek_widgets_init' );