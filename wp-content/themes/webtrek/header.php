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

<?php  get_template_part('/partials/partial-header');