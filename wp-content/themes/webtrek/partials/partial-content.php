<?php 

/**
 * Display Page content.
 * Include as partial in front-page.php
 * or any other template.
 * 
 * @package webtrek
 * 
 */

function get_partial_content() { ?>

<section id="primary-content" class="content-page">
    <div class="site-main container">
        <div class="row">
            <div class="col-md-12"><?php

                while ( have_posts() ) :
                    the_post();
                    the_content();
                endwhile; ?>
               
            </div>
        </div>
    </div><!-- .container -->
</section><!-- #primary-content -->
<?php 
}

