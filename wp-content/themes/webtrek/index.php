<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * 
 * Displays all Blog posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package webtrek
 */

get_header(); 

$index_page = rwmb_meta('section_control');

foreach($index_page as $key => $value) {
	if ($value['section_selector'] == 'hero') {
		get_partial_hero($value['hero']);
	}
} ?>

	<div id="primary-content" class="blog-index container">
		<div class="row">
			<div class="col-md-9">
				<main>
					<div class="row"><?php

						if ( have_posts() ) :
							if ( is_home() && ! is_front_page() ) :

							endif;

							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								// Use content-posts.php to display list of all posts
								get_template_part( 'template-parts/content', 'posts' );

							endwhile;
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif; ?>
						
						<div class="d-flex justify-content-center text-center"><?php 
						// Pgination
						the_posts_pagination( array(
							'mid_size' => 2,
							'prev_text' => "<span class='previous-page-link'>Prev</span>",
							'next_text' => "<span class='next-page-link'>Next</span>",
							'screen_reader_text' => " "
						)); ?>
						</div>

					</div><!-- /.row -->
				</main>
			</div><!-- /.col-9 -->
			<div class="col-md-3">
				<?php get_sidebar(); ?>
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->

<?php
get_footer();