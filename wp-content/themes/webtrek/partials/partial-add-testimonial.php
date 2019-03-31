<?php
function get_partial_add_testimonial() {
    $star = '<i class="ion-android-star"></i>';
?>

<!-- New Post Form -->
<div id="postbox">
<form id="new_post" name="new_post" method="post" action="">

<!-- post name -->
<label for="title">Title</label><br />
<input type="text" id="title" value="" tabindex="1" size="20" name="title" />


<!-- post Category -->
<label for="Category">Category:</label><br />
<p><?php wp_dropdown_categories( 'show_option_none=Category&tab_index=4&taxonomy=category' ); ?>


<!-- post Content -->
<label for="description">Content</label><br />
<textarea id="description" tabindex="3" name="description" cols="50" rows="6"></textarea>

<!-- post tags -->
<label for="post_tags">Tags:</label>
<input type="text" value="" tabindex="5" size="16" name="post_tags" id="post_tags" />
<input type="submit" value="Publish" tabindex="6" id="submit" name="submit" />

<input type="hidden" name="action" value="new_post" />
<?php wp_nonce_field( 'new-post' ); ?>
</form>
</div>

<?php
}