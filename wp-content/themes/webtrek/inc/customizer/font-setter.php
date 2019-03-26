<?php

function custom_font_settings($wp_customize) {
    
    $section = 'font_family';
    $wp_customize->add_section($section, array(
        'title' => 'Global Font Settings',
        'priority' => 5
    ));

    // ---------------------------------------- //
    $setting = $section.'_body';
    $wp_customize->add_setting($setting);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting.'_control', array(
        'label'     => 'Body (fall back)',
        'description' => 'Will be the default font if none is set.',
        'section'  => $section,
        'settings' => $setting,
        'priority' => 5,
        'type' => 'select',
        'choices'      => array(
            'montserrat' => 'Montserrat, sans-serif',
            'dosis' => 'Dosis, sans-serif',
            'merriweather' => 'Merriweather, serif',
            'lato' => 'Lato, sans-serif',
            'sourcesanspro' => 'Source Sans Pro, sans-serif',
            'poppins' => 'Poppins, sans-serif',
            'librefranklin' => 'Libre Franklin, sans-serif',
            'oldstandardtt' => 'Old Standard TT, serif',
            'roboto' => 'Roboto, sans-serif',
            'worksans' => 'Work Sans, sans-serif',
            'playfair' => 'Playfair, serif'
        )
    )));

    // ---------------------------------------- //
    $setting = $section.'_h1';
    $wp_customize->add_setting($setting);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting.'_control', array(
        'label'     => 'H1 Font Family',
        'section'  => $section,
        'settings' => $setting,
        'priority' => 10,
        'type' => 'select',
        'choices'      => array(
            'montserrat' => 'Montserrat, sans-serif',
            'dosis' => 'Dosis, sans-serif',
            'merriweather' => 'Merriweather, serif',
            'lato' => 'Lato, sans-serif',
            'sourcesanspro' => 'Source Sans Pro, sans-serif',
            'poppins' => 'Poppins, sans-serif',
            'librefranklin' => 'Libre Franklin, sans-serif',
            'oldstandardtt' => 'Old Standard TT, serif',
            'roboto' => 'Roboto, sans-serif',
            'worksans' => 'Work Sans, sans-serif',
            'playfair' => 'Playfair, serif'
        )
    )));

    // ---------------------------------------- //
    $setting = $section.'_h2';
    $wp_customize->add_setting($setting);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting.'_control', array(
        'label'     => 'H2 Font Family',
        'section'  => $section,
        'settings' => $setting,
        'priority' => 20,
        'type' => 'select',
        'choices'      => array(
            'montserrat' => 'Montserrat, sans-serif',
            'dosis' => 'Dosis, sans-serif',
            'merriweather' => 'Merriweather, serif',
            'lato' => 'Lato, sans-serif',
            'sourcesanspro' => 'Source Sans Pro, sans-serif',
            'poppins' => 'Poppins, sans-serif',
            'librefranklin' => 'Libre Franklin, sans-serif',
            'oldstandardtt' => 'Old Standard TT, serif',
            'roboto' => 'Roboto, sans-serif',
            'worksans' => 'Work Sans, sans-serif',
            'playfair' => 'Playfair, serif'
        )
    )));

    // ---------------------------------------- //
    $setting = $section.'_h3';
    $wp_customize->add_setting($setting);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting.'_control', array(
        'label'     => 'H3 Font Family',
        'section'  => $section,
        'settings' => $setting,
        'priority' => 30,
        'type' => 'select',
        'choices'      => array(
            'montserrat' => 'Montserrat, sans-serif',
            'dosis' => 'Dosis, sans-serif',
            'merriweather' => 'Merriweather, serif',
            'lato' => 'Lato, sans-serif',
            'sourcesanspro' => 'Source Sans Pro, sans-serif',
            'poppins' => 'Poppins, sans-serif',
            'librefranklin' => 'Libre Franklin, sans-serif',
            'oldstandardtt' => 'Old Standard TT, serif',
            'roboto' => 'Roboto, sans-serif',
            'worksans' => 'Work Sans, sans-serif',
            'playfair' => 'Playfair, serif'
        )
    )));

    // ---------------------------------------- //
    $setting = $section.'_h4';
    $wp_customize->add_setting($setting);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting.'_control', array(
        'label'     => 'H4 Font Family',
        'section'  => $section,
        'settings' => $setting,
        'priority' => 40,
        'type' => 'select',
        'choices'      => array(
            'montserrat' => 'Montserrat, sans-serif',
            'dosis' => 'Dosis, sans-serif',
            'merriweather' => 'Merriweather, serif',
            'lato' => 'Lato, sans-serif',
            'sourcesanspro' => 'Source Sans Pro, sans-serif',
            'poppins' => 'Poppins, sans-serif',
            'librefranklin' => 'Libre Franklin, sans-serif',
            'oldstandardtt' => 'Old Standard TT, serif',
            'roboto' => 'Roboto, sans-serif',
            'worksans' => 'Work Sans, sans-serif',
            'playfair' => 'Playfair, serif'
        )
    )));

    // ---------------------------------------- //
    $setting = $section.'_h5';
    $wp_customize->add_setting($setting);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting.'_control', array(
        'label'     => 'H5 Font Family',
        'section'  => $section,
        'settings' => $setting,
        'priority' => 50,
        'type' => 'select',
        'choices'      => array(
            'montserrat' => 'Montserrat, sans-serif',
            'dosis' => 'Dosis, sans-serif',
            'merriweather' => 'Merriweather, serif',
            'lato' => 'Lato, sans-serif',
            'sourcesanspro' => 'Source Sans Pro, sans-serif',
            'poppins' => 'Poppins, sans-serif',
            'librefranklin' => 'Libre Franklin, sans-serif',
            'oldstandardtt' => 'Old Standard TT, serif',
            'roboto' => 'Roboto, sans-serif',
            'worksans' => 'Work Sans, sans-serif',
            'playfair' => 'Playfair, serif'
        )
    )));

    // ---------------------------------------- //
    $setting = $section.'_h6';
    $wp_customize->add_setting($setting);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting.'_control', array(
        'label'     => 'H6 Font Family',
        'section'  => $section,
        'settings' => $setting,
        'priority' => 60,
        'type' => 'select',
        'choices'      => array(
            'montserrat' => 'Montserrat, sans-serif',
            'dosis' => 'Dosis, sans-serif',
            'merriweather' => 'Merriweather, serif',
            'lato' => 'Lato, sans-serif',
            'sourcesanspro' => 'Source Sans Pro, sans-serif',
            'poppins' => 'Poppins, sans-serif',
            'librefranklin' => 'Libre Franklin, sans-serif',
            'oldstandardtt' => 'Old Standard TT, serif',
            'roboto' => 'Roboto, sans-serif',
            'worksans' => 'Work Sans, sans-serif',
            'playfair' => 'Playfair, serif'
        )
    )));

    // ---------------------------------------- //
    $setting = $section.'_p';
    $wp_customize->add_setting($setting);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting.'_control', array(
        'label'     => '<p> Font Family',
        'description' => 'The vast majority of body copy.',
        'section'  => $section,
        'settings' => $setting,
        'priority' => 70,
        'type' => 'select',
        'choices'      => array(
            'montserrat' => 'Montserrat, sans-serif',
            'dosis' => 'Dosis, sans-serif',
            'merriweather' => 'Merriweather, serif',
            'lato' => 'Lato, sans-serif',
            'sourcesanspro' => 'Source Sans Pro, sans-serif',
            'poppins' => 'Poppins, sans-serif',
            'librefranklin' => 'Libre Franklin, sans-serif',
            'oldstandardtt' => 'Old Standard TT, serif',
            'roboto' => 'Roboto, sans-serif',
            'worksans' => 'Work Sans, sans-serif',
            'playfair' => 'Playfair, serif'
        )
    )));

    $setting = $section.'_a';
    $wp_customize->add_setting($setting);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting.'_control', array(
        'label'     => '<a> Font Family',
        'description' => 'The vast majority of links, buttons.',
        'section'  => $section,
        'settings' => $setting,
        'priority' => 80,
        'type' => 'select',
        'choices'      => array(
            'default' => 'Select One',
            'montserrat' => 'Montserrat, sans-serif',
            'dosis' => 'Dosis, sans-serif',
            'merriweather' => 'Merriweather, serif',
            'lato' => 'Lato, sans-serif',
            'sourcesanspro' => 'Source Sans Pro, sans-serif',
            'poppins' => 'Poppins, sans-serif',
            'librefranklin' => 'Libre Franklin, sans-serif',
            'oldstandardtt' => 'Old Standard TT, serif',
            'roboto' => 'Roboto, sans-serif',
            'worksans' => 'Work Sans, sans-serif',
            'playfair' => 'Playfair, serif'
        )
    )));

}
add_action('customize_register', 'custom_font_settings');