<?php  
function get_partial_hero($mb) { 
    $display_section = Webtrek::if_exists($mb, 'show_hide');
    if ($display_section == "yes") :

    $height = (isset($mb['section_height'])) ? 'height:'.$mb['section_height'].';': 'height: 100vh;';
    $overlay_color = Webtrek::if_exists($mb, 'section_overlay' ); 

    $css = '<style tyle="text/css">';
    $css .= '#intro .carousel-item::before {';
    $css .=     'content: "";';
    $css .=     'background-color:'.$overlay_color.';';
    $css .=     'position: absolute;';
    $css .=     'height: 100%;';
    $css .=     'width: 100%;';
    $css .=     'top: 0;';  
    $css .=     'right: 0;';
    $css .=     'left: 0;';
    $css .=     'bottom: 0;';
    $css .= '}';
    $css .= '</style>';

    ?>
    <!-- Hero Section Partial -->
    <?php echo $css; ?>
    <section id="intro" style="<?php echo $height; ?>">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox"><?php 
                
                if ($mb['use_slides'] == 'yes') {

                    $slide_count = count($mb['hero_slide']); 

                    foreach ( $mb['hero_slide'] as $slide  ) { 
                    
                    $heading = (isset($slide['slide_heading'])) ? '<h2>'.$slide['slide_heading'].'</h2>'  : '';
                    $text = (isset($slide['slide_text'])) ? '<p>'.$slide['slide_text'].'</p>' : '';
                    $btn_text = (isset($slide['slide_btn_text'])) ? $slide['slide_btn_text'] : '';
                    $btn_url = (isset($slide['slide_btn_url'])) ? $slide['slide_btn_url'] : '#';
                    $slide_img = (isset($slide['slide_image'])) ? $slide['slide_image'] : 'https://via.placeholder.com/1920x800';
                    
                    $media_choice = (isset($slide['slide_media_choice'])) ? $slide['slide_media_choice'] : 'image';
                    
                    ?>
                
                    <div class="carousel-item" style="<?php echo $height; ?>"><?php 
                    
                        
                        if ($media_choice == 'image' ) { ?>
                            <div class="carousel-background"><img src="<?php echo $slide_img; ?>" alt=""></div><?php 
                        } else { 

                            $video_url = Webtrek::if_exists($slide, 'slide_video_url');
                            $video_poster = Webtrek::if_exists($slide, 'slide_video_poster');

                            ?>

                            <video autoplay muted loop id="hero-video" poster="<?php echo $video_poster ?>">
                                    <source src="<?php echo $video_url ?>" type="video/mp4">
                            </video><?php  
                        } ?>

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
                    } ?>
                </div> 


                <?php  
                if ( $slide_count > 1 ) { ?>
                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a><?php 
                }
                } ?>
            </div>
        </div>
    </section><!-- #intro --><?php
    endif; 
}