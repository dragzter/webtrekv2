<?php  
function get_partial_skills($mb) { 
  
  $display_section = Webtrek::if_exists($mb, 'show_hide');
  if ($display_section == "yes") :  
  
    $title = Webtrek::if_exists($mb, 'skills_title', 'h3');
    $subtitle = Webtrek::if_exists($mb, 'skills_subtitle', 'p'); ?>
    <!-- Skills Section -->
    <section id="skills">
      <div class="container"><?php 
        echo "<header class='section-header'>{$title}{$subtitle}</header>"; ?>

        <div class="skills-content"><?php
        
        if ($mb['single_skill']) {
        
          foreach($mb['single_skill'] as $skill) {

            $skill_name = Webtrek::if_exists($skill, 'skill_name');
            $skill_val_label = Webtrek::if_exists($skill, 'skill_label');
            $skill_min = Webtrek::if_exists($skill, 'skill_min');
            $skill_max = Webtrek::if_exists($skill, 'skill_max');
            $skill_cur = Webtrek::if_exists($skill, 'skill_current');
            $skill_color = Webtrek::if_exists($skill, 'skill_color');

            $output = "<div class='progress'>";
            $output .= "<div style='background-color: {$skill_color};' class='progress-bar' role='progressbar' aria-valuenow='{$skill_cur}' aria-valuemin='{$skill_min}' aria-valuemax='{$skill_max}'>";
            $output .= "<span class='skill'>{$skill_name} <i class='val'>{$skill_val_label}</i></span>";
            $output .= "</div></div>";
            echo $output;
          } 
        } ?>
        </div>
      </div>
    </section>
    <?php 
    endif; 
}