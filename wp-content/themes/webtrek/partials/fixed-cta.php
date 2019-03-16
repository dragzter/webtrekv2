<?php
function fixed_cta() {
 
    $background = 'linear-gradient(to right, #0093ab, #0093ab,#0093ab, #28a745)';
    $phone_raw = '(603) 866-2443';
    $formatted = preg_replace('/[^0-9]/', '', $phone_raw);

    if (isset($phone_raw)) {
        $href = 'href="tel:'.$formatted.'"';
    } else {
        $href = 'href="#"';
    }

?>
<div class="position-relative">
<a style="background:<?php echo $background; ?>;" <?php echo $href; ?> class="fixed-cta wow bounceInLeft" style="display: inline;"><i class="ion-ios-telephone"></i> <?php echo $phone_raw; ?></a>

</div>

<?php
}

