<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package webtrek
 */

get_header(); ?>

<main id="main"><?php  
	// Always show the post partial
	get_post_partial();
?>
</main><?php 
get_footer();