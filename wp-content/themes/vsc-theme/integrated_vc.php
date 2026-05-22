<?php

/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 11/10/2017
 * Time: 10:55
 */
function vsc_map()
{
    $map = '<div id="map1" style="width: 100%;height:1000px;min-height: 100%;"></div>';
    ?>
    <script>

        addedMap = false;
        jQuery(document).scroll(function () {
            if (!addedMap && jQuery(document).scrollTop() > 100) {
                addedMap = true;
                jQuery(function () {
                    var points = new google.maps.LatLng(47.82299985402214, -69.55683797190048);
                    var styles = [
                        {
                            "stylers": [
                                {"visibility": "on"},
                                {"hue": "#625756"}
                            ]
                        }
                    ];

                    var mapOptions1 = {
                        scrollwheel: false,
                        // How zoomed in you want the map to start at (always required)
                        zoom: 17,
                        center: points, // New York
                        // This is where you would paste any style found on Snazzy Maps.
                        styles: styles
                    };
                    // Create the Google Map using our element and options defined above
                    var map1 = new google.maps.Map(document.getElementById("map1"), mapOptions1);
                    var rectangle = new google.maps.Rectangle();

                    // Let's also add a marker while we're at it
                    var marker = new google.maps.Marker({
                        position: points,
                        map: map1,
                        icon: '/wp-content/uploads/2026/05/icon-map.svg',
                        url: 'https://www.google.com/maps/place/Clinique+Dentaire+Genevi%C3%A8ve+Lafrance/@47.8228378,-69.5594987,17z/data=!3m1!5s0x4cbe4738722c69b5:0xec2f976b3fa46b66!4m14!1m7!3m6!1s0x4cbe4738528aa981:0x29cb5731c66adcd7!2sClinique+Dentaire+Genevi%C3%A8ve+Lafrance!8m2!3d47.8228342!4d-69.5569237!16s%2Fg%2F11b6yj66kx!3m5!1s0x4cbe4738528aa981:0x29cb5731c66adcd7!8m2!3d47.8228342!4d-69.5569237!16s%2Fg%2F11b6yj66kx?entry=ttu&g_ep=EgoyMDI2MDUxNy4wIKXMDSoASAFQAw%3D%3D'
                    });
                    marker.setAnimation(google.maps.Animation.BOUNCE);

                    marker.addListener('mouseover', function () {
                        marker.setAnimation(null);
                    });
                    marker.addListener('mouseout', function () {
                        marker.setAnimation(google.maps.Animation.BOUNCE);
                    });
                    google.maps.event.addListener(marker, 'click', function () {
                        window.location.href = this.url;
                    });
                });
            }
            document.getElementById("year").innerHTML = new Date().getFullYear();
        });
    </script>
    <?php return $map;
}

add_shortcode('vsc_map', 'vsc_map');
