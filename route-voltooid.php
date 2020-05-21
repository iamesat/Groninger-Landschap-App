<!doctype html>
<html lang="en">
<?php include ($_SERVER['DOCUMENT_ROOT']. "/Groninger-Landschap-App/include/head.php"); ?>
<title>Route Voltooid</title>
    <?php include "include/top_navbar.php"; ?>
  <body>

  <div class="app-breaks">
      <div class="container">
    <div class="row justify-content-center">
   <div class="col routes-buttons">
    <a href="mijn-routes" class="stretched-link" data-transition="slide" rel="external"><button type="button" class="btn btn-outline-dark route-page-button">Mijn Routes</button></a>
   </div>
   <div class="col routes-buttons">
    <a href="route-unlocken" class="stretched-link" data-transition="slide" rel="external"><button type="button" class="btn btn-outline-dark route-page-button">Unlocken</button></a>
   </div>
   <div class="col routes-buttons">
    <a href="route-voltooid" class="stretched-link" data-transition="slide" rel="external"><button type="button" class="btn btn-outline-dark route-page-button active">Voltooid</button></a>
   </div>
 </div>
</div>


    <div class="container">
      <div class="row row-cols-1">
        <div class="col route-card">
          <div class="card">
            <div class="card-body">
              <div class="media">
                <a class="pull-left" href="#">
                  <img class="route-img" src="assets/images/map.png" alt="route afbeelding">
                </a>
                <div class="media-body">
                  <h6>Route Hoendiep</h6>
                  <p>Beschrijving over de speurtocht - 10 km</p>
                </div>
              </div>
              <div class="col">
                <div class="row row-cols-3 justify-content-center">
               <div class="col group-buttons">
               <p><img class="munt-image" src="assets/images/icons/hourglass.svg" alt="route afbeelding">&nbsp; Loop duur</p>
               </div>
               <div class="col group-buttons">
               <p><img class="munt-image" src="assets/images/icons/location-start.svg" alt="route afbeelding">&nbsp; Start</p>
               </div>
               <div class="col group-buttons">
              <p><img class="munt-image" src="assets/images/icons/coin.png" alt="route afbeelding"> &nbsp; +100 punten</p>
               </div>
             </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col route-card">
          <div class="card">
            <div class="card-body">
              <div class="media">
                <a class="pull-left" href="#">
                  <img class="route-img" src="assets/images/map.png" alt="route afbeelding">
                </a>
                <div class="media-body">
                  <h6>Route Hoendiep</h6>
                  <p>Beschrijving over de speurtocht - 10 km</p>
                </div>
              </div>
              <div class="col">
                <div class="row row-cols-3 justify-content-center">
               <div class="col group-buttons">
               <p><img class="munt-image" src="assets/images/icons/hourglass.svg" alt="route afbeelding">&nbsp; Loop duur</p>
               </div>
               <div class="col group-buttons">
                 <p><img class="munt-image" src="assets/images/icons/location-start.svg" alt="route afbeelding">&nbsp; Start</p>
               </div>
               <div class="col group-buttons">
              <p><img class="munt-image" src="assets/images/icons/coin.png" alt="route afbeelding"> &nbsp; +100 punten</p>
               </div>
             </div>
              </div>
            </div>
          </div>
        </div>



      </div>
    </div>
  </div>
    <?php include "include/bottom_navbar.php"; ?>
    <?php include "include/scripts.php"; ?>
  </body>
</html>
