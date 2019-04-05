<?php

function get_partial_display_testimonials() {
    $args = array(
        'post_type' => 'testimonial',
        'posts_per_page' => 10,
        'orderby' => 'post_date',
	    'order'   => 'DESC'
    );
    $query = new WP_Query( $args );
    $output = '';

    if ( $query->have_posts() ) {
        $output .= '<div class="testimonial-roll">';

        $output .= '<div class="row">';

        while ( $query->have_posts() ) { $query->the_post();
            $output .= '<div class="col-12 col-sm-12 col-md-6 col-lg-6">';
            $output .=      '<div class="testimonial-card">';
            $output .=          '<div class="testimonial-card-inner">';
            $output .=              '<div class="testimonial-card-header">';
            $output .=                  '<h4>' . get_the_title() . '</h4>';
            $output .=                  '<span class="open-review"><i class="ion-chevron-down"></i></span>';
            $output .=              '</div>';
            $output .=              '<div class="testimonial-card-content">';
            $output .=                  '<p>' . get_the_content() . '</p>';
            $output .=              '</div>';
            $output .=          '</div>';
            $output .=      '</div>';
            $output .= '</div>';
        }
        // Always return if content is used for shortcode (never echo)
        $output .= '</div>';        
        $output .= '</div>';        
        return $output;

        /* Restore original Post Data */
        wp_reset_postdata();
    }
}