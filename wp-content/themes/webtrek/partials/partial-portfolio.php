<?php 
function get_partial_portfolio($mb) { 
  
  $display_section = Webtrek::if_exists($mb, 'show_hide');
  if ($display_section == "yes") :

  $heading = Webtrek::if_exists($mb, 'section_title', 'h3');
  $subtitle = Webtrek::if_exists($mb, 'section_subtitle', 'p'); ?>
 <!-- Portfolio Section -->

    <section id="portfolio" class="section-bg">
      <div class="container"><?php

      echo "<header class='section-header'>{$heading}{$subtitle}</header>"; ?>
        
        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li><?php

              if (isset($mb['filter_links'])) {
                foreach ($mb['filter_links'] as $filter_link) {

                  $label = Webtrek::if_exists($filter_link, 'filter_label');
                  $filter_id = Webtrek::if_exists($filter_link, 'filter_id');
                 
                  echo "<li data-filter='.{$filter_id}'>{$label}</li>";

                }
              } ?>

            </ul>
          </div>
        </div>
        <div class="row portfolio-container"><?php

              if ( isset( $mb['portfolio_items'] ) ) {
                foreach( $mb['portfolio_items'] as $portfolio ) {

                  $_blank = (isset($portfolio['link_in_new'])) ? 'target="_blank"' : null;

                  $portfolio_id = Webtrek::if_exists($portfolio, 'portfolio_filter_id');
                  $portfolio_img = Webtrek::if_exists($portfolio, 'portfolio_image');
                  $portfolio_title = Webtrek::if_exists($portfolio, 'portfolio_title');
                  $portfolio_subtext = Webtrek::if_exists($portfolio, 'portfolio_subtext');
                  $portfolio_link = Webtrek::if_exists($portfolio, 'portfolio_link'); ?>

                      <div class="col-lg-4 col-md-6 portfolio-item <?php echo $portfolio_id; ?> wow fadeInUp">
                        <div class="portfolio-wrap">
                          <figure>
                            <img src="<?php echo $portfolio_img; ?>" class="img-fluid" alt="">
                            <a href="<?php echo $portfolio_img; ?>" data-lightbox="portfolio" data-title="<?php echo $portfolio_title; ?>" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                            <a <?php echo $_blank; ?> href="<?php echo $portfolio_link; ?>" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                          </figure>

                          <div class="portfolio-info">
                            <h4><a <?php echo $_blank; ?> href="<?php echo $portfolio_link; ?>"><?php echo $portfolio_title; ?></a></h4>
                            <p><?php echo $portfolio_subtext; ?></p>
                          </div>
                        </div>
                      </div>
                  <?php
                }
              } ?>
        </div>
      </div>
    </section><!-- #portfolio -->
    <?php
    endif;
}