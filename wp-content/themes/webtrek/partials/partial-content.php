<?php 
function get_partial_content($mb) { ?>

<section id="primary-content" class="content-page">
    <div class="site-main container">
        <div class="row">
            <div class="col-md-12"><?php

                while ( have_posts() ) :
                    the_post();
                    //get_template_part( 'template-parts/content', 'page' );
                    the_content();
                endwhile; ?>
               
            </div>
        </div>
    </div><!-- .container -->
</section><!-- #primary-content -->
<?php 
}