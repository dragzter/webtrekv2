<?php
/**
 * Handle form submission to testimonial custom post type.
 */
add_action( 'wp_ajax_handle_testimonial_submit', 'submit_testimonial_post' );
add_action( 'wp_ajax_nopriv_handle_testimonial_submit', 'submit_testimonial_post' );
function submit_testimonial_post() {

	if( isset( $_POST['new_post'] ) == '1' ) {

		$success = true;
		
		if (isset($_POST['post_title'])) {
			$post_title = esc_attr($_POST['post_title']);
		} else {
			$success = false;
		}

		if (isset($_POST['post_content'])) {
			$post_content = esc_attr($_POST['post_content']);
		} else {
			$success = false;
		}

		if (is_numeric($_POST['rating']) && $_POST['rating'] <= 5) {
			$post_rating = $_POST['rating'];
		} else {
			$str_test = 'The rating is not a number';
			$success = false;
		}
		
		$new_post = array(
			'ID' => '',
			'post_content' => $post_content, 
			'post_title' => $post_title,
			'post_status' => 'pending',
			'post_type' => 'testimonial',
			'post_excerpt' => $post_rating
		);

		$post_id = wp_insert_post( $new_post, true );

		if( $post_id && $success ) {
			echo 'OK';
		} else {
			echo 'Could not insert post!';
		}
	} 

	wp_die();
}