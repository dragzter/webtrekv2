<?php

function get_partial_mailchimp() {

    $mailchimp_html = get_theme_mod('contact_settings_mailchimp_html');

    $output = '<div class="wt-mailchimp-form-wrapper">';
    $output .= $mailchimp_html;
    $output .= '</div>';

    return $output;
}