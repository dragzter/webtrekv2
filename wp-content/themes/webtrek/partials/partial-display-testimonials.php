<?php

function get_partial_display_testimonials() {

    $args = array(
        'post_type' => 'testimonial',
        'posts_per_page' => 20,
        'orderby' => 'post_date',
	    'order'   => 'DESC'
    );
    $query = new WP_Query( $args );
    $output = '';
    $_star = file_get_contents( get_template_directory_uri()."/assets/img/star-solid.svg");

    if ( $query->have_posts() ) {
        $output .= '<div class="testimonial-roll">';

        $output .= '<div class="row">';

        while ( $query->have_posts() ) { $query->the_post();
            $output .= '<div class="col-12 col-sm-12 col-md-12 col-lg-6">';
            $output .=      '<div class="testimonial-card">';
            $output .=          '<div class="testimonial-card-inner">';
            $output .=              '<div class="testimonial-card-header">';
            $output .=                  '<div class="testimonial-title-wrap"><h4 title="' . get_the_title() . '">' . get_the_title() . '</h4></div>';
                                        
                                        if (has_excerpt()) {
                                            $exc = get_the_excerpt();
                                            if ($exc == '5') {
                                                $rating_count = 5;
                                            } elseif ($exc == '4') {
                                                $rating_count = 4;
                                            } elseif ($exc == '3') {
                                                $rating_count = 3;
                                            } elseif ($exc == '2') {
                                                $rating_count = 2;
                                            } elseif ($exc == '1') {
                                                $rating_count = 1;
                                            } else {
                                                $rating_count = 0;
                                            }    
                                            
            $output .=                      '<div title="'.$rating_count.'/5 star review" class="testimonial-rating ">' . str_repeat($_star, $rating_count) . '</div>';                       
                                        }
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