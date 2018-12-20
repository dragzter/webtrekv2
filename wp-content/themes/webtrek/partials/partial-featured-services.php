<?php 
function get_partial_featured_services($mb) { ?>

   <!-- Featured Services Section -->
    <section id="featured-services">
        <div class="container">
            <div class="row justify-content-center"><?php
            if (isset($mb['featured_box'])) {

                $box_width = Webtrek::if_exists($mb, 'feat_box_width');

                foreach($mb['featured_box'] as $box) {
                    
                    $icon = Webtrek::if_exists($box, 'box_icon');
                    $link_url = Webtrek::if_exists($box, 'link_url');
                    $link_text_title = Webtrek::if_exists($box, 'link_text');
                    $text = Webtrek::if_exists($box, 'box_text', 'p', 'description testt');
                    $d_icon = Webtrek::display(array($icon));
                    $d_title = Webtrek::display(array($link_text_title));

                    $output = "<div class='col-lg-{$box_width} box'>";
                    $output .= "<i class='{$icon}{$d_icon}'></i>";
                    $output .= "<h4 class='title {$d_title}'><a href='{$link_url}'>{$link_text_title}</a></h4>";
                    $output .= $text;
                    $output .= '</div>';
                    echo $output;
                }
            } ?>
            </div>
        </div>
    </section><!-- #featured-services --><?php
}