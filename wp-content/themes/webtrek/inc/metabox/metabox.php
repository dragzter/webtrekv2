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
        'post_types'    => array('page', 'post'),
        // 'include'       => array(
        //     'template' => array('front-page.php', 'page.php', 'single.php', 'index.php'),
        // ),
        'fields'        => array(

            array(
                'id'            => 'section_control',
                'type'          => 'group',
                'group_title'   => array('field' => 'Section {#} - {section_selector}'),
                'clone'         => true,
                'sort_clone'    => true,
                'collapsible'   => true,
                'max_clone'     => 30,
                'save_state'    => true,
                
                // Sub-fields
                'fields' => array(
                    array(
                        'name'  => 'Section Selected',
                        'id'=> 'section_selector',
                        'desc' => 'Select section from dropdown, settings vary based on section selected.',
                        'type' => 'select',
                        'options' => array(
                            'cta' => 'CTA Section',
                            'accordion' => 'Accordion Section',
                            'content' => 'WP Content Section',
                            'clients' => 'Clients Section',
                            'about' => 'About Section',
                            'fifty' => '50/50 Section',
                            'contact' => 'Contact Section',
                            'facts' => 'Facts Section',
                            'featured_services' => 'Featured Services Section',
                            'services' => 'Services Section',
                            'hero' => 'Hero Section',
                            'portfolio' => 'Portfolio Section',
                            'skills' => 'Skills Section',
                            'team' => 'Team Section',
                            'testimonials' => 'Testimonials Section',
                            'post_partial' => 'Posts',
                        ),
                        'placeholder'     => 'Select an Item',
                    ),
                     
                    /**
                     *  Section Arrays 
                     *  For individual content blocks at page level
                     */

                    // Facts Section
                    array(
                        'name'          => 'Facts Section',
                        'id'            => 'facts',
                        'type'          => 'group',
                        'collapsible'   => true,
                        'save_state'    => true,
                        'visible'       => array( 'section_selector', '=', 'facts' ),
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
                                'id'    => 'fact_title',
                                'type'  => 'text',
                            ),
                            array(
                                'name'  => 'Subtitle',
                                'id'    => 'fact_subtitle',
                                'type'  => 'text',
                            ),
                            array(
                                'name'  => 'Section Image',
                                'id'    => 'fact_img',
                                'type'  => 'file_input',
                            ),
                            array(
                                'id'            => 'fact_counter',
                                'type'          => 'group',
                                'group_title'   => 'Counter Group {#}',
                                'clone'         => true,
                                'sort_clone'    => true,
                                'save_state'    => true,
                                'collapsible'   => true,
                                'fields'        => array(
                                    array(
                                        'name'  => 'Label',
                                        'desc'  => 'Label for the counter',
                                        'id'    => 'fact_label',
                                        'type'  => 'text',
                                    ),
                                    array(
                                        'name'  => 'Number to count up to',
                                        'desc' => 'This is what the counter script will count up to.  The count starts at 0 and ends at this value.',
                                        'id'    => 'fact_count_to',
                                        'type'  => 'text',
                                    ),
                                ),
                            ),
                        ),
                    ),

                    // Portfolio Section
                    array(
                        'name'          => 'Portfolio Section',
                        'id'            => 'portfolio',
                        'type'          => 'group',
                        'collapsible'   => true,
                        'save_state'    => true,
                        'visible'       => array( 'section_selector', '=', 'portfolio' ),
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
                                'id'    => 'section_title',
                                'type'  => 'text',
                            ),
                            array(
                                'name'  => 'Subtitle',
                                'id'    => 'section_subtitle',
                                'type'  => 'textarea',
                            ),
                            array(
                                'id'            => 'filter_links',
                                'type'          => 'group',
                                'group_title'   => 'Filter Link {#}',
                                'clone'         => true,
                                'sort_clone'    => true,
                                'save_state'    => true,
                                'collapsible'   => true,
                                'fields'        => array(
                                    array(
                                        'name'  => 'Filter Label',
                                        'id'    => 'filter_label',
                                        'type'  => 'text',
                                    ),
                                    array(
                                        'name'  => 'Filter ID',
                                        'id'    => 'filter_id',
                                        'type'  => 'text',
                                        'desc'  => 'Will be used to filter portfolio items.  Example: a filter id of "web" will show only portfolio items with the filter id of "web".',
                                    ),                                    
                                ),
                            ),
                            array(
                                'id'            => 'portfolio_items',
                                'type'          => 'group',
                                'group_title'   => 'Portfolio Item {#}',
                                'clone'         => true,
                                'sort_clone'    => true,
                                'save_state'    => true,
                                'collapsible'   => true,
                                'fields'        => array(
                                    array(
                                        'name'  => 'Filter ID',
                                        'id'    => 'portfolio_filter_id',
                                        'type'  => 'text',
                                        'desc'  => 'Must have a corresponding filter link so filtering and sorting can work.',
                                    ),
                                    array(
                                        'name'  => 'Portfolio Image',
                                        'id'    => 'portfolio_image',
                                        'type'  => 'file_input',
                                    ),
                                    array(
                                        'name'  => 'Portfolio Title',
                                        'id'    => 'portfolio_title',
                                        'type'  => 'text',
                                    ),
                                    array(
                                        'name'  => 'Portfolio Subtext',
                                        'id'    => 'portfolio_subtext',
                                        'type'  => 'text',
                                    ),
                                    array(
                                        'name'  => 'Portfolio Link',
                                        'id'    => 'portfolio_link',
                                        'type'  => 'url',
                                    ),
                                    array(
                                        'name'  => 'Open link in new Tab?',
                                        'id'    => 'link_in_new',
                                        'type'  => 'checkbox',
                                    ),
                                ),
                            ),
                        ),
                    ),

                    // Skills Section
                    array(
                        'name'          => 'Skills',
                        'id'            => 'skills',
                        'type'          => 'group',
                        'collapsible'   => true,
                        'save_state'    => true,
                        'visible'       => array( 'section_selector', '=', 'skills' ),
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
                                'id'    => 'skills_title',
                                'type'  => 'text',
                            ),
                            array(
                                'name'  => 'Subtitle',
                                'id'    => 'skills_subtitle',
                                'type'  => 'wysiwyg',
                            ),
                            array(
                                'id'            => 'single_skill',
                                'type'          => 'group',
                                'group_title'   => 'Skill {#}',
                                'clone'         => true,
                                'sort_clone'    => true,
                                'save_state'    => true,
                                'collapsible'   => true,
                                'fields'        => array(
                                    array(
                                        'name'  => 'Skill Name',
                                        'id'    => 'skill_name',
                                        'type'  => 'text',
                                    ),
                                    array(
                                        'name'  => 'Skill value amount label',
                                        'id'    => 'skill_label',
                                        'type'  => 'text',
                                        'desc'  => 'EXAMPLE: $40, 20% etc.',
                                    ),
                                    array(
                                        'name'  => 'Progress bar MIN value',
                                        'id'    => 'skill_min',
                                        'type'  => 'text',
                                    ),
                                    array(
                                        'name'  => 'Progress bar MAX value',
                                        'id'    => 'skill_max',
                                        'type'  => 'text',
                                    ),
                                    array(
                                        'name'  => 'Progress bar CURRENT value',
                                        'id'    => 'skill_current',
                                        'desc'  => 'Represent as a percentage of the value amount label ( Max 100 ). No symbols, numbers only.',
                                        'type'  => 'text',
                                    ),
                                    array(
                                        'name'  => 'Progress bar COLOR',
                                        'id'    => 'skill_color',
                                        'type'  => 'color',
                                    ),
                                ),
                            ),
                        ),
                    ),

                    // Team Member Section
                    array(
                        'name'          => 'Team Members',
                        'id'            => 'team',
                        'type'          => 'group',
                        'collapsible'   => true,
                        'save_state'    => true,
                        'visible'       => array( 'section_selector', '=', 'team' ),
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
                                'id'    => 'team_title',
                                'type'  => 'text',
                            ),
                            array(
                                'name'  => 'Subtitle',
                                'id'    => 'team_subtitle',
                                'type'  => 'textarea',
                            ),
                            array(
                                'id'            => 'team_member',
                                'type'          => 'group',
                                'group_title'   => 'Team Member {#}',
                                'clone'         => true,
                                'sort_clone'    => true,
                                'save_state'    => true,
                                'collapsible'   => true,
                                'fields'        => array(
                                    array(
                                        'name'  => 'Name',
                                        'id'    => 'team_member_name',
                                        'type'  => 'text',
                                    ),
                                    array(
                                        'name'  => 'Title',
                                        'id'    => 'team_member_title',
                                        'type'  => 'text',
                                
                                    ),
                                    array(
                                        'name'  => 'Image',
                                        'id'    => 'team_member_image',
                                        'type'  => 'file_input',
                                    ),
                                    array(
                                        'id'            => 'team_member_social',
                                        'type'          => 'group',
                                        'group_title'   => 'Social Media Item {#}',
                                        'clone'         => true,
                                        'sort_clone'    => true,
                                        'save_state'    => true,
                                        'collapsible'   => true,
                                        'fields'        => array(
                                            array(
                                                'name'  => 'Social Icon',
                                                'desc'  => 'Icon CSS class from Ion Icons v2',
                                                'id'    => 'social_icon_class',
                                                'type'  => 'text',
                                            ),
                                            array(
                                                'name'  => 'Social URL',
                                                'id'    => 'social_url',
                                                'type'  => 'url',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),

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

                    // Accordion Section
                    array(
                        'name'          => 'Accordion Items',
                        'id'            => 'accordion',
                        'type'          => 'group',
                        'collapsible'   => true,
                        'save_state'    => true,
                        'visible'       => array( 'section_selector', '=', 'accordion' ),
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
                                'id'    => 'accordion_title',
                                'type'  => 'text',
                            ),
                            array(
                                'name'  => 'Subtitle',
                                'id'    => 'accordion_subtitle',
                                'type'  => 'textarea',
                            ),
                            array(
                                'id'            => 'single_accordion',
                                'type'          => 'group',
                                'group_title'   => 'Accordion Collapse {#}',
                                'clone'         => true,
                                'sort_clone'    => true,
                                'save_state'    => true,
                                'collapsible'   => true,
                                'fields'        => array(
                                    array(
                                        'name'  => 'Title',
                                        'id'    => 'collapse_title',
                                        'type'  => 'text',
                                    ),
                                    array(
                                        'name'  => 'Content',
                                        'id'    => 'collapse_content',
                                        'type'  => 'wysiwyg',
                                
                                    ),
                                    array(
                                        'name'  => 'Icon Class',
                                        'id'    => 'collapse_icon',
                                        'type'  => 'text',
                                    ),
                                ),
                            ),
                        ),
                    ),

                    // Services Section
                    array(
                        'name'          => 'Individual Services',
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
                                'name'  => 'Section Background',
                                'id'    => 'testimonial_background',
                                'type'  => 'color',
                                'alpha_channel' => true
                            ),
                            array(
                                'name'  => 'Section Background Image',
                                'id'    => 'testimonial_background_image',
                                'type'  => 'file_input',
                            ),
                            array(
                                'name'  => 'Section Title Color',
                                'id'    => 'testimonial_title_color',
                                'type'  => 'color',
                            ),
                            array(
                                'name'  => 'Testimonial Name ',
                                'id'    => 'testimonial_name_color',
                                'type'  => 'color',
                            ),
                            array(
                                'name'  => 'Testimonial Subtitle',
                                'id'    => 'testimonial_subtitle_color',
                                'type'  => 'color',
                            ),
                            array(
                                'name'  => 'Testimonial',
                                'id'    => 'testimonial_color',
                                'type'  => 'color',
                            ),
                            array(
                                'name'  => 'Reviewer Image Border',
                                'id'    => 'testimonial_img_border',
                                'type'  => 'select',
                                'options' => array (
                                    'round' => 'Round',
                                    'square' => 'Square',
                                    'soft' => 'Softened',
                                ),
                                'placeholder'     => 'Select an Item',
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
                                        'type'  => 'file_input',
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
                        'name'          => 'Services to Feature',
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
                                'name'  => 'Section Background Color',
                                'id'    => 'feat_box_background',
                                'type'  => 'color',
                                'alpha_channel' => true,
                            ),
                            array(
                                'name'  => 'Section Text Color',
                                'id'    => 'feat_box_text_color',
                                'type'  => 'color'
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
                        'name'          => 'About Section Universal Settings and Cards',
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
                                'name'      => 'Heading Color',
                                'id'        => 'about_heading_color',
                                'type'      => 'color',
                            ),
                            array(
                                'name'      => 'Text',
                                'id'        => 'about_text',
                                'type'      => 'textarea',
                            ),
                            array(
                                'name'      => 'Text Color',
                                'id'        => 'about_text_color',
                                'type'      => 'color',
                            ),
                            array(
                                'name'      => 'Background Image',
                                'id'        => 'about_background',
                                'type'      => 'file_input',
                            ),
                            array(
                                'name'      => 'Overlay Color',
                                'id'        => 'about_overlay_color',
                                'type'      => 'color',
                                'alpha_channel' => true
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
                                        'type'      => 'file_input',
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
                        'name' => 'CTA Settings',
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
                                'name' => 'Background Image',
                                'id' => 'cta_background',
                                'type' => 'file_input',
                            ),
                            array(
                                'name' => 'Overlay Style',
                                'id' => 'cta_overlay',
                                'type' => 'color',
                                'alpha_channel' => true,
                                'js_options'    => array(
                                    'palettes' => array( '#fff', '#333', '#000', '#125', '#459', '#78b', '#ab0', '#de3', '#f0f' )
                                ),
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
                                'name'      => 'Heading Color',
                                'id'        => 'client_heading_color',
                                'type'      => 'color',
                            ),
                            array(
                                'name'      => 'Background',
                                'id'        => 'client_background',
                                'type'      => 'color',
                                'alpha_channel' => true
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
                                        'type'      => 'file_input',          
                                    ),
                                ),
                            ),
                        ),
                    ),

                    // Fifty Fifty Array
                    array(
                        'name'          => '50/50 Section',
                        'id'            => 'fifty',
                        'type'          => 'group',
                        'group_title'   => 'Settings',
                        'collapsible'   => true,
                        'save_state'    => true,
                        'visible'       => array( 'section_selector', '=', 'fifty' ),
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
                                'name'      => 'Section Background',
                                'id'        => 'fifty_bcg_color',
                                'type'      => 'color',
                            ),
                            array(
                                'name'      => 'Text Color',
                                'id'        => 'fifty_text_color',
                                'type'      => 'color',
                            ),
                            array(
                                'name'      => 'Heading',
                                'id'        => 'fifty_heading',
                                'type'      => 'text',
                            ),
                            array(
                                'name'      => 'Text',
                                'id'        => 'fifty_text',
                                'type'      => 'textarea',
                            ),
                            array(
                                'name'      => 'Button Text',
                                'id'        => 'fifty_button_text',
                                'type'      => 'text',
                            ),
                            array(
                                'name'      => 'Button Url',
                                'id'        => 'fifty_button_url',
                                'type'      => 'url',
                            ),
                            array(
                                'name'      => 'Button Color',
                                'id'        => 'fifty_btn_color',
                                'type'      => 'color',
                            ),
                            array(       
                                'name'      => 'Image',
                                'id'        => 'fifty_image',
                                'type'      => 'file_input',          
                            ),
                            array(       
                                'name'      => 'Icon Class (Ion Icons v2)',
                                'id'        => 'fifty_icon_class',
                                'desc'      => 'https://ionicons.com/v2/',
                                'type'      => 'text',          
                            ),
                            array(      
                                'name'      => 'Image Orientation',
                                'id'        => 'img_orientation',
                                'type'      => 'select',  
                                'options'   => array(
                                    'left'       => 'Image Left',
                                    'right'        => 'Image Right',
                                ),
                                'placeholder'   => 'Select Image Orientation',      
                            ),
                            array(
                                'name'      => 'Tooltip Text',
                                'id'        => 'fifty_tooltip_text',
                                'type'      => 'textarea',
                            ),
                        ),
                    ),
                
                    // Hero section array
                    array(
                        'name'          => 'Hero Slides',
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
                                'name'      => 'Hero Overlay Color',
                                'id'        => 'section_overlay',
                                'type'      => 'color', 
                                'alpha_channel' => true,        
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
                                        'name'      => 'Video or Image?',
                                        'id'        => 'slide_media_choice',
                                        'type'      => 'select',
                                        'options'    => array(
                                            'image' => 'Image',
                                            'video' => 'Video',
                                        )
                                    ),
                                    array(
                                        'name'      => 'Image URL',
                                        'id'        => 'slide_image',
                                        'visible'       => array( 'slide_media_choice', '=', 'image' ),
                                        'type'      => 'file_input',
                                    ),
                                    array(
                                        'name'      => 'Video URL',
                                        'id'        => 'slide_video_url',
                                        'visible'       => array( 'slide_media_choice', '=', 'video' ),
                                        'type'      => 'url',
                                    ),
                                    array(
                                        'name'      => 'Video Poster',
                                        'id'        => 'slide_video_poster',
                                        'visible'       => array( 'slide_media_choice', '=', 'video' ),
                                        'type'      => 'file_input',
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
