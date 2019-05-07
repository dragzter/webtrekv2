<?php

function get_partial_menu($mb) {

    $display_section = Webtrek::if_exists($mb, 'show_hide');

    if ($display_section == "yes") :

    $title = Webtrek::if_exists($mb, 'menu_title', 'h3');
    $subtitle = Webtrek::if_exists($mb, 'menu_subtitle', 'p');
    
    $section_bcgnd_color = isset($mb['menu_section_background']) ? $mb['menu_section_background'] : '#fff';
    $title_color = isset($mb['menu_title_color']) ? $mb['menu_title_color'] : '#000';
    $subtitle_color = isset($mb['menu_subtitle_color']) ? $mb['menu_subtitle_color'] : '#000';
    $menu_card_color = isset($mb['menu_item_color']) ? $mb['menu_item_color'] : '#fff';
    $menu_item_border_color = isset($mb['menu_item_border_color']) ? $mb['menu_item_border_color'] : 'rgba(0,0,0,0.2)';

    $menu_item_title_color = isset($mb['menu_item_title_color']) ? $mb['menu_item_title_color'] : 'rgba(0,0,0,0.2)';
    $menu_item_desc_color = isset($mb['menu_item_description_color']) ? $mb['menu_item_description_color'] : 'rgba(0,0,0,0.2)';

    $nav_btn_color = isset($mb['navigator_btn_color']) ? $mb['navigator_btn_color'] : '#000';
    $nav_btn_background_color = isset($mb['navigator_btn_background_color']) ? $mb['navigator_btn_background_color'] : '#fff';

    $css = '<style type="text/css">';
    $css .= '#wt-menu-section .section-header h3, .menu-section-heading h3 {';
    $css .=     'color:'.$title_color.';';
    $css .= '}';
    $css .= '#wt-menu-section .section-header p, .menu-section-heading p {';
    $css .=     'color:'.$subtitle_color.';';
    $css .= '}';
    $css .= '#wt-menu-section {';
    $css .=     'background:'.$section_bcgnd_color.';';
    $css .= '}';
    $css .= '.menu-item-single {';
    $css .=     'border:1px solid '.$menu_item_border_color.';';
    $css .=     'background:'.$menu_card_color.';';
    $css .= '}';
    $css .= '.menu-item-single-head h3, .menu-item-single-head .menu-item-price {';
    $css .=     'color:'.$menu_item_title_color.';';
    $css .= '}';
    $css .= '.menu-item-single-head {';
    $css .=     'border-bottom:2px solid '.$menu_item_border_color.';';
    $css .= '}';
    $css .= 'p.menu-item-desc {';
    $css .=     'color:'.$menu_item_desc_color.';';
    $css .= '}';
    $css .= 'a.menu-nav-link {';
    $css .=     'color:'.$nav_btn_color.';';
    $css .=     'background:'.$nav_btn_background_color.';';
    $css .=     'border:1px solid '.$nav_btn_color.';';
    $css .= '}';
    $css .= 'a.menu-nav-link:hover {';
    $css .=     'color:'.$nav_btn_background_color.';';
    $css .=     'background:'.$nav_btn_color.';';
    $css .=     'border-color:'.$nav_btn_color.';';
    $css .= '}';
    $css .= '</style>';
    echo $css;

    ?>
    
    <section id="wt-menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12"><?php 
                    $output = '<div class="section-header">';
                    $output .= $title;
                    $output .= $subtitle;
                    $output .= '</div>';
                    echo $output; ?>
                </div>
            </div><?php

            $navigator = '<div class="row">';
            $navigator .= '<div class="col-md-12">';
            $navigator .= '<div class="menu-section-navigator">';
            foreach($mb['menu_navigator'] as $nav) {
                $navigator .= '<a class="menu-nav-link scrollto" href="'.$nav['menu_nav_item_link'].'">'.$nav['menu_nav_item'].'</a>';
            }
            $navigator .= '</div>';
            $navigator .= '</div>';
            $navigator .= '</div>';
            echo $navigator; 

            foreach($mb['menu_section'] as $menu) { 
                
                $menu_section_title = isset($menu['menu_section_heading']) ? $menu['menu_section_heading'] : 'Section heading';
                $menu_section_subtitle = isset($menu['menu_section_subtitle']) ? '<p>'.$menu['menu_section_subtitle'].'</p>' : '';

                $css_id = isset($menu['menu_css_id']) ? $menu['menu_css_id'] : ''; ?>

                <div id="<?php echo $css_id; ?>" class="menu-row">
                    <div class="menu-section-heading">
                        <h3><?php echo $menu_section_title; ?></h3>
                        <?php echo $menu_section_subtitle; ?>
                    </div>

                    <div class="menu-layout-wrapper"><?php

                        foreach($menu['menu_item'] as $item) {

                            $item_title = isset($item['menu_item_name']) ? $item['menu_item_name'] : 'Item Name';
                            $item_desc = isset($item['menu_item_description']) ? $item['menu_item_description'] : 'Item Description';
                            $item_price = isset($item['menu_item_price']) ? $item['menu_item_price'] : '$10.00';


                            $menu_item = '<div class="menu-item-outer">';
                            $menu_item .=   '<div class="menu-item-single">';
                            $menu_item .=       '<div class="menu-item-single-head">';
                            $menu_item .=           '<h3>'.$item_title.'</h3>';
                            $menu_item .=           '<p class="menu-item-price">'.$item_price.'</p>';
                            $menu_item .=       '</div>';
                            $menu_item .=       '<p class="menu-item-desc">'.$item_desc.'</p>';
                            $menu_item .=   '</div>';
                            $menu_item .= '</div>';
                            echo $menu_item;

                        } ?>

                    </div>
                </div>
            <?php
            } ?>
  
        </div><!-- #menu-section-main -->
    </section>
    <?php
    endif;
}