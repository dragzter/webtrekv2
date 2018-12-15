<?php 
function get_partial_about($mb) { 
    
    $heading = (isset($card['about_heading'])) ? '<h3>'.$card['about_heading'].'</h3>' : '';
    $text = (isset($card['about_text'])) ? '<p>'.$card['about_text'].'</p>' : '';
    $text_align;

    ?>
    
    <!-- About Us Section -->
    <section id="about" class="">
        <div class="container">

            <header class="section-header"><?php
                echo $heading;
                echo $text; ?>
            </header>


            <div class="row about-cols justify-content-center"><?php 

                if (isset($mb['about_cards'])) {
                    foreach( $mb['about_cards'] as $card ) { 
                        
                        $card_title = (isset($card['about_card_title'])) ? $card['about_card_title'] : '';
                        $card_title_url = (isset($card['about_card_title_url'])) ? $card['about_card_title_url'] : '#';

                        $card_text = (isset($card['about_card_text'])) ? $card['about_card_text'] : '';

                        $card_icon = (isset($card['about_card_icon'])) ? $card['about_card_icon'] : '';
                        $card_image = (isset($card['about_card_img'])) ? $card['about_card_img'] : 'https://via.placeholder.com/150x150';                
                        
                        $card_blank = (isset($card['about_card_blank'])) ? 'target="_blank"' : ''; ?>

                    <div class="col-md-4 align-self-center wow fadeInUp">
                        <div class="about-col">
                            <div class="img"><?php

                                if ($card_image !== '') {
                                    echo "<img src='{$card_image}' alt='' class='img-fluid'>";
                                }

                                if ($card_icon !== '') {
                                echo "<div class='icon'><i class='{$card_icon}'></i></div>";
                                } ?>

                            </div><?php 

                                if ($card_title !== '') { 
                                    echo "<h2 {$card_blank} class='title'><a href='{$card_title_url}'>{$card_title}</a></h2>";
                                } 
                                
                                if ($card_text !== '') {
                                    echo "<p>{$card_text}</p>";
                                } ?>

                        </div>
                    </div><?php
                    } 
                } ?>
            </div>
        </div>
    </section><!-- #about -->
<?php
}