<?php   
function get_partial_fifty_fifty($mb) {

    $display_section = Webtrek::if_exists($mb, 'show_hide');
    if ($display_section == "yes") :
    
        $heading = Webtrek::if_exists($mb, 'fifty_heading');
        $text = Webtrek::if_exists($mb, 'fifty_text');
        $image = Webtrek::if_exists($mb, 'fifty_image', 'img', 'img-fluid fit-image wow fadeIn');
        
        $button_text = Webtrek::if_exists($mb, 'fifty_button_text');
        $button_url = Webtrek::if_exists($mb, 'fifty_button_url');
        $button_color = Webtrek::if_exists($mb, 'fifty_btn_color');
        
        $bcg_color = Webtrek::if_exists($mb, 'fifty_bcg_color');
        $text_color = Webtrek::if_exists($mb, 'fifty_text_color');
        
        $tooltip_text = Webtrek::if_exists($mb, 'fifty_tooltip_text');
        
        $image_orientation = Webtrek::if_exists($mb, 'img_orientation'); 
       
        if ($image_orientation == 'left') {
            $img_col = 'order-1 order-lg-0';
            $text_col = 'order-0 order-lg-1';
        } else {
            $img_col = 'order-1 order-lg-1';
            $text_col = 'order-0 order-lg-0';
        } ?>

    <section class="fifty-fifty-section" id="fifty-fifty-section" style="background-color: <?php echo $bcg_color; ?>;">
        <!-- <?php echo $mb['img_orientation']; ?> -->
        <div class="container-fluid">
            <div class="row"><?php

                $column_img = '<div class="col-lg-6 col-md-12 p-0 d-flex align-items-center w-img-column '.$img_col.'">'.$image.'<div class="w-tooltip"><p>'.$tooltip_text.'</p></div></div>';
                
                $column_text = '<div class="col-lg-6 col-md-12 d-flex align-items-center w-text-column '.$text_col.'">';
                $column_text .=     '<div class="section-header wow zoomIn">';
                $column_text .=         "<div class='icon-wrap text-center'><i class='ion-android-compass'></i></div>";
                $column_text .=         "<h3 style='color: {$text_color};'>{$heading}</h3>";
                $column_text .=         "<p style='color: {$text_color};'>{$text}</p>";
                $column_text .=         '<div class="text-center">';
                $column_text .=             "<a href='{$button_url}' class='cta-btn' style='color:{$button_color};border-color:{$button_color};'>{$button_text}</a>";
                $column_text .=         '</div>';
                $column_text .=     '</div>';
                $column_text .= '</div>';

                echo $column_img;
                echo $column_text; ?>
            
            </div>
        </div>
    </section><?php
    endif;
}