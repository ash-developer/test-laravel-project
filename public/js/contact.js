$(function () {

    'use strict';

    var mapElement = $('.map-canvas'),
        position = new google.maps.LatLng(53.7122, 23.815),
        map,
        marker;

    if (mapElement.length > 0) {
        map = new google.maps.Map(mapElement[0], {
            center: position,
            zoom: 15,
            panControl: false,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: false,
            streetViewControl: false,
            overviewMapControl: false
        });
        marker = new google.maps.Marker({
            map: map,
            position: position
        });

    }

});
