<?php

function get_partial_menu($mb) {

    $display_section = Webtrek::if_exists($mb, 'show_hide');

    if ($display_section == "yes") :

    $title = Webtrek::if_exists($mb, 'menu_title', 'h3');
    $subtitle = Webtrek::if_exists($mb, 'menu_subtitle', 'p');

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
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="menu-section-navigator">
                        <a class="menu-nav-link" href="#!">Drinks Menu</a>
                        <a class="menu-nav-link" href="#!">Appetizer Menu</a>
                        <a class="menu-nav-link" href="#!">Dessert Menu</a>
                    </div>
                </div>
            </div>

            
            <div id="" class="row">
                
                <div class="col-md-12">
                    <div class="menu-section-heading">
                        <h3>Menu Title</h3>
                        <p class="menu-item-desc">Menu subtitle description</p>
                    </div>
                </div>
                <div class="col-md-6 menu-item-outer">
                    <div class="menu-item-single">
                        <div class="menu-item-single-head">
                            <h3>Menu Item</h3>
                            <p class="menu-item-price">Price $13</p>
                        </div>
                        <p class="menu-item-desc">Menu item description lorem ipsum and so forth.  Menu item description lorem ipsum and so forth.  Menu item description lorem ipsum and so forth.  Menu item description lorem ipsum and so forth. Menu item description lorem ipsum and so forth.  Menu item description lorem ipsum and so forth.</p>
                    </div>
                </div> 
                <div class="col-md-6 menu-item-outer">
                    <div class="menu-item-single">
                        <div class="menu-item-single-head">
                            <h3>Menu Item</h3>
                            <p class="menu-item-price">Price $13</p>
                        </div>
                        <p class="menu-item-desc">Menu item description lorem ipsum and so forth.  Menu item description lorem ipsum and so forth.</p>
                    </div>
                </div> 

            </div>
        </div><!-- #menu-section-main -->
    </section>


    <?php
    endif;
}