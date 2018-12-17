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
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; ?>
            </div>
        </div>
    </div><!-- #main -->
</section><!-- #primary -->
<?php 
}