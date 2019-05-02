<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webtrek
 */

get_template_part('/partials/partial-footer');
fixed_cta(); 
wp_footer();

// Custom Hook
do_action('wt_after_footer_scripts') ?>
</body>
</html>