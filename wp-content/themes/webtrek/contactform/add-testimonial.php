<?php
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');

if(isset($_POST['new_post']) == '1') {
    $post_title = $_POST['post_title'];
    $post_content = $_POST['post_content'];
    $post_rating = $_POST['rating'];

    $new_post = array(
        'ID' => '',
        'post_content' => $post_content, 
        'post_title' => $post_title,
        'post_status' => 'pending',
        'post_type' => 'testimonial',
        'post_excerpt' => $post_rating
    );

    $post_id = wp_insert_post($new_post, true);

    if( $post_id ) {
        echo 'OK';
    } else {
        echo 'Could not insert post!';
    }
   
    // update post meta

} 