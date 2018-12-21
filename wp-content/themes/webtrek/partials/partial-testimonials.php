<?php  
function get_partial_testimonials($mb) {

  $display_section = Webtrek::if_exists($mb, 'show_hide');
  if ($display_section == "yes") :

  $quote_left = get_template_directory_uri() . '/img/quote-sign-left.png';
  $quote_right = get_template_directory_uri() . '/img/quote-sign-right.png';
  $section_title = Webtrek::if_exists($mb, 'testimonial_title', 'h3');

?>
    <!-- Testimonials Section -->
    <section id="testimonials" class="section-bg wow fadeInUp">
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
            $output .= "<img src='{$quote_right}' class='quote-sign-left' alt=''>";
            echo "<p>{$output}</p>";  ?>
            
          </div><?php 
          } 
        } ?>
        </div>
      </div>
    </section><!-- #testimonials --><?php 
    endif; 
}