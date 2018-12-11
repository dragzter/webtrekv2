<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Webtrek
 */

?>

<!DOCTYPE html>
<html lang="en">
<head <?php language_attributes(); ?>>
	<meta charset="utf-8">
	<title><?php the_title(); ?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicons -->
	<link href="img/favicon.png" rel="icon">
	<link href="img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">
    <div class="row align-items-center appender">
      <div class="col">
      
      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use an image logo -->
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