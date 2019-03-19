<?php
function fixed_cta() {
 
    $background = 'linear-gradient(to right, #0093ab, #0093ab,#0093ab, #28a745)';
    $phone_raw = '(099) 555-7888';
    $formatted = preg_replace('/[^0-9]/', '', $phone_raw);

    if (isset($phone_raw)) {
        $href = 'href="tel:'.$formatted.'"';
    } else {
        $href = 'href="#"';
    }

?>
<div class="position-relative">
    
    <div class="fixed-cta wow bounceInLeft" style="background:<?php echo $background; ?>;">
        <a  <?php echo $href; ?> class=" cta-phone d-flex align-items-center" style="display: inline;"> 
            <i class="ion-ios-telephone"></i>
            <?php echo $phone_raw; ?>   
        </a>
        <p>Call Now</p>
    </div>

</div>

<?php
}

