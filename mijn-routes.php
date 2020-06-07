<!doctype html>
<html lang="en">
<?php
include ($_SERVER['DOCUMENT_ROOT']. "/Groninger-Landschap-App/include/head.php");
$username = $_SESSION['login'];
$userID = $_SESSION['userID'];
$id = $_SESSION['userID'];

$users = $db->prepare("SELECT id, username, naam, achternaam, coins FROM users WHERE id = :id");
$users->execute(array(':id' => $id));
$user = $users->fetch();

$routes = $db->prepare("SELECT userID, routename, routedescr, routeimage, cost, startpunt, eindpunt, kilom, routeID, voltooid FROM mijnroutes WHERE userID = :id AND voltooid = 0");
$routes->execute(array(':id' => $userID));

?>

<title>Route Unlocken</title>
  <body>

  <?php include "include/top_navbar.php"; ?>

    <div class="app-breaks">
      <div class="container">
    <div class="row justify-content-center">
   <div class="col routes-buttons">
    <a href="mijn-routes" class="stretched-link" data-transition="slide" rel="external"><button type="button" class="btn btn-outline-dark route-page-button active">Mijn Routes</button></a>
   </div>
   <div class="col routes-buttons">
    <a href="route-unlocken" class="stretched-link" data-transition="slide" rel="external"><button type="button" class="btn btn-outline-dark route-page-button ">Unlocken</button></a>
   </div>
   <div class="col routes-buttons">
    <a href="route-voltooid" class="stretched-link" data-transition="slide" rel="external"><button type="button" class="btn btn-outline-dark route-page-button">Voltooid</button></a>
   </div>
 </div>
</div>

    <div class="container">
      <div class="row row-cols-1">

        <?php foreach($routes as $route): ?>
        <div class="col route-card">
          <div class="card">
            <div class="card-body">
              <div class="media">
                <a class="pull-left" href="#">
                  <img class="route-img" src="assets/images/routes/<?php echo $route[3]; ?>" alt="route afbeelding">
                </a>
                <div class="media-body">
                  <h6><?php echo ucfirst($route[1]); ?></h6>
                  <p><?php echo ucfirst($route[2]); ?></p>
                </div>
              </div>
              <div class="col">
                <div class="row row-cols-3 justify-content-center">
               <div class="col group-buttons">
                 <p><b>Actieve groepen</b></p>
               </div>
               <div class="col group-buttons">
               <p><img class="munt-image" src="assets/images/icons/hourglass.svg" alt="route afbeelding">&nbsp; <?php echo ucfirst($route[7]);?>&nbsp;km</p>
               </div>
               <div class="col group-buttons">
               <p><img class="munt-image" src="assets/images/icons/location-start.svg" alt="route afbeelding">&nbsp; <?php echo ucfirst($route[5]);?></p>
               </div>
             </div>
              </div>
              <div class="col">
                <div class="row row-cols-3 justify-content-center">
               <div class="col group-buttons">
              <button type="button" class="btn btn-group">OBS Hanze</button>
               </div>
               <div class="col group-buttons">
              <button type="button" class="btn btn-group">Stinkies</button>
               </div>
               <div class="col group-buttons">
              <button type="button" class="btn btn-group">Meer...</button>
               </div>
             </div>
              </div>
              <div class="col">
                <div class="row row-cols-3 justify-content-center">
               <div class="col group-buttons">
              <p><img class="munt-image" src="assets/images/icons/coin.png" alt="route afbeelding"> &nbsp;+<?php echo $route[4]; ?> punten</p>
               </div>
               <div class="col group-buttons">
               </div>
               <div class="col group-buttons">

              <form id="update-route"" method="post" action="functions/functions.php" class="update-route" name="update-route"">
              <input type="hidden" name="current_route" value="<?php echo $route[8]; ?>">
              <input type="hidden" name="userID" value="<?php echo $userID; ?>">
              <input type="submit" name="update-route" value="Wandelen" class="btn btn-group blue">
              </form>

               </div>
             </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

      </div>
    </div>
  </div>
    <?php include "include/bottom_navbar.php"; ?>
    <?php include "include/scripts.php"; ?>
  </body>
</html>
