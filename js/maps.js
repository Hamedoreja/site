
function initMap() {
    var pos = {lat: 50.619003, lng: 26.258884};
    var opt = {
        center: pos,
        zoom: 15,
    };
    var myMap = new google.maps.Map(document.getElementById('map'),opt);

    var marker = new google.maps.Marker({
        position: pos,
        map: myMap,
    });
}


