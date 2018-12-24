<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package webtrek
 */

get_header(); ?>

<main id="main"><?php  

    /**
     * Metabox array defined in inc/metabox/metabox.php
     * 
     * @param array
     */

    $box =  rwmb_meta('section_control');


   

    foreach($box as $key => $value) {
        
        if (isset($value['section_selector'])) {
            // Completed
            if ($value['section_selector'] == 'cta') {
                get_partial_cta($value['cta']);
            } elseif ($value['section_selector'] == 'clients') {
                get_partial_clients($value['client']);
            } elseif ($value['section_selector'] == 'featured_services') {
                get_partial_featured_services($value['featured_services']);
            } elseif ($value['section_selector'] == 'about') {
                get_partial_about($value['about']);
            } elseif ($value['section_selector'] == 'hero') {
                get_partial_hero($value['hero']);
            } elseif ($value['section_selector'] == 'testimonials') {
                get_partial_testimonials($value['testimonials']);
            } elseif ($value['section_selector'] == 'services') {
                get_partial_services($value['services']);
            } elseif ($value['section_selector'] == 'contact') {
                get_partial_contact($value['contact']);

            // Low Priority / not dynamic
            } elseif ($value['section_selector'] == 'skills') {
                get_partial_skills('');
            } elseif ($value['section_selector'] == 'portfolio') {
                get_partial_portfolio('');
            } elseif ($value['section_selector'] == 'team') {
                get_partial_team('');
            } elseif ($value['section_selector'] == 'facts') {
                get_partial_facts('');
            } else {
                echo 'Nothing here';
            }
        } 
    }  
    
    // Always show page content
    
    get_partial_content('');
?>
</main><?php 
get_footer();