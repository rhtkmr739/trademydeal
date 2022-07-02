function singleMap() {
    var markerIcon = {
        url: '../theme/images/marker2.png',
    }

    var myLatLng = {
        lng: parseFloat($('#long').val()),
        lat: parseFloat($('#lat').val()),
    };
    console.log(myLatLng,'myLatLng');
    var single_map = new google.maps.Map(document.getElementById('singleMap'), {
        zoom: 14,
        center: myLatLng,
        scrollwheel: false,
        zoomControl: false,
        fullscreenControl: true,
        mapTypeControl: false,
        scaleControl: false,
        panControl: false,
        navigationControl: false,
        streetViewControl: true,
        styles: [{
            "featureType": "landscape",
            "elementType": "all",
            "stylers": [{
                "color": "#f2f2f2"
            }]
        }]
    });
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: single_map,
        icon: markerIcon,
		draggable: true,
        title: 'Your location'
    });
               google.maps.event.addListener(marker, 'dragend', function (event) {
                  document.getElementById("lat").value = event.latLng.lat();
                  document.getElementById("long").value = event.latLng.lng();
              });	
    var zoomControlDiv = document.createElement('div');
    var zoomControl = new ZoomControl(zoomControlDiv, single_map);
    function ZoomControl(controlDiv, single_map) {
        zoomControlDiv.index = 1;
        single_map.controls[google.maps.ControlPosition.RIGHT_CENTER].push(zoomControlDiv);
        controlDiv.style.padding = '5px';
        var controlWrapper = document.createElement('div');
        controlDiv.appendChild(controlWrapper);
        var zoomInButton = document.createElement('div');
        zoomInButton.className = "mapzoom-in";
        controlWrapper.appendChild(zoomInButton);
        var zoomOutButton = document.createElement('div');
        zoomOutButton.className = "mapzoom-out";
        controlWrapper.appendChild(zoomOutButton);
        google.maps.event.addDomListener(zoomInButton, 'click', function () {
            single_map.setZoom(single_map.getZoom() + 1);
        });
        google.maps.event.addDomListener(zoomOutButton, 'click', function () {
            single_map.setZoom(single_map.getZoom() - 1);
        });
    }
 
}
var head = document.getElementsByTagName( 'head' )[0];

// Save the original method
var insertBefore = head.insertBefore;

// Replace it!
head.insertBefore = function( newElement, referenceElement ) {

    if ( newElement.href && newElement.href.indexOf( 'https://fonts.googleapis.com/css?family=Roboto' ) === 0 ) {
        return;
    }

    insertBefore.call( head, newElement, referenceElement );
};

if(navigator.geolocation){
    navigator.geolocation.getCurrentPosition(function (position) {
        $('#singleMap').attr('data-longitude',position.coords.latitude);
        $('#singleMap').attr('data-latitude',position.coords.longitude);

        $('#lat').val(position.coords.latitude);
        $('#long').val(position.coords.longitude);
    });
}

var single_map = document.getElementById('singleMap');
if (typeof (single_map) != 'undefined' && single_map != null) {
    google.maps.event.addDomListener(window, 'load', singleMap);
}