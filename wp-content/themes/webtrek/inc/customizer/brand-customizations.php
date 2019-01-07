<?php

function brand_customizations($wp_customize) {

    // Inlcude the Alpha Color Picker control file.
	require_once( dirname( __FILE__ ) . '/alpha-color-picker/alpha-color-picker.php' );

    $section = 'brand';
    $wp_customize->add_section($section, array(
        'title' => 'Brand Settings',
        'priority' => 2
    ));

    // ---------------------------------------

    $setting = $section.'_main_color';
    $wp_customize->add_setting($setting, array(
        'default' => '#fe2600'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $setting.'_control', array(
        'label' => 'Main Color',
        'description' => 'Sets button color and miscellaneous elements throughout site.  Intended to set main brand color across entire site.',
        'section' => $section,
        'settings' => $setting,
        'priority' => 10
    )));

    // ---------------------------------------

    // Alpha Color Picker setting.
    $setting = $section.'_nav_color';    
	$wp_customize->add_setting( 'brand_nav_color', array(
        'default'     => 'rgba(209,0,55,0.7)',
        'type'        => 'theme_mod',
        'capability'  => 'edit_theme_options',
        'transport'   => 'postMessage'
    ));

	// Alpha Color Picker control for nav.
	$wp_customize->add_control( new Customize_Alpha_Color_Control( $wp_customize, 'alpha_color_control', array(
            'title'         => 'Navbar color',
            'label'         => 'Select Navbar Color',
            'section'       => $section,
            'settings'      => $setting,
            'priority'      => 20,
            'show_opacity'  => true,
            'palette'	=> array(
                '#fe2600', 
                'rgba(108,130,255,0.77)',
                '#007bff',
                '#00b74d',
                'rgba(0,0,0,0.9)'
            )
        )
    ));

    // ---------------------------------------

    $setting = $section.'_top_footer_color';
    $wp_customize->add_setting($setting, array(
        'default' => '#111'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $setting.'_control', array(
        'label' => 'Top Footer Color',
        'section' => $section,
        'settings' => $setting,
        'priority' => 30
    )));

    // ---------------------------------------

    $setting = $section.'_bottom_footer_color';
    $wp_customize->add_setting($setting, array(
        'default' => '#111'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $setting.'_control', array(
        'label' => 'Bottom Footer Color',
        'section' => $section,
        'settings' => $setting,
        'priority' => 35
    )));

    // ---------------------------------------

    // $setting = $section.'_footer_logo';
    // $wp_customize->add_setting($setting);

    // $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $setting.'_control', array(
    //     'label' => 'Footer Logo',
    //     'section' => $section,
    //     'settings' => $setting,
    //     'priority' => 40
    // )));

}
add_action( 'customize_register', 'brand_customizations' );