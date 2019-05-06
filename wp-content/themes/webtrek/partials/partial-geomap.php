<?php

function get_partial_geomap( $mb ) {

    add_action('wt_after_footer_scripts', 'custom_geomap_function', 1000);
    ?>
    <section id="geomap-section" class="geomap-section">
        <div class="container-fluid p-0">
            <div style="height: 400px;" id="geomap"></div>    
        </div>
    </section>

    <?php

}