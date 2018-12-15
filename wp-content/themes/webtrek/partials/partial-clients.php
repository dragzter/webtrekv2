<?php  

function get_partial_clients($mb) {  
  $heading = (isset($mb['client_heading'])) ? $mb['client_heading'] : '';
  $text = (isset($mb['client_subtext'])) ? '<p class="text-center client-subtext">'.$mb['client_subtext'].'</p>' : '';
?>
<!-- Clients Section -->
<section id="clients" class="wow fadeInUp clients">
  <div class="container"><?php 
  
    if ($heading !== '') { ?>
    <header class="section-header">
      <h3><?php echo $heading; ?></h3>
    </header><?php 
    }
    echo $text; ?>

    <div class="owl-carousel clients-carousel"><?php  

      foreach( $mb['client_image'] as $img ) { ?>
        <img class="carousel-image" src="<?php echo $img['image']; ?>" alt=""><?php
      } ?>

    </div>

  </div>
</section><!-- #clients -->
<?php 
}