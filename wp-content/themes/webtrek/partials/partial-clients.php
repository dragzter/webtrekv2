<?php  
function get_partial_clients($mb) {  

  $display_section = Webtrek::if_exists($mb, 'show_hide');
  if ($display_section == "yes") :

  $heading = Webtrek::if_exists($mb, 'client_heading');
  $text = Webtrek::if_exists($mb, 'client_subtext', 'p', 'text-center');
  $d = Webtrek::display(array($heading));
  $heading_color = Webtrek::if_exists($mb, 'client_heading_color');
  $background = Webtrek::if_exists($mb, 'client_background'); 
  ?>

<!-- Clients Section -->
<?php 
  $h3_color = (isset($heading_color)) ? 'style="color:'.$heading_color.';"' : '';
  $css = '<style type="text/css">.clients::before{content:"";position:absolute;left:0;right:0;top:0;bottom:0;background: '.$background.';z-index: 0;}</style>';
  echo $css;
?>

<section id="clients" class=" clients">
  <div class="container"><?php
    echo "<header class='section-header {$d}'><h3 {$h3_color} class='section-heading-1'>{$heading}</h3></header>";
    
    if (isset($mb['client_image'])) {
      echo '<div class="wow fadeInUp owl-carousel clients-carousel">';
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