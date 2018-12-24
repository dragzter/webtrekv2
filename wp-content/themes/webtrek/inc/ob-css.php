<?php 

function css_generate() {

	ob_start();

	include get_template_directory() . '/inc/customizer/buffer-css.php';

	$results = ob_get_contents();
	ob_end_clean();

	file_put_contents(get_template_directory() . '/css/clean-css.css', $results);

}