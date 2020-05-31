<!doctype html>
<html lang="en">
<?php
      include ($_SERVER['DOCUMENT_ROOT']. "/Groninger-Landschap-App/include/head.php");
      if (empty($_GET)) {
            header('Location: route-unlocken');
        } else {
            $routeID = $_GET['id'];
        }

        $id = $_SESSION['userID'];
        $routes = $db->prepare("SELECT id, routename, routedescr, routeimage, cost, startpunt, kilom FROM routes WHERE id = :id");
        $routes->execute(array(':id' => $routeID));
        $route = $routes->fetch();

 ?>
<title>Bekijk route</title>
    <?php include "include/top_navbar.php"; ?>
  <body>


    <div class="container my-4">
        <div class="row row-cols-1">
            <div class="col route-card">
                 <div class="card">
                    <div class="col pt-4">
                        <h6 class="mx-2"><?php echo ucfirst($route[1]); ?></h6>
                        <p class="mx-2"><img class="munt-image" src="assets/images/icons/location-start.svg" alt="route afbeelding">&nbsp; Start</p>

                        <div class="row row-cols-3 justify-content-center">
                            <div class="col group-buttons">
                                <p>14:00 - 15:30</p>
                            </div>
                            <div class="col group-buttons">
                                <p> Afstand: <?php echo ucfirst($route[6]); ?>km</p>
                            </div>
                            <div class="col group-buttons">
                                <p>1.5 uur</p>
                            </div>
                        </div>

                        <a class="pull-left" href="#">
                            <img class="unlock-img" src="assets/images/unlock.png" alt="route afbeelding">
                        </a>
                    <div class="my-4 mx-2">
                        <p>Route kosten:  <img class="munt-image" src="assets/images/icons/coin.png" alt="route afbeelding"> &nbsp; <?php echo ucfirst($route[4]); ?>&nbsp;punten</p>
                        <p>Te verdienen:  <img class="munt-image" src="assets/images/icons/coin.png" alt="route afbeelding"> &nbsp; 100 punten</p>
                    </div>

                    <div class="row my-4">
                        <div class="col">
                        <a href="route-unlocken" class="stretched-link" data-transition="slide" rel="external"><button type="button" class="btn btn-group blue" style="font-size:14px">Terug</button></a>
                        </div>
                        <div class="col">
                          <form id="add-route" method="post" action="functions/functions.php" class="add-route" name="add-route">
                          <input type="hidden" name="routeID" value="<?php echo $routeID; ?>">
                          <input type="hidden" name="userID" value="<?php echo $id; ?>">
                          <input type="submit" name="add-route" value="Unlocken" class="btn btn-group blue">

                        <!-- <a href="" class="stretched-link pl-4" data-transition="slide" rel="external" data-toggle="modal" data-target="#unlock-modal"><button type="button" class="btn btn-group blue" style="font-size:14px">Unlocken</button></a> -->
                          </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="unlock-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-shop-header">
                <h5 class="modal-title" id="exampleModalLabel">Route unlocken</h5>
                <button type="button" class="close close-shop" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                Gelukt je hebt de Route:<br>
                <br>
                "Route Hoenddiep"<br>
                <br>
                met succes ontgrendeld.<br> Je hebt nu nog  <img class="munt-image" src="assets/images/icons/coin.png" alt="route afbeelding"> &nbsp; 20 over

                </p>
            </div>
            <div class="modal-footer">
            <a href="route" class="stretched-link" data-transition="slide" rel="external"><button type="button" class="btn btn-secondary btn-info-shop" data-dismiss="modal">Naar Route</button></a>
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
