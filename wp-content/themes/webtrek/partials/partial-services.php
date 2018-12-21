<?php  
function get_partial_services($mb) { 

  $display_section = Webtrek::if_exists($mb, 'show_hide');
  if ($display_section == "yes") :
  
  $title = Webtrek::if_exists($mb, 'services_title', 'h3');
  $subtitle = Webtrek::if_exists($mb, 'services_subtitle', 'p'); ?>

<!-- Services Section -->
<section id="services">
  <div class="container"><?php

    echo '<header class="section-header wow fadeInUp">';
    echo $title;
    echo $subtitle;
    echo '</header>'; 
        
    if ($mb['single_service']) {

      foreach ($mb['single_service'] as $i => $service) { 

        $name = Webtrek::if_exists($service, 'service_name');
        $link = Webtrek::if_exists($service, 'service_link');
        $text = Webtrek::if_exists($service, 'service_text', 'p', 'description test');
        $icon = Webtrek::if_exists($service, 'service_icon');
        
        if ($i % 3 == 0) {
          echo '<div class="row justify-content-center">';
        } 
        
        $output = "<div class='col-lg-4 col-md-6 box wow bounceInUp' data-wow-duration='1.4s'>";
        $output .= "<div class='icon'><i class='{$icon}'></i></div>";
        $output .= "<h4 class='title'><a href='{$link}'>{$name}</a></h4>";
        $output .= $text;
        $output .= '</div>';
        echo $output;

        if ($i % 3 == 2) {
          echo "</div>";
        }
      }
    } ?>
  </div>
</section><!-- #services -->
<?php  
endif;
}