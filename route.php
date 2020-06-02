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



    $routes = $db->prepare("SELECT userID, routename, routedescr, routeimage, cost, startpunt, eindpunt, kilom, routeID FROM mijnroutes WHERE userID = :ids AND routeID = :current");
    $routes->execute(array(':ids' => $userIDs, ':current' => $current ));
    // $routes->execute(array(':id' => $current_route));
    $route = $routes->fetch();

    ?>

    <title>Route Volgen</title>
    <nav class="navbar navbar-top-route fixed-top">
              <div class="jumbotron route mt-3">
                <div class="row justify-content-between">
                  <div class="col-auto mr-auto">
                    <i class="fa fa-bell jumbo-icons"></i>
                  </div>
                  <div class="col-auto">
                    <i class="fa fa-shopping-cart jumbo-icons"></i>
                  </div>
                </div>

              	<div class="row">
              		<div class="col-sm-3 col-md-2">
              			<div class="progress-1" data-percentage="20">
              				<span class="progress-left">
              					<span class="progress-1-bar"></span>
              				</span>
              				<span class="progress-right">
              					<span class="progress-1-bar"></span>
              				</span>
              				<div class="progress-value">
              					<div>
              						20%<br>
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
                    title: 'My location'
                });
                var markers = [
                    ['3fe', 53.23425659331499, 6.490932454710916],
                    ['my current location', latitude, longitude]
                ];

                // Info Window Content
                var infoWindowContent = [
                    ['<div class="info_content">' +
                        '<h3>Eindpunt</h3>' +
                        '<p>Dit is je eindpunt waar je moet zijn</p>' +
                        '<img src="images/3fe.jpg" width="200" height="200">' +
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
                        title: markers[i][0]
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

            // function calculateAndDisplayRoute(directionsService, directionsDisplay) {
            //     directionsService.route({
            //         // origin: document.getElementById('start').value,
            //         origin: myLatLng,
            //         destination: marker.getPosition(),
            //         travelMode: 'DRIVING'
            //     }, function(response, status) {
            //         if (status === 'OK') {
            //             console.log('all good');
            //             directionsDisplay.setDirections(response);
            //         } else {
            //             window.alert('Directions request failed due to ' + status);
            //         }
            //     });
            // }

            function geoError() {
                alert("Geocoder failed.");
            }

            function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(geoSuccess, geoError);
                    // alert("Geolocation is supported by this browser.");
                } else {
                    alert("Geolocation is not supported by this browser.");
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
          <a class="linkje" href="route">
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
    </body>
    </html>

<!-- <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCN6HxTWzlajkzwfx2nN8WLBVln-tlZdNs&callback=initMap" defer></script> -->
