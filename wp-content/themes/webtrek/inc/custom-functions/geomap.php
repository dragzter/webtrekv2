<?php

function custom_geomap_function() {

    $m_icon = get_theme_mod( 'geomap_marker' ) ? get_theme_mod( 'geomap_marker' ) : '/wp-content/themes/webtrek/assets/lib/leaflet/css/images/marker-icon-2x.png';
    $m_alt_icon = get_theme_mod( 'geomap_additional_icon' ) ? get_theme_mod( 'geomap_additional_icon' ) : $m_icon;
    
    $m_center = get_theme_mod('geomap_center');
    
    $m_size = (get_theme_mod('geomap_marker_size') !== 'default') ? get_theme_mod('geomap_marker_size') : '25,41';
    $m_alt_size = (get_theme_mod('geomap_alt_marker_size') !== 'default') ? get_theme_mod('geomap_alt_marker_size') : '25,41';
    
    $m_marker_center = get_theme_mod('geomap_marker_center');
    $m_zoom = get_theme_mod('geomap_zoom')  ? get_theme_mod('geomap_zoom') : '10';
    $m_tooltip = get_theme_mod('geomap_marker_tooltip')  ? '.bindPopup("'.get_theme_mod('geomap_marker_tooltip').'")' : '';
    
    $m_add_markers = get_theme_mod('geomap_additional_markers')  ? get_theme_mod('geomap_additional_markers') : '';
    $m_add_markers_tooltips = get_theme_mod('geomap_additional_markers_tooltips')  ? get_theme_mod('geomap_additional_markers_tooltips') : null;


    ?>
        <link rel="stylesheet" id="wt-leaflet-style-css" href="https://gowebtrek.com/wp-content/themes/webtrek/assets/lib/leaflet/css/leaflet.css?ver=384394078" type="text/css" media="">
        <script type="text/javascript" src="/wp-content/themes/webtrek/assets/lib/leaflet/js/leaflet.js?ver=20151215"></script>

        <script  id="map-script">
            var map = L.map('geomap', {
                center: [<?php echo $m_center; ?>],
                zoom: <?php echo $m_zoom; ?>,
                zoomControl: true,
                scrollWheelZoom: false
            });

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            // Icon Dimensions
            var iconD = [<?php echo $m_size; ?>];
            var iconD2 = [<?php echo $m_alt_size; ?>];

            // Main Icon options
            var mainIcon = L.icon({
                iconUrl: '<?php echo $m_icon; ?>',
                shadowUrl: '',
                iconSize:     [iconD[0],  iconD[1]], // size of the icon
                shadowSize:   '', // size of the shadow
                iconAnchor:   [(iconD[0]/2), iconD[1]], // point of the icon which will correspond to marker's location
                shadowAnchor: [(iconD[0]/2), iconD[1]],  // the same for the shadow
                popupAnchor:  [0, -iconD[1]] // point from which the popup should open relative to the iconAnchor
            });

            // Main Icon/Marker
            var mainMarker = L.marker([<?php echo $m_marker_center; ?>] , { 
                icon: mainIcon,
                title: '',
                riseOnHover: true,
            }).addTo(map)<?php echo $m_tooltip; ?>;

            mainMarker.on('click', function(){
                this.openPopup();
            })

            var popupArray = [];
                
            <?php 
            if ($m_add_markers_tooltips !== null && $m_add_markers_tooltips !== '') {
                $m_tooltip_array = explode("::",$m_add_markers_tooltips);
            }

            if ($m_add_markers !== null && $m_add_markers !== '') {
                $m_marker_array = explode("::",$m_add_markers); ?>
                
                // Alt Icon Options
                var altIcon = L.icon({
                    iconUrl: '<?php echo $m_alt_icon; ?>',
                    shadowUrl: '',
                    iconSize:     [iconD2[0],  iconD2[1]], // size of the icon
                    shadowSize:   '', // size of the shadow
                    iconAnchor:   [(iconD2[0]/2), iconD2[1]], // point of the icon which will correspond to marker's location
                    shadowAnchor: [(iconD2[0]/2), iconD2[1]],  // the same for the shadow
                    popupAnchor:  [0,-iconD2[1]] // point from which the popup should open relative to the iconAnchor
                }); 
                <?php 
                echo PHP_EOL;  
                $count = 1;
                foreach($m_marker_array as $key => $marker) {
                    $tooltip = $m_tooltip_array[$key] !== null ? '.bindPopup("<strong>'.$count.'.</strong> '.trim($m_tooltip_array[$key]).'")' : '';
                    echo $m_output = 'var altMarker'.$key.' = L.marker(['.trim($marker).'],{icon: altIcon}).addTo(map)'.trim($tooltip) . PHP_EOL;
                    $count++;
                    echo 'popupArray.push(altMarker'.$key.');' . PHP_EOL;

                }
            } ?>

            popupArray.forEach(function(x) {
                x.on("click", function(){
                    this.openPopup();
                })
            })


        </script>
    <?php
}