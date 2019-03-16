<?php

function section_colors_customizations($wp_customize) {
    
    // Inlcude the Alpha Color Picker control file.
    require_once( dirname( __FILE__ ) . '/alpha-color-picker/alpha-color-picker.php' );
    
    $panel = 'section_panel';
    
    $wp_customize->add_panel( $panel, array(
        'priority'       => 1,
        'title'          => 'Section Colors/Backgrounds',
        'description'    => 'Set general section styles.',
    ));

    // Section Contact >>>-------**|>
    
    $section = 'section_contact';
    $wp_customize->add_section($section, array(
        'title' => 'Section Contact Form',
        'panel' => $panel,
        'priority' => 10
    ));

    // Settings for Contact >>>-------**|>
    
    $setting = $section.'_form_background_type';
    $wp_customize->add_setting($setting, array(
        'default' => 'color'
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting.'_control', array(
        'label'     => 'Form Only',
        'description' => 'Type of background for the form half.',
        'section'  => $section,
        'settings' => $setting,
        'priority' => 10,
        'type'     => 'select', 
        'choices'   => array(
            'color'     => 'Color',
            'image'     => 'Image'
        )
    )));

    /* ---------------------------- */
    
    $setting = $section.'_info_background_type';
    $wp_customize->add_setting($setting, array(
        'default' => 'color'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting.'_control', array(
        'label'     => 'Contact Info Only',
        'description' => 'Type of background for the contact info half.',
        'section'  => $section,
        'settings' => $setting,
        'priority' => 20,
        'type'     => 'select', 
        'choices'   => array(
            'color'     => 'Color',
            'image'     => 'Image'
        )
    )));

    /* ---------------------------- */

    $setting = $section.'_form_color_1_background';
    $wp_customize->add_setting($setting, array(
        'default' => '#fefefe'
    ));

	$wp_customize->add_control( new Customize_Alpha_Color_Control( $wp_customize, $setting.'_control', array(
        'label'         => 'Form -COLOR 1- Background',
        'section'       => $section,
        'settings'      => $setting,
        'priority'      => 30,
        'show_opacity'  => true,
        'palette'	=> array(
            '#fe2600', 
            '#333333',
            '#111111',
            '#ffffff',
            '#ff6600',
            '#33DAFF',
            '#00D62A',
            '#FFFC1E',
            '#1E8BFF',
            '#AD1EFF',
            '#FF1E66'
        )
    )));

    /* ---------------------------- */

    $setting = $section.'_form_color_2_background';
    $wp_customize->add_setting($setting, array(
        'default' => '#f5f5f5'
    ));

    $wp_customize->add_control( new Customize_Alpha_Color_Control( $wp_customize, $setting.'_control', array(
        'label'         => 'Form -COLOR 2- Background',
        'section'       => $section,
        'settings'      => $setting,
        'priority'      => 40,
        'show_opacity'  => true,
        'palette'	=> array(
            '#fe2600', 
            '#333333',
            '#111111',
            '#ffffff',
            '#ff6600',
            '#33DAFF',
            '#00D62A',
            '#FFFC1E',
            '#1E8BFF',
            '#AD1EFF',
            '#FF1E66'
        )
    )));

    /* ---------------------------- */

    $setting = $section.'_form_image_background';
    $wp_customize->add_setting($setting);

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $setting.'_control', array(
        'label'     => 'Form -IMAGE- Background',
        'section'  => $section,
        'settings' => $setting,
        'priority' => 50,
    )));

    /* ---------------------------- */

    $setting = $section.'_info_color_1_background';
    $wp_customize->add_setting($setting, array(
        'default' => '#fefefe'
    ));

	$wp_customize->add_control( new Customize_Alpha_Color_Control( $wp_customize, $setting.'_control', array(
        'label'         => 'Info -COLOR 1- Background',
        'section'       => $section,
        'settings'      => $setting,
        'priority'      => 60,
        'show_opacity'  => true,
        'palette'	=> array(
            '#fe2600', 
            '#333333',
            '#111111',
            '#ffffff',
            '#ff6600',
            '#33DAFF',
            '#00D62A',
            '#FFFC1E',
            '#1E8BFF',
            '#AD1EFF',
            '#FF1E66'
        )
    )));

    /* ---------------------------- */

    $setting = $section.'_info_color_2_background';
    $wp_customize->add_setting($setting, array(
        'default' => '#f5f5f5'
    ));

    $wp_customize->add_control( new Customize_Alpha_Color_Control( $wp_customize, $setting.'_control', array(
        'label'         => 'Info -COLOR 2- Background',
        'section'       => $section,
        'settings'      => $setting,
        'priority'      => 70,
        'show_opacity'  => true,
        'palette'	=> array(
            '#fe2600', 
            '#333333',
            '#111111',
            '#ffffff',
            '#ff6600',
            '#33DAFF',
            '#00D62A',
            '#FFFC1E',
            '#1E8BFF',
            '#AD1EFF',
            '#FF1E66'
        )
    )));

    /* ---------------------------- */

    $setting = $section.'_info_image_background';
    $wp_customize->add_setting($setting);

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $setting.'_control', array(
        'label'     => 'Info -IMAGE- Background',
        'section'  => $section,
        'settings' => $setting,
        'priority' => 80,
    )));

    /* ---------------------------- */
    
    $setting = $section.'_info_text_color';
    $wp_customize->add_setting($setting, array(
        'default' => '#fefefe'
    ));

	$wp_customize->add_control( new Customize_Alpha_Color_Control( $wp_customize, $setting.'_control', array(
        'label'         => 'Info Text Color',
        'section'       => $section,
        'settings'      => $setting,
        'priority'      => 90,
        'show_opacity'  => true,
        'palette'	=> array(
            '#fe2600', 
            '#333333',
            '#111111',
            '#ffffff',
            '#ff6600',
            '#33DAFF',
            '#00D62A',
            '#FFFC1E',
            '#1E8BFF',
            '#AD1EFF',
            '#FF1E66'
        )
    )));

    /* ---------------------------- */

    $setting = $section.'_form_text_color';
    $wp_customize->add_setting($setting, array(
        'default' => '#fefefe'
    ));

    $wp_customize->add_control( new Customize_Alpha_Color_Control( $wp_customize, $setting.'_control', array(
        'label'         => 'Form Text Color',
        'section'       => $section,
        'settings'      => $setting,
        'priority'      => 100,
        'show_opacity'  => true,
        'palette'	=> array(
            '#fe2600', 
            '#333333',
            '#111111',
            '#ffffff',
            '#ff6600',
            '#33DAFF',
            '#00D62A',
            '#FFFC1E',
            '#1E8BFF',
            '#AD1EFF',
            '#FF1E66'
        )
    )));

    /* ---------------------------- */

    $setting = $section.'_info_overlay';
    $wp_customize->add_setting($setting);

    $wp_customize->add_control( new Customize_Alpha_Color_Control( $wp_customize, $setting.'_control', array(
        'label'         => 'Info Overlay',
        'section'       => $section,
        'settings'      => $setting,
        'priority'      => 110,
        'show_opacity'  => true,
        'palette'	=> array(
            '#fe2600', 
            '#333333',
            '#111111',
            '#ffffff',
            '#ff6600',
            '#33DAFF',
            '#00D62A',
            '#FFFC1E',
            '#1E8BFF',
            '#AD1EFF',
            '#FF1E66'
        )
    )));

    /* ---------------------------- */

    $setting = $section.'_form_overlay';
    $wp_customize->add_setting($setting);

    $wp_customize->add_control( new Customize_Alpha_Color_Control( $wp_customize, $setting.'_control', array(
        'label'         => 'Form Overlay',
        'section'       => $section,
        'settings'      => $setting,
        'priority'      => 120,
        'show_opacity'  => true,
        'palette'	=> array(
            '#fe2600', 
            '#333333',
            '#111111',
            '#ffffff',
            '#ff6600',
            '#33DAFF',
            '#00D62A',
            '#FFFC1E',
            '#1E8BFF',
            '#AD1EFF',
            '#FF1E66'
        )
    )));







    $section = 'section_cta';
    $wp_customize->add_section($section, array(
        'title' => 'Section Contact Form',
        'panel' => $panel,
        'priority' => 20
    ));

    $section = 'section_feat_serv';
    $wp_customize->add_section($section, array(
        'title' => 'Section Contact Form',
        'panel' => $panel,
        'priority' => 30
    ));

    $section = 'section_testimonial';
    $wp_customize->add_section($section, array(
        'title' => 'Section Contact Form',
        'panel' => $panel,
        'priority' => 40
    ));

    $section = 'section_clients';
    $wp_customize->add_section($section, array(
        'title' => 'Section Contact Form',
        'panel' => $panel,
        'priority' => 50
    ));

    $section = 'section_facts';
    $wp_customize->add_section($section, array(
        'title' => 'Section Contact Form',
        'panel' => $panel,
        'priority' => 60
    ));

    




    // Settings for CTA >>>-------**|>
    // Settings for Featured Services >>>-------**|>
    // Settings for Testimonials >>>-------**|>
    // Settings for Clients >>>-------**|>
    // Settings for Facts >>>-------**|>

    

}

add_action('customize_register', 'section_colors_customizations');