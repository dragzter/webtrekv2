<?php  
function get_partial_clients($mb) {  

  $display_section = Webtrek::if_exists($mb, 'show_hide');
  if ($display_section == "yes") :

  $heading = Webtrek::if_exists($mb, 'client_heading', 'h3', 'client-heading-1');
  $text = Webtrek::if_exists($mb, 'client_subtext', 'p', 'text-center');
  $d = Webtrek::display(array($heading)); ?>

<!-- Clients Section -->
<section id="clients" class="wow fadeInUp clients">
  <div class="container"><?php
    echo "<header class='section-header {$d}'>{$heading}</header>";
    echo $text; 

    if (isset($mb['client_image'])) {
      echo '<div class="owl-carousel clients-carousel">';
      foreach( $mb['client_image'] as $img ) { 
        echo Webtrek::if_exists($img, 'image', 'img', 'carousel-image test');
      }
      echo '</div>';
    } ?>
  </div>
</section><!-- #clients -->
<?php 
endif;
}