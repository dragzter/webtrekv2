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

    /* ---------------------------- */

    $setting = $section.'_form_color_1_background';
    $wp_customize->add_setting($setting, array(
        'default' => '#fefefe'
    ));

	$wp_customize->add_control( new Customize_Alpha_Color_Control( $wp_customize, $setting.'_control', array(
        'label'         => 'Form -COLOR 1- Background',
        'description'   => 'Both colors are part of gradient.',
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
        'description'   => 'Both colors are part of gradient.',
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

    // Section Featured Services >>>-------**|>

    $section = 'section_feat_serv';
    $wp_customize->add_section($section, array(
        'title' => 'Section Featured Services',
        'panel' => $panel,
        'priority' => 30
    ));

    // Settings for Featured Services >>>-------**|>

    $setting = $section.'_background';
    $wp_customize->add_setting($setting, array(
        'default' => '#000'
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $setting.'_control', array(
        'label'     => 'Background Color',
        'section'  => $section,
        'settings' => $setting,
        'priority' => 10,
    )));

    /* ---------------------------- */

    $setting = $section.'_text';
    $wp_customize->add_setting($setting, array(
        'default' => '#fff'
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $setting.'_control', array(
        'label'     => 'Text Color',
        'section'  => $section,
        'settings' => $setting,
        'priority' => 20,
    )));


    // Section Fifty Fifty >>>-------**|>

    $section = 'section_fifty';
    $wp_customize->add_section($section, array(
        'title' => 'Section Fifty Fifty',
        'panel' => $panel,
        'priority' => 40
    ));

    // Settings for Fifty Fifty >>>-------**|>
    
    $setting = $section.'_overlay_color';
    $wp_customize->add_setting($setting, array(
        'default' => '#000'
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $setting.'_control', array(
        'label'     => 'Overlay Color',
        'section'   => $section,
        'settings'  => $setting,
        'priority'  => 10,
    )));

    /* ---------------------------- */

    $setting = $section.'_tooltip_color';
    $wp_customize->add_setting($setting, array(
        'default' => '#000'
    ));
    
    $wp_customize->add_control( new Customize_Alpha_Color_Control( $wp_customize, $setting.'_control', array(
        'label'         => 'Tooltip Color',
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
            '#1E8BFF',
            '#AD1EFF',
            '#FF1E66'
        )
    )));

    /* ---------------------------- */

    $setting = $section.'_tooltip_text_color';
    $wp_customize->add_setting($setting, array(
        'default' => '#000'
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $setting.'_control', array(
        'label'     => 'Tooltip Text Color',
        'section'   => $section,
        'settings'  => $setting,
        'priority'  => 30,
    )));


    // Header behavior
    $section = 'header';
    $wp_customize->add_section($section, array(
        'title' => 'Header & Navigation',
        'priority' => 100,
        'panel' => $panel
    ));

    $setting = $section.'_scroll_behavior';
    $wp_customize->add_setting($setting);
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting.'_control', array(
        'label'     => 'Header scroll behavior',
        'section'   => $section,
        'settings'  => $setting,
        'description' => 'Scroll: Header will be transparent until page is scrolled.  Solid Color: Header will load Solid and not change on scroll.',
        'priority'  => 10,
        'type'      => 'select',
        'choices'   => array(
            'default' => 'Default',
            'scroll' => 'Change On Scroll',
            'no_scroll' => 'Solid Color'
        )
    )));

    //  Map Settings
    $section = 'geomap';
    $wp_customize->add_section($section, array(
        'title' => 'Map Settings',
        'priority' => 110,
        'panel' => $panel
    ));

    $setting = $section.'_marker';
    $wp_customize->add_setting($setting);
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $setting.'_control', array(
        'label'     => 'Marker icon',
        'description' => 'Use square PNG for best results.',
        'section'   => $section,
        'settings'  => $setting,
        'priority'  => 10
    )));

    $setting = $section.'_center';
    $wp_customize->add_setting($setting);
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting.'_control', array(
        'label'     => 'Map center coordinates',
        'description' => 'The center point of map. ( Example: 51.5, -0.09 ), Latitude and Longitude, separate by single comma. Visit geojson.io to get exact coordinates.  If map does not work, try reversing the values.',
        'section'   => $section,
        'settings'  => $setting,
        'priority'  => 20
    )));

    $setting = $section.'_marker_center';
    $wp_customize->add_setting($setting);
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting.'_control', array(
        'label'     => 'Main marker coordinates',
        'description' => 'Main marker center coordinates. Use same value as map center to place marker at center of map.',
        'section'   => $section,
        'settings'  => $setting,
        'priority'  => 30
    )));

    $setting = $section.'_marker_size';
    $wp_customize->add_setting($setting);
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting.'_control', array(
        'label'     => 'Main map marker size (px)',
        'description' => 'Use square PNG for best results.',
        'section'   => $section,
        'settings'  => $setting,
        'priority'  => 40,
        'type'      => 'select',
        'choices'   => array(
            'default'    => 'Default',
            '40,40'    => '2x Small (40x40 pixels)',
            '60,60'    => '1x Small (60x60 pixels)',
            '70,70'    => 'Small (70x70 pixels)',
            '80,80'    => 'Medium (80x80 pixels)',
            '90,90'    => 'Large (90x90 pixels)',
            '100,100'    => '1X Large (100x100 pixels)',
            '110,110'    => '2X Large (110x110 pixels)',
            '120,120'    => '3X Large (120x120 pixels)',
            '130,130'    => '4X Large (130x130 pixels)',
            '140,140'    => '5X Large (140x140 pixels)',
            '150,150'    => '6X Large (150x150 pixels)',
            '160,160'    => '7X Large (160x160 pixels)',
            '170,170'    => '8X Large (170x170 pixels)',
            '180,180'    => '9X Large (180x180 pixels)',
        )
    )));

    $setting = $section.'_marker_tooltip';
    $wp_customize->add_setting($setting, array(
        'default' => 'Popup text Here'
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting.'_control', array(
        'label'     => 'Main marker popup text',
        'description' => 'Appears on marker mouseover, basic info text',
        'section'   => $section,
        'settings'  => $setting,
        'priority'  => 45,
        'type'      => 'textarea'
    )));

    $setting = $section.'_zoom';
    $wp_customize->add_setting($setting, array(
        'default' => '10'
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting.'_control', array(
        'label'     => 'Map zoom Level',
        'description' => '4 -> 18 (maximum zoom)',
        'section'   => $section,
        'settings'  => $setting,
        'priority'  => 50,
        'type'      => 'select',
        'choices'   => array(
            '4'    => 'Level 4',
            '5'    => 'Level 5',
            '6'    => 'Level 6',
            '7'    => 'Level 7',
            '8'    => 'Level 8',
            '9'    => 'Level 9',
            '10'    => 'Level 10 (Recommended)',
            '11'    => 'Level 11',
            '12'    => 'Level 12',
            '13'    => 'Level 13',
            '14'    => 'Level 14',
            '15'    => 'Level 15',
            '16'    => 'Level 16',
            '17'    => 'Level 17',
            '18'    => 'Level 18',
        )
    )));

    $setting = $section.'_additional_markers';
    $wp_customize->add_setting($setting);
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting.'_control', array(
        'label'     => 'Additional map markers',
        'description' => 'Coordinate sets separated by :: ( double colon), every set of coordinates will produce a marker on the map. Example: 51.5,-0.09::50.5,-0.09::71.75,-56.24',
        'section'   => $section,
        'settings'  => $setting,
        'priority'  => 60,
        'type'      => 'textarea'
    )));

    $setting = $section.'_additional_markers_tooltips';
    $wp_customize->add_setting($setting);
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting.'_control', array(
        'label'     => 'Popups for additional map markers',
        'description' => 'First popup text gets matched to first addidional marker set, second to second, etc.  Separate by :: (double colon).',
        'section'   => $section,
        'settings'  => $setting,
        'priority'  => 64,
        'type'      => 'textarea'
    )));

    $setting = $section.'_alt_marker_size';
    $wp_customize->add_setting($setting);
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting.'_control', array(
        'label'     => 'Additional markers size (px)',
        'description' => 'Distinguish these secondary markers by making them a different size.  All sizes are meant for square PNG',
        'section'   => $section,
        'settings'  => $setting,
        'priority'  => 65,
        'type'      => 'select',
        'choices'   => array(
            'default'    => 'Default',
            '40,40'    => '2x Small (40x40 pixels)',
            '60,60'    => '1x Small (60x60 pixels)',
            '70,70'    => 'Small (70x70 pixels)',
            '80,80'    => 'Medium (80x80 pixels)',
            '90,90'    => 'Large (90x90 pixels)',
            '100,100'    => '1X Large (100x100 pixels)',
            '110,110'    => '2X Large (110x110 pixels)',
            '120,120'    => '3X Large (120x120 pixels)',
            '130,130'    => '4X Large (130x130 pixels)',
            '140,140'    => '5X Large (140x140 pixels)',
            '150,150'    => '6X Large (150x150 pixels)',
            '160,160'    => '7X Large (160x160 pixels)',
            '170,170'    => '8X Large (170x170 pixels)',
            '180,180'    => '9X Large (180x180 pixels)',
        )
    )));

    $setting = $section.'_additional_icon';
    $wp_customize->add_setting($setting);
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $setting.'_control', array(
        'label'     => 'Icon for Additional markers',
        'description' => 'If blank, this will default to main marker Icon, is main marker icon is not set it will default to base icon.',
        'section'   => $section,
        'settings'  => $setting,
        'priority'  => 70
    )));



}

add_action('customize_register', 'section_colors_customizations');