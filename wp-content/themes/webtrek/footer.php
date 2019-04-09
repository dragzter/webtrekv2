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
				<div class="col-lg-3 col-md-6 footer-info footer-column-1">
					<img class="img-fluid" src="<?php	echo get_theme_mod('brand_footer_logo') ?>" alt="Footer Logo">
				</div>

				<div class="col-lg-3 col-md-6 footer-links footer-column-2"><?php 
					if ( is_active_sidebar( 'sidebar-footer-1' ) ) {
						dynamic_sidebar( 'sidebar-footer-1' );
					} ?>
				</div>

				<div class="col-lg-3 col-md-6 footer-contact footer-column-3"><?php 
					if ( is_active_sidebar( 'sidebar-footer-2' ) ) {
						dynamic_sidebar( 'sidebar-footer-2' );
					} ?>
				</div>

				<div class="col-lg-3 col-md-6 footer-newsletter footer-column-4"><?php
				    if ( is_active_sidebar( 'sidebar-footer-3' ) ) {
						dynamic_sidebar( 'sidebar-footer-3' );
					} 
					// Include newsletter
					echo get_partial_newsletter();
					?>

				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="copyright">
			&copy; <?php echo date("Y"); ?> <strong>WebTrek Web Development</strong>. All Rights Reserved
		</div>
	</div>
</footer><!-- #footer -->

<?php echo fixed_cta(); ?>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div><?php 
wp_footer(); ?>
</body>
</html>