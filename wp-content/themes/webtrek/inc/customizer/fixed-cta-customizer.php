<?php 

function fixed_cta_customization($wp_customize) {

    // Inlcude the Alpha Color Picker control file.
    require_once( dirname( __FILE__ ) . '/alpha-color-picker/alpha-color-picker.php' );

    $section = 'fixed_cta';
    $wp_customize->add_section($section, array(
        'title' => 'Fixed CTA Settings',
        'priority' => 2
    ));

    // --------- Settings -------- //
    $setting = $section.'_display';
    $wp_customize->add_setting($setting, array(
        'default'   => 'yes'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting.'_control', array(
        'label'     => 'Show CTA?',
        'section'   => $section,
        'settings'  => $setting,
        'priority'  => 5,
        'type'      => 'radio',
        'choices'   => array(
            'yes' => 'Yes',
            'no' => 'No'
        ),
    )));

    $setting = $section.'_mobile_display';
    $wp_customize->add_setting($setting, array(
        'default'   => 'yes'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting.'_control', array(
        'label'     => 'Show Mobile CTA?',
        'section'   => $section,
        'settings'  => $setting,
        'priority'  => 7,
        'type'      => 'radio',
        'choices'   => array(
            'yes' => 'Yes',
            'no' => 'No'
        ),
    )));


    $setting = $section.'_background_1';
    $wp_customize->add_setting($setting, array(
        'default' => '#fefefe'
    ));

	$wp_customize->add_control( new Customize_Alpha_Color_Control( $wp_customize, $setting.'_control', array(
        'label'         => 'Background Color 1',
        'description'   => 'Colors combine to form a 3 color gradient.',
        'section'       => $section,
        'settings'      => $setting,
        'priority'      => 10,
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
        )
    )));

    $setting = $section.'_background_2';
    $wp_customize->add_setting($setting, array(
        'default' => '#fefefe'
    ));

	$wp_customize->add_control( new Customize_Alpha_Color_Control( $wp_customize, $setting.'_control', array(
        'label'         => 'Background Color 2',
        'section'       => $section,
        'settings'      => $setting,
        'priority'      => 20,
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
        )
    )));

    $setting = $section.'_background_3';
    $wp_customize->add_setting($setting, array(
        'default' => '#fefefe'
    ));

	$wp_customize->add_control( new Customize_Alpha_Color_Control( $wp_customize, $setting.'_control', array(
        'label'         => 'Background Color 3',
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
        )
    )));

    $setting = $section.'_number';
    $wp_customize->add_setting($setting, array(
        'default'   => '(099) 555-7888'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting.'_control', array(
        'label'     => 'Phone Number',
        'section'   => $section,
        'settings'  => $setting,
        'priority'  => 40,
        'type'      => 'text'
    )));

    $setting = $section.'_secondary_text';
    $wp_customize->add_setting($setting, array(
        'default'   => 'Call Now'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting.'_control', array(
        'label'     => 'Subtext',
        'section'   => $section,
        'settings'  => $setting,
        'priority'  => 50,
        'type'      => 'text'
    )));
}
add_action('customize_register', 'fixed_cta_customization');