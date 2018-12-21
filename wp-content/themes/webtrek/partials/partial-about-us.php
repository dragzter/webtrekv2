<?php 
function get_partial_about($mb) { 

    $display_section = Webtrek::if_exists($mb, 'show_hide');
    if ($display_section == "yes") :

    $heading = Webtrek::if_exists($mb, 'about_heading', 'h3');
    $text = Webtrek::if_exists($mb, 'about_text', 'p'); 
    $check_header = array($heading, $text);
    $d = Webtrek::display($check_header); ?>

    <!-- About Us Section -->
    <section id="about" class="">
        <div class="container">
            <header class="section-header <?php echo $d; ?>"><?php
                echo $heading;
                echo $text; ?>
            </header>

            <div class="row about-cols justify-content-center"><?php 

                if (isset($mb['about_cards'])) {
                    foreach( $mb['about_cards'] as $card ) { 
                        
                        $card_title = (isset($card['about_card_title'])) ? $card['about_card_title'] : '';
                        $card_title_url = (isset($card['about_card_title_url'])) ? $card['about_card_title_url'] : '#';
                        $card_icon = (isset($card['about_card_icon'])) ? $card['about_card_icon'] : '';
                        $card_image = Webtrek::if_exists($card, 'about_card_img', 'img', 'img-fluid');
                        $card_text = Webtrek::if_exists($card, 'about_card_text','p');
                        $card_blank = (isset($card['about_card_blank'])) ? 'target="_blank"' : null; ?>

                    <div class="col-md-4 align-self-center wow fadeInUp">
                        <div class="about-col">
                            <div class="img"><?php
                                echo $card_image;
                                if ($card_icon !== '') {
                                echo "<div class='icon'><i class='{$card_icon}'></i></div>";
                                } ?>
                            </div><?php 

                                if ($card_title !== '') { 
                                    echo "<h2 {$card_blank} class='title'><a href='{$card_title_url}'>{$card_title}</a></h2>";
                                }                         
                                echo $card_text; ?>
                        </div>
                    </div><?php
                    } 
                } ?>
            </div>
        </div>
    </section><!-- #about -->
<?php
endif;
}