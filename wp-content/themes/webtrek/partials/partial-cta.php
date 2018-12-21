<?php 

function get_partial_cta($mb) { 

  $display_section = Webtrek::if_exists($mb, 'show_hide');
  if ($display_section == "yes") :
  
  $text_align = (isset($mb['cta_text_align'])) ? $mb['cta_text_align'] : 'text-center';
  $heading = (isset($mb['cta_heading'])) ? '<h3>'.$mb['cta_heading'].'</h3>' : '';
  $text = (isset($mb['cta_text'])) ? '<p>'.$mb['cta_text'].'</p>' : '';
  $btn_text = (isset($mb['cta_btn_text'])) ? $mb['cta_btn_text'] : '';
  $btn_url = (isset($mb['cta_btn_url'])) ? $mb['cta_btn_url'] : '';
  $blank = (isset($mb['cta_blank'])) ? 'target="_blank"' : ''; ?>

<!-- Call To Action Section -->
<section id="call-to-action" class="wow fadeIn">
  <div class="container <?php echo $text_align; ?>"><?php
    echo $heading;
    echo $text; 
    
    if ($btn_text !== '') { 
      echo '<a '.$blank.' class="cta-btn" href="'.$btn_url.'">'.$btn_text.'</a>';
    } ?>
  </div>
</section><!-- #call-to-action -->
<?php 
endif; 
}