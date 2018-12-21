<?php

/**
 * @package Metabox
 * @version 4.15.9
 * 
 * @package Metabox Group
 * @version 1.2.17
 * 
 * @package Metabox Show Hide
 * @version 1.1.0
 * 
 * @link https://metabox.io
 * 
 */

add_filter( 'rwmb_meta_boxes', 'metabox_section_creator' );
function metabox_section_creator( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'         => 'Content Sections',
        'post_types'    => 'page',
        'include'       => array(
            'template' => array('front-page.php', 'page.php'),
        ),
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
                            'content' => 'WP Content Section',
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
                     
                    /**
                     *  Section Arrays 
                     *  For individual content blocks at page level
                     */

                    // Contact Form Section
                    array(
                        'name'          => 'Contact Form Section',
                        'id'            => 'contact',
                        'type'          => 'group',
                        'collapsible'   => true,
                        'save_state'    => true,
                        'visible'       => array( 'section_selector', '=', 'contact' ),
                        'group_title'   => 'Settings',
                        'fields'        => array(
                            array(
                                'name'  => 'Show Section?',
                                'id'    => 'show_hide',
                                'type'  => 'radio',
                                'options' => array(
                                    'yes'   => 'Yes',
                                    'no'    => 'No'
                                ),
                                'std' => 'yes',
                            ),
                            array(
                                'name'  => 'Title',
                                'id'    => 'contact_title',
                                'type'  => 'text',
                            ),
                            array(
                                'name'  => 'Subtitle',
                                'id'    => 'contact_subtitle',
                                'type'  => 'textarea',
                            ),
                            array(
                                'name'  => 'Email',
                                'id'    => 'contact_email',
                                'type'  => 'text',
                            ),
                            array(
                                'name'  => 'Phone',
                                'id'    => 'contact_phone',
                                'type'  => 'text',
                            ),
                            array(
                                'name'  => 'Address',
                                'id'    => 'contact_address',
                                'type'  => 'text',
                            ),
                        ),
                    ),

                    // Services Section
                    array(
                        'name'          => 'Services Section',
                        'id'            => 'services',
                        'type'          => 'group',
                        'collapsible'   => true,
                        'save_state'    => true,
                        'visible'       => array( 'section_selector', '=', 'services' ),
                        'group_title'   => 'Settings',
                        'fields'        => array(
                            array(
                                'name'  => 'Show Section?',
                                'id'    => 'show_hide',
                                'type'  => 'radio',
                                'options' => array(
                                    'yes'   => 'Yes',
                                    'no'    => 'No'
                                ),
                                'std' => 'yes',
                            ),
                            array(
                                'name'  => 'Title',
                                'id'    => 'services_title',
                                'type'  => 'text',
                            ),
                            array(
                                'name'  => 'Subtitle',
                                'id'    => 'services_subtitle',
                                'type'  => 'text',
                            ),
                            array(
                                'id'            => 'single_service',
                                'type'          => 'group',
                                'group_title'   => 'Service {#}',
                                'clone'         => true,
                                'sort_clone'    => true,
                                'save_state'    => true,
                                'collapsible'   => true,
                                'fields'        => array(
                                    array(
                                        'name'  => 'Service Name / Heading',
                                        'id'    => 'service_name',
                                        'type'  => 'text',
                                    ),
                                    array(
                                        'name'  => 'Service Link',
                                        'id'    => 'service_link',
                                        'type'  => 'url',
                                    ),
                                    array(
                                        'name'  => 'Text',
                                        'id'    => 'service_text',
                                        'type'  => 'textarea',
                                    ),
                                    array(
                                        'name'  => 'Icon',
                                        'id'    => 'service_icon',
                                        'type'  => 'text',
                                    ),

                                ),
                            ),
                        ),
                    ),

                    // Testimonials Section
                    array(
                        'name'          => 'Testimonials Section',
                        'id'            => 'testimonials',
                        'type'          => 'group',
                        'collapsible'   => true,
                        'save_state'    => true,
                        'visible'       => array( 'section_selector', '=', 'testimonials' ),
                        'group_title'   => 'Settings',
                        'fields'        => array(
                            array(
                                'name'  => 'Show Section?',
                                'id'    => 'show_hide',
                                'type'  => 'radio',
                                'options' => array(
                                    'yes'   => 'Yes',
                                    'no'    => 'No'
                                ),
                                'std' => 'yes',
                            ),
                            array(
                                'name'  => 'Title',
                                'id'    => 'testimonial_title',
                                'type'  => 'text',
                            ),
                            array(
                                'id'            => 'single_testimonial',
                                'type'          => 'group',
                                'group_title'   => 'Testimonial {#}',
                                'clone'         => true,
                                'sort_clone'    => true,
                                'save_state'    => true,
                                'collapsible'   => true,
                                'fields'        => array(
                                    array(
                                        'name'  => 'Image',
                                        'id'    => 'reviewer_img',
                                        'type'  => 'url',
                                    ),
                                    array(
                                        'name'  => 'Title / Name',
                                        'id'    => 'title',
                                        'type'  => 'text',
                                    ),
                                    array(
                                        'name'  => 'Subtitle',
                                        'id'    => 'sub_title',
                                        'type'  => 'text',
                                    ),
                                    array(
                                        'name'  => 'Testimonial',
                                        'id'    => 'testimonial',
                                        'type'  => 'textarea',
                                    ),
                                ),
                            ),
                        ),
                    ),

                    // Featured Services Section
                    array(
                        'name'          => 'About Section',
                        'id'            => 'featured_services',
                        'type'          => 'group',
                        'collapsible'   => true,
                        'save_state'    => true,
                        'visible'       => array( 'section_selector', '=', 'featured_services' ),
                        'group_title'   => 'Settings',
                        'fields'        => array(
                            array(
                                'name'  => 'Show Section?',
                                'id'    => 'show_hide',
                                'type'  => 'radio',
                                'options' => array(
                                    'yes'   => 'Yes',
                                    'no'    => 'No'
                                ),
                                'std' => 'yes',
                            ),
                            array(
                                'name'  => 'Box Width',
                                'id'    => 'feat_box_width',
                                'type'  => 'select',
                                'options' => array (
                                    '4' => '1/3rd of Page',
                                    '3' => '1/4th of Page',
                                    '6' => '1/2 of Page',
                                    '12' => 'Full Page',
                                ),
                            ),
                            array(
                                'id'            => 'featured_box',
                                'type'          => 'group',
                                'group_title'   => 'Box {#}',
                                'clone'         => true,
                                'sort_clone'    => true,
                                'save_state'    => true,
                                'collapsible'   => true,
                                'fields'        => array(
                                    array(
                                        'name'  => 'Icon (full css class name)',
                                        'desc'  => 'Get Class names at https://ionicons.com/v2/ (One class name per icon)',
                                        'id'    => 'box_icon',
                                        'type'  => 'text',
                                    ),
                                    array(
                                        'name'  => 'Link Text (Title)',
                                        'id'    => 'link_text',
                                        'type'  => 'text',
                                    ),
                                    array(
                                        'name'  => 'Link URL',
                                        'id'    => 'link_url',
                                        'type'  => 'url',
                                    ),
                                    array(
                                        'name'  => 'Box Text',
                                        'desc'  => 'Main text under title.',
                                        'id'    => 'box_text',
                                        'type'  => 'textarea',
                                    ),
                                ),
                            ),
                        ),
                    ),
                    // About Section
                    array(
                        'name'          => 'About Section',
                        'id'            => 'about',
                        'type'          => 'group',
                        'collapsible'   => true,
                        'save_state'    => true,
                        'visible'       => array( 'section_selector', '=', 'about' ),
                        'group_title'   => 'Settings',
                        'fields' => array(
                            array(
                                'name'  => 'Show Section?',
                                'id'    => 'show_hide',
                                'type'  => 'radio',
                                'options' => array(
                                    'yes'   => 'Yes',
                                    'no'    => 'No'
                                ),
                                'std' => 'yes',
                            ),
                            array(
                                'name'      => 'Heading',
                                'id'        => 'about_heading',
                                'type'      => 'text',
                            ),
                            array(
                                'name'      => 'Text',
                                'id'        => 'about_text',
                                'type'      => 'textarea',
                            ),
                            array(
                                'name' => 'Text Alignment',
                                'id' => 'about_text_align',
                                'type' => 'select',
                                'options' => array(
                                    'text-left' => 'Left Align',
                                    'text-center' => 'Center Align',
                                    'text-right' => 'Right Align'
                                ),
                                'std' => 'text-center',
                            ),
                            array(
                                'id'            => 'about_cards',
                                'type'          => 'group',
                                'group_title'   => 'Card {#}',
                                'clone'         => true,
                                'sort_clone'    => true,
                                'save_state'    => true,
                                'collapsible'   => true,
                                'fields'    => array(
                                    array(
                                        'name'      => 'Card Title',
                                        'id'        => 'about_card_title',
                                        'type'      => 'text',
                                    ),
                                    array(
                                        'name'      => 'Card Title URL',
                                        'id'        => 'about_card_title_url',
                                        'type'      => 'url',
                                    ),
                                    array(
                                        'name'      => 'Card Text',
                                        'id'        => 'about_card_text',
                                        'type'      => 'textarea',
                                    ),
                                    array(
                                        'name'      => 'Card Icon',
                                        'id'        => 'about_card_icon',
                                        'type'      => 'text',
                                        'desc' => 'Get Class names at https://ionicons.com/v2/ (One class name per icon)',
                                    ),
                                    array(
                                        'name'      => 'Card Image',
                                        'id'        => 'about_card_img',
                                        'type'      => 'url',
                                    ),
                                    array(
                                        'name'      => 'Open in new tab?',
                                        'id'        => 'about_card_blank',
                                        'type'      => 'checkbox',
                                    ),
                                ),
                            ),     
                        ),
                    ),

                    // CTA Section array
                    array(
                        'name' => 'CTA Section',
                        'id' => 'cta',
                        'type' => 'group',
                        'collapsible'   => true,
                        'save_state'    => true,
                        'visible'       => array( 'section_selector', '=', 'cta' ),
                        'group_title'   => 'Settings',
                        'fields' => array(
                            array(
                                'name'  => 'Show Section?',
                                'id'    => 'show_hide',
                                'type'  => 'radio',
                                'options' => array(
                                    'yes'   => 'Yes',
                                    'no'    => 'No'
                                ),
                                'std' => 'yes',
                            ),
                            array(
                                'name' => 'Heading',
                                'id' => 'cta_heading',
                                'type' => 'text',
                            ),
                            array(
                                'name' => 'Text',
                                'id' => 'cta_text',
                                'type' => 'textarea',
                            ),
                            array(
                                'name' => 'Btn Text',
                                'id' => 'cta_btn_text',
                                'type' => 'text',
                            ),
                            array(
                                'name' => 'Btn URL',
                                'id' => 'cta_btn_url',
                                'type' => 'url',
                            ),
                            array(
                                'name' => 'Open in new tab?',
                                'id' => 'cta_blank',
                                'type' => 'checkbox',
                            ),
                            array(
                                'name' => 'Text Alignment',
                                'id' => 'cta_text_align',
                                'type' => 'select',
                                'options' => array(
                                    'text-left' => 'Left Align',
                                    'text-center' => 'Center Align',
                                    'text-right' => 'Right Align'
                                ),
                                'std' => 'text-center',
                            ),
                        ),
                    ),

                    // Clients / Affiliations Section array
                    array(
                        'name'          => 'Clients / Affiliations Section',
                        'id'            => 'client',
                        'type'          => 'group',
                        'group_title'   => 'Settings',
                        'collapsible'   => true,
                        'save_state'    => true,
                        'visible'       => array( 'section_selector', '=', 'clients' ),
                        'fields'        => array(
                            array(
                                'name'  => 'Show Section?',
                                'id'    => 'show_hide',
                                'type'  => 'radio',
                                'options' => array(
                                    'yes'   => 'Yes',
                                    'no'    => 'No'
                                ),
                                'std' => 'yes',
                            ),
                            array(
                                'name'      => 'Heading',
                                'id'        => 'client_heading',
                                'type'      => 'text',
                            ),
                            array(
                                'name'      => 'Sub Text',
                                'id'        => 'client_subtext',
                                'type'      => 'textarea',
                            ),
                            array(
                                'id'            => 'client_image',
                                'type'          => 'group',
                                'group_title'   => 'Image {#}',
                                'clone'         => true,
                                'sort_clone'    => true,
                                'save_state'    => true,
                                'collapsible'   => true,
                                'fields'        => array(
                                    array(       
                                        'name'      => 'Image Slide',
                                        'id'        => 'image',
                                        'type'      => 'url',          
                                    ),
                                ),
                            ),
                        ),
                    ),
                    // Hero section array
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
                                'name'  => 'Show Section?',
                                'id'    => 'show_hide',
                                'type'  => 'radio',
                                'options' => array(
                                    'yes'   => 'Yes',
                                    'no'    => 'No'
                                ),
                                'std' => 'yes',
                            ),
                            array(      
                                'name'      => 'Hero Height',
                                'id'        => 'section_height',
                                'type'      => 'text',         
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
                                        'type'      => 'textarea',
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
