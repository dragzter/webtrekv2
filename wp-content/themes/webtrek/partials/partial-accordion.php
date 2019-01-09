<?php

function get_partial_accordion( $mb ) { 
    $unq_id = uniqid();
    $display_section = Webtrek::if_exists($mb, 'show_hide');
    if ($display_section == "yes") :  
    
    $title = Webtrek::if_exists($mb, 'accordion_title', 'h3');
    $subtitle = Webtrek::if_exists($mb, 'accordion_subtitle', 'p'); ?>

    <section id="accordion-<?php echo $unq_id; ?>" class="accordion">
        <div class="container"><?php

            echo "<div class='section-header'>{$title}{$subtitle}</div>"; ?>
            <div class="row">
                <div class="col-md-12"><?php 
                
                if ($mb['single_accordion']) {
                    
                    $counter = 0;
                          

                    foreach($mb['single_accordion'] as $accordion) { 
                        $counter++;

                        $accordion_title = Webtrek::if_exists($accordion, 'collapse_title');
                        $accordion_content = Webtrek::if_exists($accordion, 'collapse_content', 'p');
                        $accordion_icon = Webtrek::if_exists($accordion, 'collapse_icon'); ?>
                    
                    <div class="card wow fadeInUp">
                        <a class="btn text-left head-link" href="#" data-toggle="collapse" data-target="#collapse-<?php echo "{$unq_id}-{$counter}"; ?>" aria-expanded="true">
                            <div class="card-header">
                                <h5 class="mb-0 title d-flex align-items-center"><?php  
                                
                                echo "<i class='{$accordion_icon}'></i>";
                                echo $accordion_title; ?>         
                                
                                </h5>
                            </div>
                        </a>

                        <div id="collapse-<?php echo "{$unq_id}-{$counter}"; ?>" class="collapse <?php if ($counter == 1): echo 'show'; endif; ?>" data-parent="#accordion-<?php echo $unq_id; ?>"><?php
                            
                            echo "<div class='card-body accordion-content'>{$accordion_content}</div>"; ?>
                    
                        </div>
                    </div><?php
                    }
                } ?>

                </div>
            </div>
        </div>
    </section>
<?php
endif;
}