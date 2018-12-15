<?php

add_filter( 'rwmb_meta_boxes', 'metabox_section_creator' );
function metabox_section_creator( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'         => 'Content Sections',
        'post_types'    => 'page',
        'fields'        => array(

            array(
                'id'            => 'section_control',
                'type'          => 'group',
                'group_title'   => array('field' => 'section_selector'),
                'clone'         => true,
                'sort_clone'    => true,
                'collapsible'   => true,
                'save_state'    => true,
                
                // Sub-fields
                'fields' => array(
                    array(
                        'name'  => 'Section Selected',
                        'id'=> 'section_selector',
                        'type' => 'select',
                        'options' => array(
                            'cta' => 'CTA Section',
                            'clients' => 'Clients Section',
                            'about' => 'About Section',
                            'contact' => 'Contact Section',
                            'facts' => 'Facts Section',
                            'featured_services' => 'Featured Services Section',
                            'services' => 'Services Section',
                            'hero' => 'Hero Section',
                            'portfolio' => 'Portfolio Section',
                            'skills' => 'Skills Section',
                            'team' => 'Team Section',
                            'testimonials' => 'Testimonials Section',
                        ),
                        'placeholder'     => 'Select an Item',
                    ),
                    // Clients Section
                    array(
                        'name'          => 'Clients Section',
                        'id'            => 'client',
                        'type'          => 'group',
                        'group_title'   => array('field' => 'client_heading'),
                        'collapsible'   => true,
                        'save_state'    => true,
                        'visible'       => array( 'section_selector', '=', 'clients' ),
                        'fields'        => array(
                            array(
                                'name'      => 'Client Heading',
                                'id'        => 'client_heading',
                                'type'      => 'text',
                            ),
                            array(
                                'name'      => 'Client Text',
                                'id'        => 'client_text',
                                'type'      => 'text',
                            ),
                        ),
                    ),
                    // Hero section (Array to pass into hero partial)
                    array(
                        'id'            => 'hero',
                        'type'          => 'group',
                        'group_title'   => 'Settings',
                        'collapsible'   => true,
                        'save_state'    => true,
                        'visible'       => array( 'section_selector', '=', 'hero' ), // Show if Hero selected
                        'fields'        => array(
                            // Global Settings
                            array(      
                                'name'      => 'Hero Height',
                                'id'        => 'section_height',
                                'type'      => 'text',         
                            ),
                            array(      
                                'name'      => 'Hero Overlay Color',
                                'id'        => 'section_overlay_color',
                                'type'      => 'color',         
                            ),
                            array(      
                                'name'      => 'Hero Overlay Opacity',
                                'id'        => 'section_overlay_opacity',
                                'type'      => 'select',  
                                'options' => array(
                                    '0' => 'Transparent',
                                    '10' => '10%',
                                    '20' => '20%',
                                    '30' => '30%',
                                    '40' => '40%',
                                    '50' => '50%',
                                    '60' => '60%',
                                    '70' => '70%',
                                    '80' => '80%',
                                    '90' => '90%',
                                    '100' => '100%',
                                ),
                                'placeholder'     => 'Select Opacity',      
                            ),
                            array(      
                                'name'      => 'Add Slides?',
                                'id'        => 'use_slides',
                                'type'      => 'select',  
                                'options'   => array(
                                    'yes'       => 'Yes',
                                    'no'        => 'No',
                                ),
                                'placeholder'   => 'Select',      
                            ),
                            array(
                                'id'            => 'hero_slide',
                                'type'          => 'group',
                                'clone'         => true,
                                'sort_clone'    => true,
                                'collapsible'   => true,
                                'save_state'    => true,
                                'visible'       => array( 'use_slides', '=', 'yes' ),
                                'group_title'   => 'Slide {#}',
                                'fields'         => array(
                                    // A slide
                                    array(
                                        'name'      => 'Heading',
                                        'id'        => 'slide_heading',
                                        'type'      => 'text',
                                    ),
                                    array(
                                        'name'      => 'Text',
                                        'id'        => 'slide_text',
                                        'type'      => 'text',
                                    ),
                                    array(
                                        'name'      => 'Background Image',
                                        'id'        => 'slide_image',
                                        'type'      => 'url',
                                    ),
                                    array(
                                        'name'      => 'Button Text',
                                        'id'        => 'slide_btn_text',
                                        'type'      => 'text',
                                    ),
                                    array(
                                        'name'      => 'Button URL',
                                        'id'        => 'slide_btn_url',
                                        'type'      => 'text',
                                    ),
                                ),
                            ),
                        ),
                    ),                     
                ),
            ),
        ),
    );
    return $meta_boxes;
}
