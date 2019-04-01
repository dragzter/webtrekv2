<?php
function get_partial_add_testimonial() { 
    
    $output = '<div id="postbox-review">';
    $output .= '<h5 class="form-helper"> Please leave a review, we appreciate the feedback.</h5>';
    $output .= '<form class="vanish-on-sub" method="POST" action="'.htmlspecialchars(get_template_directory_uri() . '/contactform/add-testimonial.php').'" id="input-details">';
    $output .= '<div class="form-row">';
    $output .= '<div class="form-group col-md-7"><input type="text" class="form-control" id="review-name" placeholder="Name" name="post_title" required></div>';
    $output .= '<div class="form-group col-md-5 d-flex m-0 align-items-center">';
    $output .= '<div class="rating ">';

    $star = '<span class="icon">★</span>';

    for ( $i = 1; $i < 6; $i++ ) {
        $opt = '<label>';
        $opt .= '<input type="radio" name="rating" value="'.$i.'" required/>';
        $opt .= str_repeat($star,$i);
        $opt .= '</label>';
        
        $output .= $opt;
    }

    $output .= '</div></div></div>';
    $output .= '<div class="form-group vanish-on-sub"><textarea type="text" class="form-control" style="resize:none;" rows="6" id="review" placeholder="Review" name="post_content" required></textarea></div>';
    $output .= '<input type="hidden" name="new_post" value="1"/><button class="" type="submit">Submit</button></form></div>';

    return $output;
}