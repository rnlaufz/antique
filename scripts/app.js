// Enable map
const getMap = document.getElementById('map');

function myMap() {
    let mapProps = {
        center: new google.maps.LatLng(51.508742, -0.120850),
        zoom: 12,
        scrollwheel: false,
        draggable: false
    };

    let map = new google.maps.Map(getMap, mapProps);
    let marker = new google.maps.Marker({
        position: new.google.maps.LatLng(51.508742, -0.120850)
    });
    
    marker.setMap(map);  
};

