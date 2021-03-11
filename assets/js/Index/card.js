"use strict";

$(document).ready(function ()
{
    $('[data-action="share"]').on('click', function()
    {
        navigator.share({
            title: 'Marbu Salud',
            text: $(this).data('text'),
            url: 'https://marbu.one-consultores.com/card'
        });
    });
});

function map()
{
    var locations = [
        {
            title: 'Marbu Salud',
            lat: 21.1487136,
            lng: -86.8450465,
            zoom: 14
        }
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: locations[0].zoom,
        center: {
            lat: locations[0].lat,
            lng: locations[0].lng
        }
    });

    var marker = new google.maps.Marker({
        position: {
            lat: locations[0].lat,
            lng: locations[0].lng
        },
        map: map
    });

    var title = new google.maps.InfoWindow({
        content: locations[0].title
    });

    title.open(map, marker);
}
