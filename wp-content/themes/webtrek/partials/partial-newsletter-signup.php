<?php

function get_partial_newsletter() {

    $show = get_theme_mod('contact_settings_show_newsletter', 'yes');

    if ($show == 'yes') { 
        $form = '<form id="newsletter-form" class="newsletter-form" action="'.htmlspecialchars(get_template_directory_uri() . "/contactform/signup.php").'" method="post">';
        $form .= '<input type="email" name="email" placeholder="your@email.com" required><input type="submit"  value="Subscribe"></form>';
        $form .= '<div id="submit-success" class="d-none submit-success"><p><i style="color:#13a456;" class="ion-checkmark-circled"></i> Successfully Signed up!</p></div>';
        return $form;
    }
}