<?php  
function get_partial_facts($mb) { 
  
  $display_section = Webtrek::if_exists($mb, 'show_hide');
  if ($display_section == "yes") :

    $heading = Webtrek::if_exists($mb, 'fact_title', 'h3');
    $text = Webtrek::if_exists($mb, 'fact_subtitle', 'p');
    $image = Webtrek::if_exists($mb, 'fact_img', 'img', 'img-fluid test'); ?>
    
    <!-- Facts Section -->
    <section id="facts"  class="wow fadeIn">
      <div class="container"><?php

      echo "<header class='section-header'>{$heading}{$text}</header>"; 

        echo "<div class='row counters justify-content-center'>";
          
          if (isset($mb['fact_counter'])) {

            foreach ($mb['fact_counter'] as $counter) {

              $label = Webtrek::if_exists($counter, 'fact_label', 'p');
              $count_to = Webtrek::if_exists($counter, 'fact_count_to');

              $output = "<div class='col-lg-3 col-6 text-center'>";
              $output .= "<span data-toggle='counter-up'>{$count_to}</span>";
              $output .= $label;
              $output .= "</div>";
              
              echo $output;
            }
          } 

        echo "</div>";

        $output_2 = "<div class='facts-img'>";
        $output_2 .= $image;
        $output_2 .= "</div>";
        
        echo $output_2; ?>
      </div>
    </section><!-- #facts -->
<?php 
endif;
}