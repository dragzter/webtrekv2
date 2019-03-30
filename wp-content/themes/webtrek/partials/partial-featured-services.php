<?php 
function get_partial_featured_services($mb) {

    $display_section = Webtrek::if_exists($mb, 'show_hide');
    if ($display_section == "yes") : 
    
        $mb_color = Webtrek::if_exists($mb, 'feat_box_text_color');
        $mb_back_color = Webtrek::if_exists($mb, 'feat_box_background');

        $text_color = ($mb_color) ? $mb_color : get_theme_mod( 'section_feat_serv_text', '#111' );
        $background_color = ($mb_back_color) ? $mb_back_color : get_theme_mod( 'section_feat_serv_background', '#fff' );

    ?>

   <!-- Featured Services Section -->
    <section id="featured-services" style="<?php echo 'background:' . $background_color . ';'; ?>">
        <div class="container">
            <div class="row justify-content-center"><?php
            if (isset($mb['featured_box'])) {

                $box_width = Webtrek::if_exists($mb, 'feat_box_width');

                foreach($mb['featured_box'] as $box) {
                    
                    $icon = Webtrek::if_exists($box, 'box_icon');
                    $link_url = Webtrek::if_exists($box, 'link_url');
                    $link_text_title = Webtrek::if_exists($box, 'link_text');
                    $text = Webtrek::if_exists($box, 'box_text');
                    $d_icon = Webtrek::display(array($icon));
                    $d_title = Webtrek::display(array($link_text_title));

                    $output = "<div class='col-lg-{$box_width} box'>";
                    $output .= "<i class='{$icon}{$d_icon}'></i>";
                    $output .= "<h4 class='title {$d_title}'> <a style='color:{$text_color};' href='{$link_url}'><i class='ion-android-checkmark-circle inherit-parent'></i> {$link_text_title}</a></h4>";
                    $output .= "<p style='color:{$text_color};' class='description'>{$text}</p>";
                    $output .= '</div>';
                    echo $output;
                }
            } ?>
            </div>
        </div>
    </section><!-- #featured-services --><?php
    endif;
}