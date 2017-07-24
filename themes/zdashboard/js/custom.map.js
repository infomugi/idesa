$(document).ready(function () {

    // Location
    var LocsA = [
        {
            lat: 3.077475,
            lon: 101.493553,
            title: 'Location A',
            html: [
                '<h3>Location A</h3>',
                '<p>This is one awesome place</p>'
            ].join(''),
            icon: 'http://maps.google.com/mapfiles/markerA.png'
        },
        {
            lat: 3.077040,
            lon: 101.485135,
            title: 'Location B',
            html: [
                '<h3>Location B</h3>',
                '<p>This is one awesome place</p>'
            ].join(''),
            icon: 'http://maps.google.com/mapfiles/markerB.png'
        },
        {
            lat: 3.042888,
            lon: 101.449689,
            title: 'Location C',
            html: [
                '<h3>Location C</h3>',
                '<p>This is one awesome place</p>'
            ].join(''),
            icon: 'http://maps.google.com/mapfiles/markerC.png'
        },
        {
            lat: 3.069681,
            lon: 101.501859,
            title: 'Location D',
            html: [
                '<h3>Location D</h3>',
                '<p>This is one awesome place</p>'
            ].join(''),
            icon: 'http://maps.google.com/mapfiles/markerD.png'
        },
        {
            lat: 3.087710,
            lon: 101.521520,
            title: 'Location E',
            html: [
                '<h3>Location E</h3>',
                '<p>This is one awesome place</p>'
            ].join(''),
            icon: 'http://maps.google.com/mapfiles/markerE.png'
        }
    ];

    new Maplace({
        locations: LocsA,
        map_div: '#gmap-menu',
        controls_type: 'list',
        controls_on_map: false
    }).Load(); 

});