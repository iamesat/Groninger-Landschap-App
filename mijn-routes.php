<!doctype html>
<html lang="en">
<?php include ($_SERVER['DOCUMENT_ROOT']. "/Groninger-Landschap-App/include/head.php"); ?>
<title>Mijn Routes</title>
    <?php include "include/top_navbar.php"; ?>
  <body>
<div class="container">
    <div class="row justify-content-center">
   <div class="col routes-buttons">
  <button type="button" class="btn btn-outline-dark route-page-button active">Mijn Routes</button>
   </div>
   <div class="col routes-buttons">
  <button type="button" class="btn btn-outline-dark route-page-button">Unlocken</button>
   </div>
   <div class="col routes-buttons">
  <button type="button" class="btn btn-outline-dark route-page-button">Voltooid</button>
   </div>
 </div>
</div>

    <div class="container">
      <div class="row row-cols-1">
        <div class="col card-button">
          <div class="card">
            <div class="card-body">
              <img src="assets/images/home-icons/track.png" class="card-img-top" alt="...">
              <h5 class="card-title">Routes</h5>
            </div>
          </div>
        </div>
        <div class="col card-button">
          <div class="card">
            <div class="card-body">
              <img src="assets/images/home-icons/podium.png" class="card-img-top" alt="...">
              <h5 class="card-title">Mijn score</h5>
            </div>
          </div>
        </div>
        <div class="col card-button">
          <div class="card">
            <div class="card-body">
              <img src="assets/images/home-icons/team.png" class="card-img-top" alt="...">
              <h5 class="card-title">Groepen</h5>
            </div>
          </div>
        </div>
        <div class="col card-button">
          <div class="card">
            <div class="card-body">
              <img src="assets/images/home-icons/gallery.png" class="card-img-top" alt="...">
              <h5 class="card-title">Fotorollen</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include "include/bottom_navbar.php"; ?>
    <?php include "include/scripts.php"; ?>
  </body>
</html>
