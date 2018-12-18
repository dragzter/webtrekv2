<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webtrek
 */
?>
<!-- Footer -->
<footer id="footer">
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 footer-info"><?php 
					the_custom_logo(); ?>
				</div>

				<div class="col-lg-3 col-md-6 footer-links"><?php 
					if ( is_active_sidebar( 'sidebar-footer-1' ) ) {
						dynamic_sidebar( 'sidebar-footer-1' );
					} ?>
				</div>

				<div class="col-lg-3 col-md-6 footer-contact"><?php 
					if ( is_active_sidebar( 'sidebar-footer-2' ) ) {
						dynamic_sidebar( 'sidebar-footer-2' );
					} ?>
				</div>

				<div class="col-lg-3 col-md-6 footer-newsletter"><?php
				    if ( is_active_sidebar( 'sidebar-footer-3' ) ) {
						dynamic_sidebar( 'sidebar-footer-3' );
					} ?>
					<!-- <h4>Useful Links</h4>
					<nav id="nav-menu-container" role="navigation">
	
						<?php
						// wp_nav_menu( array(
						// 	'theme_location'    => 'secondary',
						// 	'depth'             => 2,
						// 	'container'         => 'ul',
						// 	'container_class'   => 'collapse navbar-collapse nav-menu',
						// 	'container_id'      => 'nabvar-container',
						// 	'menu_class'        => 'nav-menu',
						// 	'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						// 	'walker'            => new WP_Bootstrap_Navwalker(),
						// ) );
						?>
					
					</nav> -->
					<!-- <h4>Our Newsletter</h4>
					<p>Tamen  enim veniam  quem marada parida nodela caramase seza.</p>
					<form action="" method="post">
					<input type="email" name="email"><input type="submit"  value="Subscribe">
					</form> -->
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="copyright">
			&copy; Copyright <strong>WebTrek Web Development</strong>. All Rights Reserved
		</div>
	</div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div><?php 
wp_footer(); ?>
</body>
</html>