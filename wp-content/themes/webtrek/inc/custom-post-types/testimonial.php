<?php 

// Custom post type definition
function testimonial_post_type() {

    $labels = array(
        'name'          => 'Testimonials',
        'singular_name' => 'Testimonial',
        'add_new'       => 'New Testimonial',
        'edit_item'     => 'Edit Testimonial',
        'all_items'     => 'All Testimonials',
        'view_item'     => 'View Testimonial',
        'menu_name'     => 'Testimonials'
    );

    $args = array(
        'labels'        => $labels,
        'descritpion'   => 'Accepts displays Testimonials.',
        'public'        => true,
        'has_archive'   => true,
		'query_var'		=> true,
        'rewrite'		=> true,
        'menu_icon'		=> 'dashicons-thumbs-up',   
        'menu_position' => 3,
        'supports' 	    => array(
            'title',
            'editor', 
            'thumbnail',
            'revisions',
            'excerpt'
        ),     
        'capability_type'       => 'post',
        'publicly_queryable'    => true,
        'exclude_from_search'	=> false,
    );

    register_post_type('testimonial', $args);
};
add_action( 'init', 'testimonial_post_type' );
