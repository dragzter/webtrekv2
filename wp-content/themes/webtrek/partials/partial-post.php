<?php
/**
 * Display Single Post
 * Called in single.php
 * 
 * Must be called in blog template to display post content.
 * @package webtrek
 * 
 */

function get_post_partial() { 
    
$author = get_the_author();
$date = get_the_date();
$time = get_the_time(); ?>

<section id="primary-content" class="single-post-view">
    <div class="site-main container">
        <div class="row">
            <div class="col-md-9">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><?php

                // Must include loop
                while ( have_posts() ) : the_post(); endwhile; ?>
                    
                    <header class="entry-header">
                        <?php
                        if ( is_singular() ) :
                            the_title( '<h2 class="entry-title">', '</h2>' );
                        else :
                            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                        endif;



                        if ( 'post' === get_post_type() ) : ?>
                            <div class="entry-meta"><?php 
                            echo "<p><span>WebTrek</span> / Published: <span>{$date}</span></p>"; ?>
                            </div><!-- .entry-meta -->
                        <?php endif; ?>
                    </header><!-- .entry-header -->

                    <div class="entry-content"><?php
                        the_content(); ?>
                    </div><!-- .entry-content -->

                </article><!-- #post-<?php the_ID(); ?> -->
                <div class="comment-section">
                    <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                    ?>
                </div>
            </div>

			<div class="col-md-3">
				<?php get_sidebar(); ?>
			</div>

        </div>
    </div>
</section>
<?php  
}