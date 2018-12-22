<?php
/**
 * Template part for displaying all blog posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package webtrek
 */

$author = get_the_author();
$date = get_the_date();
$time = get_the_time();

?>
<div class="col-md-6 list-item-post">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <?php
            if ( is_singular() ) :
                the_title( '<h1 class="entry-title">', '</h1>' );
            else :
                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            endif;

            if ( 'post' === get_post_type() ) : ?>
                <div class="entry-meta"><?php 
                echo "<p>by: <span>WebTrek</span> / posted on: <span>{$date}</span>.</p>"; ?>
                </div><!-- .entry-meta -->
            <?php endif; ?>
        </header><!-- .entry-header -->

        <div class="entry-content"><?php
            the_excerpt(); ?>
        </div><!-- .entry-content -->

    </article>
</div>
