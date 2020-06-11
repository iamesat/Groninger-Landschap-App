<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <?php
    include ($_SERVER['DOCUMENT_ROOT']. "/Groninger-Landschap-App/include/head.php");

    $userIDs = $_SESSION['userID'];
    $id = $_SESSION['userID'];



    $users = $db->prepare("SELECT id, username, naam, achternaam, coins, current_route FROM users WHERE id = :id");
    $users->execute(array(':id' => $id));
    $user = $users->fetch();
    $current = $user[5];



    $routes = $db->prepare("SELECT userID, routename, routedescr, routeimage, cost, startpunt, eindpunt, kilom, routeID, links, rechts, progress, voltooid FROM mijnroutes WHERE userID = :ids AND routeID = :current");
    $routes->execute(array(':ids' => $userIDs, ':current' => $current ));
    // $routes->execute(array(':id' => $current_route));
    $route = $routes->fetch();

    $qrCodes = $db->prepare("SELECT qr_1_links, qr_1_rechts, qr_2_links, qr_2_rechts, qr_3_links, qr_3_rechts, qr_4_links, qr_4_rechts FROM qr_codes WHERE routeID = :current");
    $qrCodes->execute(array(':current' => $current ));
    $qrCode = $qrCodes->fetch();


    ?>

    <title>Route Volgen</title>
    <nav class="navbar navbar-top-route fixed-top">
              <div class="jumbotron route mt-3">
                <div class="row justify-content-between">
                  <div class="col-auto mr-auto">
                  <a href="" data-transition="slide" rel="external" data-toggle="modal" data-target="#MeldingenModal"><img src="assets/images/icons/bell.svg" class="jumbo-img-top" alt="..."></a>
                  </div>
                  <div class="col-auto">
                  <a href="shop" data-transition="slide" rel="external"><img src="assets/images/icons/winkel.svg" class="jumbo-img-top" alt="..."></a>
                  </div>
                </div>

              	<div class="row">
              		<div class="col-sm-3 col-md-2">
              			<div class="progress-1" data-percentage="<?php echo $route[11];?>">
              				<span class="progress-left">
              					<span class="progress-1-bar"></span>
              				</span>
              				<span class="progress-right">
              					<span class="progress-1-bar"></span>
              				</span>
              				<div class="progress-value">
              					<div>
              						<?php echo $route[11];?>%<br>
              					</div>
              				</div>
              			</div>

                <div class="row justify-content-between">
                  <div class="col-auto mr-auto"><?php echo $route[1]; ?></div>
                  <div class="col-auto">Wandelaar lvl 1</div>
                </div>
        </nav>
    <html>

    <head>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <!-- <link rel="stylesheet" type="text/css" href="master.css"> -->
    </head>

    <body>



        <div id="googleMap" style="width:100%;height:800px;margin-top:145px;"></div>

        <script>
            function detectBrowser() {
                var useragent = navigator.userAgent;
                var mapdiv = document.getElementById("map");

                if (useragent.indexOf('iPhone') != -1 || useragent.indexOf('Android') != -1) {
                    mapdiv.style.width = '100%';
                    mapdiv.style.height = '100%';
                } else {
                    mapdiv.style.width = '600px';
                    mapdiv.style.height = '800px';
                }
            }

            var myLatLng;
            var latit;
            var longit;

            function geoSuccess(position) {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;
                var directionsService = new google.maps.DirectionsService;
                var directionsDisplay = new google.maps.DirectionsRenderer;
                myLatLng = {
                    lat: latitude,
                    lng: longitude
                };

                var mapProp = {
                    //            center: new google.maps.LatLng(latitude, longitude), // puts your current location at the centre of the map,
                    zoom: 15,
                      streetViewControl: false,
                    mapTypeId: 'roadmap',
                    styles: [
    {
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape.natural",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#f5f5f2"
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "administrative",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi.attraction",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "poi.business",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi.medical",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi.place_of_worship",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi.school",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi.sports_complex",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "labels.icon",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "road.local",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "stylers": [
            {
                "color": "#71c8d4"
            }
        ]
    },
    {
        "featureType": "landscape",
        "stylers": [
            {
                "color": "#e5e8e7"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "stylers": [
            {
                "color": "#8ba129"
            }
        ]
    },
    {
        "featureType": "road",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "poi.sports_complex",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#c7c7c7"
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "stylers": [
            {
                "color": "#a0d3d3"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "stylers": [
            {
                "color": "#91b65d"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "stylers": [
            {
                "gamma": 1.51
            }
        ]
    },
    {
        "featureType": "road.local",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "poi.government",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.local",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road"
    },
    {
        "featureType": "road"
    },
    {},
    {
        "featureType": "road.highway"
    }
]

                };

                var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

                var directionsService = new google.maps.DirectionsService;
                var directionsDisplay = new google.maps.DirectionsRenderer;

                //call renderer to display directions
                directionsDisplay.setMap(map);

                var bounds = new google.maps.LatLngBounds();
                //        var mapOptions = {
                //            mapTypeId: 'roadmap'
                //        };

                // Multiple Markers
                var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    title: 'Mijn Locatie',
                    type: 'info'
                });
                var markers = [
                    ['3fe', "<?php Print($route[9]); ?>", "<?php Print($route[10]); ?>"],
                    ['qr1', "<?php Print($qrCode[0]); ?>", "<?php Print($qrCode[1]); ?>"],
                    ['qr2', "<?php Print($qrCode[2]); ?>", "<?php Print($qrCode[3]); ?>"],
                    ['qr3', "<?php Print($qrCode[4]); ?>", "<?php Print($qrCode[5]); ?>"],
                    ['qr4', "<?php Print($qrCode[6]); ?>", "<?php Print($qrCode[7]); ?>"],
                    ['my current location', latitude, longitude]
                ];

                // Info Window Content
                var infoWindowContent = [
                    ['<div class="info_content">' +
                        '<h3>Eindpunt</h3>' +
                        '<p>Dit is je waar je moet zijn, scan de QR-code om de wandeling af te ronden</p>' +
                        '<img src="assets/images/routes/<?php Print($route[3]); ?>" width="200" height="150">' +
                        '</div>'
                    ]
                ];

                // Display multiple markers on a map
                var infoWindow = new google.maps.InfoWindow(),
                    marker, i;

                // Loop through our array of markers & place each one on the map
                for (i = 0; i < markers.length; i++) {
                    var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                    bounds.extend(position);
                    marker = new google.maps.Marker({
                        position: position,
                        map: map,
                        title: markers[i][0],
                    });

                    // Allow each marker to have an info window
                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                        return function() {
                            infoWindow.setContent(infoWindowContent[i][0]);
                            infoWindow.open(map, marker);

                            latit = marker.getPosition().lat();
                            longit = marker.getPosition().lng();
                            // console.log("lat: " + latit);
                            // console.log("lng: " + longit);
                        }
                    })(marker, i));

                    marker.addListener('click', function() {
                        directionsService.route({
                            // origin: document.getElementById('start').value,
                            origin: myLatLng,

                            // destination: marker.getPosition(),
                            destination: {
                                lat: latit,
                                lng: longit
                            },
                            travelMode: 'WALKING'
                        }, function(response, status) {
                            if (status === 'OK') {
                                directionsDisplay.setDirections(response);
                            } else {
                                window.alert('Directions request failed due to ' + status);
                            }
                        });

                    });
                    // Automatically center the map fitting all markers on the screen
                    map.fitBounds(bounds);
                }
            }


            function geoError() {
                alert("Geocoder fout met laden.");
            }

            function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(geoSuccess, geoError);
                    // alert("Geolocation is supported by this browser.");
                } else {
                    alert("Locatie wordt nie ondersteund door je browser.");
                }
            }
        </script>

        <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCN6HxTWzlajkzwfx2nN8WLBVln-tlZdNs&callback=getLocation"></script>


      </div>
<div class="route-navbar fixed-bottom d-flex justify-content-center">
  <div class="container">
      <div class="row">
        <div class="col">
          <a class="linkje" href="home.php">
          <img src="assets/images/icons/camera.png" class="navbar-bottom-icons" alt="camera" />
        </a>
        </div>
        <div class="col">
          <a class="linkje" href="qr-scanner">
          <img src="assets/images/icons/qrcode.png" class="navbar-bottom-icons" alt="qr" />
        </a>
      </div>
</div>
</div>
</div>

      <nav class="navbar navbar-home fixed-bottom d-flex justify-content-center">
            <div class="navbar">
              <div class="container">
                  <div class="row row-cols-5">
                    <div class="col">
                      <a class="linkje" href="home.php">
                      <img src="assets/images/icons/home.svg" class="navbar-bottom-icons" alt="home" />
                      Home
                    </a>
                    </div>
                    <div class="col">
                      &nbsp;
                    </div>
                    <div class="col">
                      <a class="linkje" href="route">
                      <img src="assets/images/icons/gps.svg" class="navbar-bottom-icons" alt="route" />
                      Route
                    </a>
                    </div>
                    <div class="col">
                      &nbsp;
                    </div>
                    <div class="col">
                      <a class="linkje" href="#">
                      <img src="assets/images/icons/chatten.svg" class="navbar-bottom-icons" alt="chat" />
                      Chats
                    </a>
                    </div>
            </div>
            </div>
            </div>
          </nav>

    <div class="modal fade" id="MeldingenModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header modal-shop-header">
                  <h5 class="modal-title" id="exampleModalLabel">Meldingen</h5>
                  <button type="button" class="close close-shop" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>

            <div class="modal-body">
                <p>
                   <a href="fotowedstrijd" class="melding" data-transition="slide" rel="external">Je loopt nu in de buurt van het Iwema steenhuis, dat is een <a href="fotowedstrijd">fotowedstrijd!</a></a><br><br>
                   <a href="qr-scanner" class="melding" data-transition="slide" rel="external">Kijk goed op je kaart, kijk goed om je heen! Een <a href="qr-scanner">QR-code</a><a href="qr-scanner" class="melding" data-transition="slide" rel="external"> bevindt zich in jouw buurt!</a></a> <br><br>
                   <a href="foto-overzicht" class="melding" data-transition="slide" rel="external">Nog geen foto ingezonden voor de foto wedstrijd? <a href="foto-overzicht">Doe het snel</a><a href="foto-overzicht" class="melding" data-transition="slide" rel="external"> en verzamel zoveel mogelijk stemmen!</a></a> <br><br>
                   <a href="groep" class="melding" data-transition="slide" rel="external">Je bent uitgenodigd voor de groep: Ontbijtgranen en melk. Ga snel naar <a href="groep">groepen</a><a href="groep" class="melding" data-transition="slide" rel="external"> om de uitnodiging te bekijken!</a></a>
                </p>
            </div>

            <div class="modal-footer">
            <a href="" data-transition="slide" rel="external"><button type="button" class="btn btn-secondary btn-info-shop" data-dismiss="modal">Sluit meldingen</button></a>
            </div>
          </div>
      </div>
    </div>

    <?php include "include/scripts.php"; ?>
    </body>
    </html>

<!-- <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCN6HxTWzlajkzwfx2nN8WLBVln-tlZdNs&callback=initMap" defer></script> -->
