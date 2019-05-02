<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 * Closing </body> and </html> 
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Webtrek
 */

?>

<!DOCTYPE html>
<html lang="en">
<head <?php language_attributes(); ?>>

  <?php do_action('wt_after_opening_head_tag') ?>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <!-- Header -->
  <header id="header">
    <div class="container-fluid">
    <div class="row align-items-center appender">
      <div class="col-3">
      
        <div id="logo" class="pull-left">
          <?php the_custom_logo(); ?>
        </div>
      </div>
      <div class="col">
        <nav id="nav-menu-container" role="navigation">
          
            <?php
            wp_nav_menu( array(
              'theme_location'    => 'primary',
              'depth'             => 2,
              'container'         => 'ul',
              'container_class'   => 'collapse navbar-collapse nav-menu',
              'container_id'      => 'nabvar-container',
              'menu_class'        => 'nav-menu',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
        
        </nav>
      </div>
    </div>
    </div>
  </header><!-- #header -->