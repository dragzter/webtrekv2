<?php
function fixed_cta() {

    $color1 = get_theme_mod('fixed_cta_background_1', '#000');
    $color2 = get_theme_mod('fixed_cta_background_2', '#000');
    $color3 = get_theme_mod('fixed_cta_background_3', '#000');
    $secondary = get_theme_mod( 'fixed_cta_secondary_text', 'Call Now');
 
    $bcg = 'linear-gradient(to right, #0093ab, #0093ab,#0093ab, #28a745)';
    $background = ($bcg) ? 'linear-gradient(to right,'.$color1.','.$color2.','.$color3.')': '';
    $phone_raw = get_theme_mod('fixed_cta_number', '(432) 889-9990');
    $formatted = preg_replace('/[^0-9]/', '', $phone_raw);

    if (isset($phone_raw)) {
        $href = 'href="tel:'.$formatted.'"';
    } else {
        $href = 'href="#"';
    }

    $show_cta = get_theme_mod('fixed_cta_display', 'yes');
    $show_mobile_cta = get_theme_mod('fixed_cta_mobile_display', 'yes');


if ($show_cta == 'yes') { ?>
<div class="position-relative fixed-cta-wrap">
    <div class="fixed-cta wow bounceInLeft" style="background:<?php echo $background; ?>;">
        <a <?php echo $href; ?> class=" cta-phone d-flex align-items-center" style="display: inline;"> 
            <i class="ion-ios-telephone"></i>
            <?php echo $phone_raw; ?>   
        </a>
        <p><?php echo $secondary; ?></p>
    </div>
</div>
<?php }

    if ($show_mobile_cta == 'yes') { ?>
    <div class="mobile-fixed-cta">
        <div class="cta-inner">
            <a class="mobile-cta-button" <?php echo $href; ?>><i class="ion-ios-telephone"></i> CALL NOW</a>
        </div>
    </div>
<?php
    }
}