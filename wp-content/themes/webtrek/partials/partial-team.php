<?php  
function get_partial_team($mb) { 
  
  $display_section = Webtrek::if_exists($mb, 'show_hide');
  if ($display_section == "yes") :  
  
    $title = Webtrek::if_exists($mb, 'team_title', 'h3');
    $subtitle = Webtrek::if_exists($mb, 'team_subtitle', 'p'); ?>

<!-- Team Section -->
<section id="team">
  <div class="container"><?php 
       
    echo "<div class='section-header wow fadeInUp'>{$title}{$subtitle}</div>"; ?>

    <div class="row justify-content-center"><?php

    if ($mb['team_member']) {

      foreach($mb['team_member'] as $tm) {

        $name = Webtrek::if_exists($tm, 'team_member_name', 'h4');
        $title = Webtrek::if_exists($tm, 'team_member_title', 'span');
        $image = Webtrek::if_exists($tm, 'team_member_image', 'img', 'img-fluid'); ?>

      <div class="col-lg-3 col-md-6 wow fadeInUp">
        <div class="member">
          <?php echo $image; ?>
          <div class="member-info">
            <div class="member-info-content"><?php

              echo $name;
              echo $title;

              if ($tm['team_member_social']) { ?>

              <div class="social"><?php

                  foreach($tm['team_member_social'] as $social) {

                    $icon = Webtrek::if_exists($social, 'social_icon_class');
                    $url = Webtrek::if_exists($social, 'social_url'); 

                    echo "<a href='{$url}'><i class='{$icon}'></i></a>";
                  
                  }
                } ?>
              </div>
            </div>
          </div>
        </div>
      </div><?php
      }
    } ?>
    </div>
  </div>
</section>
<?php
    endif;  
}