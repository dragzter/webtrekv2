<?php

require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');

date_default_timezone_set('EST');

global $wpdb;

if(isset($_POST)) {

    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $date = date('m/d/Y - h:i:s a');

    $table_name = $wpdb->prefix . "newsletter";
    $wpdb->insert( $table_name, array(
        'email' => $email,
        'date' => $date
    ) );

    $results = $wpdb->get_results( "SELECT email, date FROM $table_name");

    $body = "<strong>List of all current members:</strong><br>";
    $count = 1;

    foreach ($results as $key => $value) {
        $body .= $count++ . '. ' . $value->email .' / Subscribed: '. $value->date . '<br>';
    }

    $contact_email_to = get_theme_mod('contact_settings_newsletter_email');
    $contact_email_from = "contactform@" . @preg_replace('/^www\./','', $_SERVER['SERVER_NAME']);
    
    $headers[] = 'From: <' . $contact_email_from . '>' . PHP_EOL;
    $headers[] = 'Reply-To: ' . $contact_email_to . PHP_EOL;
    $headers[] = 'MIME-Version: 1.0' . PHP_EOL;
    $headers[] = 'Content-Type: text/html; charset=UTF-8' . PHP_EOL;
    $headers[] = 'X-Mailer: PHP/' . phpversion();

    $message_content = '<strong>Someone has signed up for the newsletter.</strong><br><br>';
    $message_content .= '<strong>New Subscriber: ' . $email . '</strong>, Subscribed on: '.$date.'<br><br>';
    $message_content .= $body;

    $sendemail = wp_mail($contact_email_to, 'Newsletter Signup List', $message_content, $headers);

}