<?php

function blog_customizations($wp_customize) {
    
    $panel = 'blog_panel';
    
    $wp_customize->add_panel( $panel, array(
        'priority'       => 1,
        'title'          => 'Blog Settings',
        'description'    => '',
    ));

    // ---------------------------------------

    $section = 'blog_settings';
    $wp_customize->add_section($section, array(
        'title' => 'Blog Settings',
        'priority' => 1
    ));

    // ---------------------------------------

    $setting = $section.'_background_choice';
    $wp_customize->add_setting($setting, array(
        'default' => 'color'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting.'_control', array(
        'label' => 'Blog Background',
        'priority' => 10,
        'type'  => 'radio',
        'section' => $section,
        'settings' => $setting,
        'choices'  => array(
			'color'  => 'Color',
			'image' => 'Image',
		),
    )));

    // ---------------------------------------

    $setting = $section.'_blog_background_color';
    $wp_customize->add_setting($setting, array(
        'default' => '#111'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $setting.'_control', array(
        'label' => 'Background Color',
        'section' => $section,
        'settings' => $setting,
        'priority' => 20
    )));

    // ---------------------------------------

    $setting = $section.'_blog_background_image';
    $wp_customize->add_setting($setting);

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $setting.'_control', array(
        'label' => 'Background Image',
        'section' => $section,
        'settings' => $setting,
        'priority' => 30
    )));

    // ---------------------------------------

    $setting = $section.'_blog_heading';
    $wp_customize->add_setting($setting, array(
        'default' => 'The Blog'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting.'_control', array(
        'label' => 'Blog Title',
        'section' => $section,
        'settings' => $setting,
        'type'  => 'text',
        'priority' => 40
    )));

    // ---------------------------------------

    $setting = $section.'_blog_heading_color';
    $wp_customize->add_setting($setting, array(
        'default' => '#fff'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $setting.'_control', array(
        'label' => 'Title Color',
        'section' => $section,
        'settings' => $setting,
        'priority' => 50
    )));

    // ---------------------------------------

    $setting = $section.'_blog_header_overlay';
    $wp_customize->add_setting($setting, array(
        'default' => '0.5'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting.'_control', array(
        'label' => 'Overlay Opacity',
        'section' => $section,
        'settings' => $setting,
        'priority' => 60,
        'type'     => 'select', 
        'choices'   => array(
            '0'     => '(0%) Transparent',
            '0.1'   => '10%',
            '0.2'   => '20%',
            '0.3'   => '30%',
            '0.4'   => '40%',
            '0.5'   => '50%',
            '0.6'   => '60%',
            '0.7'   => '70%',
            '0.8'   => '80%',
            '0.9'   => '90%',
            '1'   => '100% (Solid)',

        )
    )));

    // ---------------------------------------

    $setting = $section.'_blog_header_overlay_color';
    $wp_customize->add_setting($setting, array(
        'default' => '#111'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $setting.'_control', array(
        'label' => 'Overlay Color',
        'section' => $section,
        'settings' => $setting,
        'priority' => 70
    )));
};
add_action( 'customize_register', 'blog_customizations' );