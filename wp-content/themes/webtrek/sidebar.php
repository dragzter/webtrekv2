<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webtrek
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="blog-sidebar" class="widget-area"><?php 
	get_template_part('partials/search-form');
	dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
