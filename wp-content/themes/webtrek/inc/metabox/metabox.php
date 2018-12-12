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
                        'name'  => 'selector',
                        'id'=> 'section_selector',
                        'type' => 'select',
                        'options' => array(
                            'cta' => 'cta section',
                            'clients' => 'clients section',
                            'about' => 'about section',
                            'contact' => 'contact section',
                            'facts' => 'facts section',
                            'featured_services' => 'featured services section',
                            'services' => 'services section',
                            'hero' => 'hero section',
                            'alt-hero' => 'alt hero section',
                            'portfolio' => 'portfolio section',
                            'skills' => 'skills section',
                            'team' => 'team section',
                            'testimonials' => 'testimonials section',
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
                    // CTA section
                    array(
                        'name'          => 'CTA Section',
                        'id'            => 'cta',
                        'type'          => 'group',
                        'group_title'   => array('field' => 'cta_heading'),
                        'collapsible'   => true,
                        'save_state'    => true,
                        'visible'       => array( 'section_selector', '=', 'cta' ),
                        'fields'        => array(
                            array(
                                'name'      => 'CTA Heading',
                                'id'        => 'cta_heading',
                                'type'      => 'text',
                            ),
                            array(
                                'name'      => 'CTA Text',
                                'id'        => 'cta_text',
                                'type'      => 'text',
                            ),
                        ),
                    ),                    
                ),
            ),
        ),
    );
    return $meta_boxes;
}
