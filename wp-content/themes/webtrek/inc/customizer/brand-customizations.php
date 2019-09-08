<?php

function brand_customizations($wp_customize) {

    // Inlcude the Alpha Color Picker control file.
    require_once( dirname( __FILE__ ) . '/alpha-color-picker/alpha-color-picker.php' );
    
    $section = 'contact_settings';
    $wp_customize->add_section($section, array(
        'title' => 'Contact Settings',
        'priority' => 0
    ));

    $setting = $section.'_email';
    $wp_customize->add_setting($setting, array(
        'default' => 'email@example.com'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting.'_control', array(
        'label' => 'Contact Form Email',
        'description' => 'Sets recipient e-mail of the contact form.',
        'section' => $section,
        'settings' => $setting,
        'type'     => 'url',
        'priority' => 10
    )));

    $setting = $section.'_newsletter_email';
    $wp_customize->add_setting($setting, array(
        'default' => 'email@example.com'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting.'_control', array(
        'label' => 'Newsletter signup Form Email',
        'description' => 'Recipient e-mail for the Newsletter form.  This is the basic news letter initiated via shortcode [newsletter]',
        'section' => $section,
        'settings' => $setting,
        'type'     => 'url',
        'priority' => 11
    )));

    $setting = $section.'_mailchimp_html';
    $wp_customize->add_setting($setting);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting.'_control', array(
        'label' => 'Mailchimp form HTML',
        'description' => 'Add in generated html for mailchimp form.  This form can be added in via [mailchimp-signup] shortcode.',
        'section' => $section,
        'settings' => $setting,
        'type'     => 'textarea',
        'priority' => 30
    )));

    // ---------------------------------------

    $section = 'brand';
    $wp_customize->add_section($section, array(
        'title' => 'Brand Settings',
        'priority' => 2,
        'panel' => 'section_panel'
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

    $setting = $section.'_secondary_color';
    $wp_customize->add_setting($setting, array(
        'default' => '#fe2600'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $setting.'_control', array(
        'label' => 'Secondary/Accent Color',
        'description' => 'Sets accent color for certain elements.',
        'section' => $section,
        'settings' => $setting,
        'priority' => 11
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

    $setting = $section.'_footer_logo';
    $wp_customize->add_setting($setting);

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $setting.'_control', array(
        'label' => 'Footer Logo',
        'section' => $section,
        'settings' => $setting,
        'priority' => 40
    )));

    //custom_login_logo
    $section = 'custom_login';
    $wp_customize->add_section($section, array(
        'title' => 'Custom Login',
        'priority' => 0
    ));

    $setting = $section . '_logo';
    $wp_customize->add_setting($setting);

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $setting.'_control', array(
        'label' => 'Logo Upload',
        'description' => 'Custom login screen Logo.',
        'section' => $section,
        'settings' => $setting,
        'priority' => 10
    )));


}
add_action( 'customize_register', 'brand_customizations' );