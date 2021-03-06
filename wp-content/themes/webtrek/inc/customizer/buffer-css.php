<?php 
    $brand = get_theme_mod('brand_main_color');
    $nav = (get_theme_mod('brand_nav_color')) ? get_theme_mod('brand_nav_color') : 'rgba(0,0,0,0.9)';
    $b_footer = (get_theme_mod('brand_bottom_footer_color')) ? get_theme_mod('brand_bottom_footer_color') : '#111';
    $t_footer = (get_theme_mod('brand_top_footer_color')) ? get_theme_mod('brand_top_footer_color') : '#111';

    $nav_link_color = (get_theme_mod('header_nav_color')) ? get_theme_mod('header_nav_color') : '#fff';
    $nav_link_color_hover = (get_theme_mod('header_nav_color_hover')) ? get_theme_mod('header_nav_color_hover') : $brand;

?>

/**
 * Brand Color <?php echo $brand; ?>
 */

a {
    color: <?php echo $brand; ?>;
    transition: 0.4s;
}

.brand-color-main {
    color: <?php echo $brand; ?>;
}

.brand-color-background {
    background-color: <?php echo $brand; ?>;
}

a:hover,
a:active,
a:focus {
  color: <?php echo $brand; ?>;
  outline: none;
  text-decoration: none !important;
}

.back-to-top  {
    background: <?php echo $brand; ?>;
}

#preloader:before {
    border-top: 6px solid <?php echo $brand; ?>;
}

#header #logo h1 a,
#header #logo h1 a:hover {
  border-left: 4px solid <?php echo $brand; ?>;
}

#intro .btn-get-started {   
    background: <?php echo $brand; ?>;
}

#intro .btn-get-started:hover {
    color: <?php echo $brand; ?>;
}

.nav-menu li:hover > a,
.nav-menu > .menu-active > a {
  color: <?php echo $brand; ?>;
}

.nav-menu ul li:hover > a {
    color: <?php echo $brand; ?>;
}

#mobile-nav ul .menu-item-has-children i.fa-chevron-up {
    color: <?php echo $brand; ?>;
}

#mobile-nav ul .menu-item-active {
    color: <?php echo $brand; ?>;
}

.section-header h3::after {
    background: <?php echo $brand; ?>;
}

#featured-services i:not(.inherit-parent), .fifty-fifty-section i {
    color: <?php echo $brand; ?>;
}

#featured-services h4 a:hover {
    color: <?php echo $brand; ?> !important;
}

.testimonial-card .testimonial-rating svg {
    fill: <?php echo $brand; ?>;
}

#about .about-col .icon {
    background-color: <?php echo $brand; ?>;
}

#about .about-col:hover i {
    color: <?php echo $brand; ?>;
}

#about .about-col h2 a:hover {
    color: <?php echo $brand; ?> !important;
}

#services .icon i {
    color: <?php echo $brand; ?>;
}

#services .box:hover .title a {
    color: <?php echo $brand; ?> !important;
}

#call-to-action .cta-btn:hover {
    background: <?php echo $brand; ?> !important;
    border: 2px solid <?php echo $brand; ?> !important;
}

#facts .counters span {
    color: <?php echo $brand; ?>;
}

#portfolio #portfolio-flters li:hover,
#portfolio #portfolio-flters li.filter-active {
    background: <?php echo $brand; ?>;
}

#portfolio .portfolio-item figure .link-preview:hover,
#portfolio .portfolio-item figure .link-details:hover {
    background: <?php echo $brand; ?> !important;
}

#portfolio .portfolio-item .portfolio-info h4 a:hover {
    color: <?php echo $brand; ?> !important;
}

.clients .owl-dot.active {
    background-color: <?php echo $brand; ?>;
}

#testimonials .owl-dot.active {
    background-color: <?php echo $brand; ?>;
}

#team .member .social a:hover {
    color: <?php echo $brand; ?>;
}

#accordion .head-link:hover .title {
    color: <?php echo $brand; ?>;
}

#contact .contact-info i {
    color: <?php echo $brand; ?>;
}

#contact .contact-info a:hover {
    color: <?php echo $brand; ?> !important;
}

#contact .form button[type="submit"] {
    background-color: <?php echo $brand; ?>;
}

#input-details button[type="submit"] {
    background-color: <?php echo $brand; ?>;
}

#input-details .rating:not(:hover) label input:checked ~ .icon,
#input-details .rating:hover label:hover input ~ .icon {
    color: <?php echo $brand; ?>;
}
	
#input-details .rating label input:focus:not(:checked) ~ .icon:last-child {
    color: #000;
    text-shadow: 0 0 5px <?php echo $brand; ?>;
}

#footer .footer-top .footer-info h3 {
    border-left: 4px solid <?php echo $brand; ?>;
}

#footer .footer-top h4::before {
    right: 0;
    background: <?php echo $brand; ?>;
}

#footer .footer-top .social-links a:hover {
    background: <?php echo $brand; ?> !important;
}

#footer .footer-top h4::after {
    background: <?php echo $brand; ?>;

}

#footer .footer-top .footer-links ul a:hover {
    color: <?php echo $brand; ?> !important;
}

.newsletter-form input[type="submit"]:hover {
    background: <?php echo $brand; ?>;
    border: 1px solid <?php echo $brand; ?>;
}

/**
 * Header Nav Color
 */

 #header.header-scrolled {
    background: <?php echo $nav; ?>;
    padding: 20px 0;
    height: auto;
    transition: all 0.5s;
}

#header .nav-menu a {
    color: <?php echo $nav_link_color ?>;
}

#header .nav-menu a:hover {
    color: <?php echo $nav_link_color_hover ?>;
}

/**
 * Footer
 */

#footer {
    background: <?php echo $t_footer; ?>;
}

#footer .footer-top {
    background: <?php echo $b_footer; ?>;
}

.mobile-fixed-cta .cta-inner a {
    background: <?php echo $brand; ?>;
}

.mobile-fixed-cta .cta-inner a:active {
    color: <?php echo $brand; ?>;
    background: #fff;
}


/**
 * Blog
 */

.blog-index article .overlay-container .overlay .overlay-text a:hover {
    border-color: <?php echo $brand; ?> !important;
    color: <?php echo $brand; ?> !important;
}

.blog-index .entry-title a:hover {
    color: <?php echo $brand; ?> !important;
}

#blog-sidebar ul li:hover a {
    color: <?php echo $brand; ?> !important;
}

#blog-sidebar ul li:hover:before {
    background-color: <?php echo $brand; ?>;
}

/**
 * Fifty Fifty Section
 */

/* Fifty Fifty Section
  --------------------------------*/

.fifty-fifty-section .cta-btn {
    border: 2px solid <?php echo $brand; ?>;
    color: <?php echo $brand; ?>;
}

.fifty-fifty-section .cta-btn:hover {
    background-color: <?php echo $brand; ?> !important;
    color: #fff !important;
    border-color: <?php echo $brand; ?> !important;
}

.w-tooltip  {
    background: <?php echo get_theme_mod('section_fifty_tooltip_color', '#000') ?>;
	color: <?php echo get_theme_mod('section_fifty_tooltip_text_color', '#fff') ?>;
}

.w-img-column:before {
    background: <?php echo get_theme_mod('section_fifty_overlay_color', '#111') ?>;
}

/* Custom Color Options
-----------------------------------*/

<?php
    

    $info_color_1 = get_theme_mod('section_contact_info_color_1_background');
    $info_color_2 = get_theme_mod('section_contact_info_color_2_background');

    $form_color_1 = get_theme_mod('section_contact_form_color_1_background');
    $form_color_2 = get_theme_mod('section_contact_form_color_2_background');

    $form_background_image = get_theme_mod('section_contact_form_image_background');
    $info_background_image = get_theme_mod('section_contact_info_image_background');

    $form_background_color_css = "background-image: linear-gradient(to left, $form_color_1, $form_color_2);";
    $form_background_image_css = "background-image: url($form_background_image);background-repeat: no-repeat;background-size: cover;background-position: center;margin-bottom: -1px;";
    
    $info_background_color_css = "background-image: linear-gradient(to left, $info_color_1, $info_color_2);";
    $info_background_image_css = "background-image: url($info_background_image);background-repeat: no-repeat;background-size: cover;background-position: center;";
    
?>

.contact-info-inner-wrap {
    <?php echo $info_background_image_css; ?>;
}

#contact {
    <?php echo $form_background_image_css; ?>
}

.contact-form-inner-wrap .background-overlay {
    <?php echo $form_background_color_css; ?>;
}

.contact-info-inner-wrap .background-overlay {
    <?php echo $info_background_color_css; ?>;
}

#contact .contact-info address, 
#contact .contact-info p, #contact .contact-info a {
    color: <?php echo get_theme_mod('section_contact_info_text_color'); ?>;
}

#contact .contact-info h3 {
    color: <?php echo get_theme_mod('section_contact_info_text_color'); ?>;
}

.contact-form-inner-wrap .section-header p, 
.contact-form-inner-wrap .section-header h3 {
    color: <?php echo get_theme_mod('section_contact_form_text_color'); ?>;
}




