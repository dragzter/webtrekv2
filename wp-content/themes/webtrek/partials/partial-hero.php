<?php  
function get_partial_hero($mb) { 


    $slide_count = count($mb['hero_slide']); 
    $height = (isset($mb['section_height'])) ? 'height:'.$mb['section_height'].';': 'height: 100vh;';
    
    
    ?>
 
    <!-- Hero Section Partial -->
    <section id="intro" style="<?php echo $height; ?>">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox"><?php 
                if ($mb['use_slides'] == 'yes') {
                    foreach ( $mb['hero_slide'] as $slide  ) { 
                    
                    $heading = (isset($slide['slide_heading'])) ? '<h2>'.$slide['slide_heading'].'</h2>'  : '';
                    $text = (isset($slide['slide_text'])) ? '<p>'.$slide['slide_text'].'</p>' : '';
                    $btn_text = (isset($slide['slide_btn_text'])) ? $slide['slide_btn_text'] : '';
                    $btn_url = (isset($slide['slide_btn_url'])) ? $slide['slide_btn_url'] : '#';
                    $slide_img = (isset($slide['slide_image'])) ? $slide['slide_image'] : 'https://via.placeholder.com/1920x800'; ?>
                
                    <div class="carousel-item" style="<?php echo $height; ?>">
                        <div class="carousel-background"><img src="<?php echo $slide_img; ?>" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content"><?php 
                                echo $heading; 
                                echo $text; 
                                
                                if ($btn_text !== '') { ?>
                                <a href="<?php echo $btn_url; ?>" class="btn-get-started scrollto"><?php echo $btn_text; ?></a><?php 
                                } ?>
                            </div>
                        </div>
                    </div><?php
                    }
                } ?>
                </div><!-- carousel-inner -->
                <?php  
                if ( $slide_count >= 2 ) { ?>
                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a><?php 
                } ?>
            </div>
        </div>
    </section><!-- #intro -->

<?php 
}

// function do_hero_style($mb) {
    
//     $output = '';
//     $output .= '<style>';
//     $output .= '#intro .carousel-item::before { ';
//     $output .= 'background-color: '.$mb['section_overlay_color'] .'; ';
//     $output .= 'opacity: '.$mb['section_overlay_opacity'].';';
//     $output .= '}';
//     $output .= ' </style>';
//     echo $output;
// }
// add_action( 'wp_head', 'do_hero_style');