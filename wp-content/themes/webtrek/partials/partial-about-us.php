<?php 
function get_partial_about($mb) { 

    $display_section = Webtrek::if_exists($mb, 'show_hide');
    if ($display_section == "yes") :

    // Content settings
    $heading = Webtrek::if_exists($mb, 'about_heading', 'h3');
    $text = Webtrek::if_exists($mb, 'about_text', 'p'); 
    $check_header = array($heading, $text);
    $d = Webtrek::display($check_header); 

    // Style settings
    $p = Webtrek::if_exists($mb, 'about_text_color');
    $h3 = Webtrek::if_exists($mb, 'about_heading_color');
    $section_p = ($p) ? '#about .section-header p {color:'.$p.'}' : '';
    $section_h3 = ($h3) ? '#about .section-header h3 {color:'.$h3.'}' : '';
    $bcgnd = Webtrek::if_exists($mb, 'about_background');
    $ovrly = Webtrek::if_exists($mb, 'about_overlay_color');
    $background = ($bcgnd) ? '#about{background:url("'.$bcgnd.'") center top no-repeat fixed;}' : '';
    $overlay = ($ovrly) ? '#about::before{background:'.$ovrly.';}' : '';

    // Produce a style tag only if settings are used
    if (isset($p) || isset($h3) || isset($bcgnd) || isset($ovrly)) {
        $style_tag = ['<style type="text/css">', '</style>'];
    } else {
        $style_tag = '';
    }
    
    // Custom css settings done at page level
    $css = $style_tag[0] . $background . $overlay . $section_h3 . $section_p . $style_tag[1]; ?>

    <!-- About Us Section -->
    <?php echo $css; ?>
    <section id="about" class="about">
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