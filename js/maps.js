var map;
function myMap() {
    var mapProp= {
        center:new google.maps.LatLng(56.917919,24.104070),
        zoom:7,
        mapTypeId: google.maps.MapTypeId.HYBRID
    };
    map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}

function gotoLatLng($lat, $lng, $zoom = 8) {
    map.panTo(new google.maps.LatLng($lat, $lng, $zoom));
    map.setZoom($zoom);
}
myMap();