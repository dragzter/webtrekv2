<?php  
function get_partial_testimonials($mb) {

  $display_section = Webtrek::if_exists($mb, 'show_hide');
  if ($display_section == "yes") :

  $quote_left = get_template_directory_uri() . '/assets/img/quote-sign-left.png';
  $quote_right = get_template_directory_uri() . '/assets/img/quote-sign-right.png';
  $section_title = Webtrek::if_exists($mb, 'testimonial_title', 'h3');

  $tc = Webtrek::if_exists($mb, 'testimonial_title_color');
  $nc = Webtrek::if_exists($mb, 'testimonial_name_color');
  $sb_c = Webtrek::if_exists($mb, 'testimonial_subtitle_color');
  $ts_c = Webtrek::if_exists($mb, 'testimonial_color');
  $bc = Webtrek::if_exists($mb, 'testimonial_background');
  $bi = Webtrek::if_exists($mb, 'testimonial_background_image');
  $br = Webtrek::if_exists($mb, 'testimonial_img_border');

  if ($br == 'square') {
    $radius = '0';
  } elseif ($br == 'round') {
    $radius = '50%';
  } else {
    $radius = '4px';
  }

  $title_color = ($tc) ? '#testimonials .section-header h3 {color:'.$tc.';}' : '';
  $name_color = ($nc) ? '#testimonials .testimonial-item h3 {color:'.$nc.';}' : '';
  $subtitle = ($sb_c) ? '#testimonials .testimonial-item h4 {color:'.$sb_c.';}' : '';
  $testimonial_c = ($ts_c) ? '#testimonials .testimonial-item p {color:'.$ts_c.';}' : '';
  $background_color = ($bc) ? '#testimonials:before {background:'.$bc.';}' : '';
  $background_image = ($bi) ? '#testimonials {background-image: url("'.$bi.'");}' : '';
  $border_radius = ($br) ? '#testimonials .testimonial-item .testimonial-img {border-radius:'.$radius.';}' : '';


  if (isset($tc) || isset($nc) || isset($sb_c) || isset($ts_c) || isset($bc) || isset($bi) || isset($br)) {
    $style_tag = ['<style type="text/css">', '</style>'];
  } else {
      $style_tag = '';
  }

  $css = $style_tag[0] . $title_color . $name_color . $subtitle . $testimonial_c . $border_radius . $background_color . $background_image . $style_tag[1];
?>
    <!-- Testimonials Section -->
    <?php echo $css; ?>
    <section id="testimonials" class="wow fadeInUp">
      <div class="container"><?php 

        echo "<header class='section-header'>";
        echo $section_title;
        echo "</header>"; ?>

        <div class="owl-carousel testimonials-carousel"><?php 

        if (isset($mb['single_testimonial'])) { 
          
          
          foreach ( $mb['single_testimonial'] as $testimonial ) { 
            
            $t_img = Webtrek::if_exists($testimonial, 'reviewer_img', 'img', 'testimonial-img');
            $t_text = Webtrek::if_exists($testimonial, 'testimonial');
            $t_title = Webtrek::if_exists($testimonial, 'title', 'h3', 'testimonial-title');
            $t_subtitle = Webtrek::if_exists($testimonial, 'sub_title', 'h4', 'testimonial-subtitle'); ?>

          <div class="testimonial-item"><?php  

            // Testimonial Image
            echo $t_img; 

            // Testimonial title / name (h3)
            echo $t_title;

            // Testimonial subtitle (h4)
            echo $t_subtitle;

            // Testimonial with quotes
            $output = "<img src='{$quote_left}' class='quote-sign-left' alt=''>";
            $output .= $t_text;
            $output .= "<img src='{$quote_right}' class='quote-sign-right' alt=''>";
            echo "<p>{$output}</p>";  ?>
            
          </div><?php 
          } 
        } ?>
        </div>
      </div>
    </section><!-- #testimonials --><?php 
    endif; 
}