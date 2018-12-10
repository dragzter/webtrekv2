<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Webtrek
 */

get_header(); ?>

<main id="main"><?php  

    $box = rwmb_meta('testmeta');

    foreach($box as $key => $value) {

        if ($value['test1'] == 'cta') {
            get_partial_cta($value['cta']);
        } 
        if ($value['test1'] == 'clients') {
            get_partial_clients('placeholder');
        } 
        if ($value['test1'] == 'about') {
            get_partial_about('placeholder');
        } 
        if ($value['test1'] == 'contact') {
            get_partial_contact('placeholder');
        }
        if ($value['test1'] == 'facts') {
            get_partial_facts('placeholder');
        } 
        if ($value['test1'] == 'featured_services') {
            get_partial_featured_services('placeholder');
        }
        if ($value['test1'] == 'services') {
            get_partial_services('placeholder');
        } 
        if ($value['test1'] == 'hero') {
            get_partial_intro('placeholder');
        }
        if ($value['test1'] == 'portfolio') {
            get_partial_portfolio('placeholder');
        } 
        if ($value['test1'] == 'skills') {
            get_partial_skills('placeholder');
        }
        if ($value['test1'] == 'team') {
            get_partial_team('placeholder');
        } 
        if ($value['test1'] == 'testimonials') {
            get_partial_testimonials('placeholder');
        }
    }
   
 
?>
</main><?php 

get_footer();