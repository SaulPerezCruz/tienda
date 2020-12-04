var map, infoWindow, marker;

let mapa;
let service;
let info;


var utsjr = {
    lat: 20.367393,
    lng: -100.010187
};

function initMap() {
    const map = new google.maps.Map(document.getElementById('map'), {
        center: utsjr,
        zoom: 18
    });

    infoWindow = new google.maps.InfoWindow;

    //coordenadas HTML5 a través del navegador
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude


            };

            var marker = new google.maps.Marker({
                position: pos,
                map: map,
                title: 'Esta es mi ubicación',
                icon: 'assets/images/icons/gps.png'

            });

            //infoWindow.setPosition(pos);
            infoWindow.setContent('Aquí te encuentras');
            //infoWindow.open(map);

            map.setCenter(pos);

            google.maps.event.addListener(marker, 'click', function() {
                infoWindow.open(map, marker);
            });
        }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
        });
    } else {
        handleLocationError(false, infoWindow, map.getCenter());
    }

    const geocoder = new google.maps.Geocoder();

    document.getElementById('submit').addEventListener('click', () => {
        geocodeAddress(geocoder, map);
    });

    document.getElementById('enviar').addEventListener('click', () => {
        buscarDireccion();
    });

} //end initMap

//esta función recibe dos parámetros(param1, param2) 
function geocodeAddress(geocoder, resultsMap) {
    const address = document.getElementById('address').value;

    geocoder.geocode({
            address: address
        },

        (results, status) => {
            if (status === "OK") {
                resultsMap.setCenter(results[0].geometry.location);

                new google.maps.Marker({
                    map: resultsMap,
                    position: results[0].geometry.location,
                    icon: 'assets/images/icons/gps.png'
                });


            } else {
                alert("La Geocodificación no fue exitosa por la siguiente razón: " + status);
            }
        });

} //end geocodeAdress

function buscarDireccion() {
    const mexico = new google.maps.LatLng(35.658743, 139.745426);

    info = new google.maps.InfoWindow();

    map = new google.maps.Map(document.getElementById('map'), {
        center: mexico,
        zoom: 15
    });

    const request = {
        query: document.getElementById('nombre').value,
        fields: ["name", "geometry"]
    };

    service = new google.maps.places.PlacesService(map);

    service.findPlaceFromQuery(request, (results, status) => {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
            for (let i = 0; i < results.length; i++) {
                createMarker(results[i]);
            }

            map.setCenter(results[0].geometry.location);
        }
    });
}

function createMarker(place) {
    const marker = new google.maps.Marker({
        map,
        position: place.geometry.location,
        icon: 'assets/images/icons/gps.png'
    });

    google.maps.event.addListener(marker, "click", () => {
        info.setContent(place.name);
        info.open(map, marker);
    });
}