var map;

function initMap() {

    var utsjr = {
        lat: 20.367393,
        lng: -100.010187
    };

    map = new google.maps.Map(document.getElementById("map"), {
        center: utsjr,
        zoom: 8

    });

    var marker = new google.maps.Marker({
        position: utsjr,
        map: map,
        title: "Universidad Tecnológica SJR",
        icon: 'assets/images/icons/gps.png'

    });

    var marker = new google.maps.Marker({
        position: pos,
        map: map,
        icon: 'assets/images/icons/gps.png'

    });

    infoWindow = new google.maps.InfoWindow({
        content: `'<h1>Universidad</h1><br><p>Dirección: Av. La Palma #125, Vista Hermosa</p>
        <br>
        <img src="assets/images/ut.jpg" width="100px">
        <br>
        <p><a href="http://www.utsjr.edu.mx">Página Web</a></p>'`

    });

    google.maps.event.addListener(marker, 'click', function() {

        infoWindow.open(map, marker);
    });
}