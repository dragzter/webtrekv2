<?php   
function get_partial_fifty_fifty($mb) {

    $display_section = Webtrek::if_exists($mb, 'show_hide');
    if ($display_section == "yes") :
    
        $heading = Webtrek::if_exists($mb, 'fifty_heading');
        $text = Webtrek::if_exists($mb, 'fifty_text');
        $image = Webtrek::if_exists($mb, 'fifty_image', 'img', 'img-fluid fit-image');
        
        $button_text = Webtrek::if_exists($mb, 'fifty_button_text');
        $button_url = Webtrek::if_exists($mb, 'fifty_button_url');
        $button_color = Webtrek::if_exists($mb, 'fifty_btn_color');
        
        $bcg_color = Webtrek::if_exists($mb, 'fifty_bcg_color');
        $text_color = Webtrek::if_exists($mb, 'fifty_text_color');
        
        $image_orientation = Webtrek::if_exists($mb, 'img_orientation'); ?>

    <section id="fifty-fifty-section" style="background-color: <?php echo $bcg_color; ?>;">
        <!-- <?php echo $mb['img_orientation']; ?> -->
        <div class="container-fluid">
            <div class="row"><?php

                $column_img = '<div class="col-lg-6 col-md-12 p-0 d-flex align-items-center order-1 order-lg-0">'.$image.'</div>';
                
                $column_text = '<div class="col-lg-6 col-md-12 d-flex align-items-center order-0 order-lg-1">';
                $column_text .=     '<div class="section-header wow bounceInUp">';
                $column_text .=         "<h3 style='color: {$text_color};'>{$heading}</h3>";
                $column_text .=         "<p style='color: {$text_color};'>{$text}</p>";
                $column_text .=         '<div class="text-center">';
                $column_text .=             "<a href='{$button_url}' class='cta-btn' style='color:{$button_color};border-color:{$button_color};'>{$button_text}</a>";
                $column_text .=         '</div>';
                $column_text .=     '</div>';
                $column_text .= '</div>';

                
                if ($image_orientation == 'left') {
                    echo $column_img;
                    echo $column_text;   
                } else {
        
                }
                
 ?>
                 
            </div>
        </div>
    </section><?php
    endif;
}