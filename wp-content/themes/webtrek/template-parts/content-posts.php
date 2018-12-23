<?php
/**
 * Template part for displaying all blog posts in paginated list.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package webtrek
 */

$author = get_the_author();
$date = get_the_date();
$time = get_the_time();

$classes = array(
    'about-col'
)

?>
<div class="col-md-6 list-item-post flex-wrap">

    <article id="post-<?php the_ID(); ?>" <?php post_class($classes); ?>>
        <div class="img overlay-container"><?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail('full', array('class' => 'img-fluid'));
            } else {
                echo "<img src='".get_template_directory_uri() . '/img/blog-placeholder.jpg'."' class='img-fluid placeholder no-thumbnail' />";
            } ?>
            <div class="overlay">
                <div class="overlay-text"><a href="<?php esc_url( get_permalink()); ?>">Read More <i class="ion-ios-redo"></i></a></div>
            </div>
        </div>
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
