<!doctype html>
<html lang="en">
<?php include ($_SERVER['DOCUMENT_ROOT']. "/Groninger-Landschap-App/include/head.php");

	$username = $_SESSION['login'];
	$id = $_SESSION['userID'];
	$page = $_SERVER['REQUEST_URI'];

  $users = $db->prepare("SELECT id, username, naam, achternaam FROM users WHERE id = :id");
  $users->execute(array(':id' => $id));
  $user = $users->fetch();
  ?>

  

  <body>
    <div class="container">
      <div class="jumbotron homepage mt-3">
        <div class="container">
        <div class="row justify-content-md-center">
          <div class="col">
              <i class="fa fa-bell jumbo-icons"></i>
          </div>
          <div class="col">
          </div>
          <div class="col icons-right-align">
            <a href="shop.php" class="stretched-link" data-transition="slide" rel="external"><i class="fa fa-shopping-cart jumbo-icons"></i></a>
          </div>
        </div>
      </div>
        <div class="row justify-content-between">
          <div class="col-4">
          </div>
          <div class="item">
        		<a href="instellingen.php">
      			<span class="notify-badge"><i class="fa fa-cog jumbo-icons"></i></span>
              <img src="assets/images/profile-picture.png" class="profile-picture" alt="...">
        		</a>
        	</div>
          <div class="col-4">
          </div>
        </div>
        <div class="row justify-content-between">
          <div class="col">
          </div>
					<div class="col">
						  <b><?php echo ucfirst($user[2]); ?>&nbsp;<?php echo ucfirst($user[3]); ?></b>
					</div>

          <div class="col">
          </div>
        </div>
        <div class="row justify-content-between">
          <div class="col-4">
          </div>

          Beschermer
          <div class="col-4">
          </div>
        </div>

        <div class="row justify-content-md-center">
          <div class="col">
            <b>LVL 2</b>
          </div>
          <div class="col-6">
          </div>
          <div class="col">
            <b>LVL 3</b>
          </div>
        </div>
        <div class="progress progress-home">
          <div class="progress-bar progress-bar-home" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100 punten</div>
        </div>
        <br>
        <div class="row justify-content-between">
          <div class="col-2">
          </div>

          <a href="route.php" type="button" class="btn btn-outline-light speur-button">&nbsp;Doorgaan speurtocht&nbsp;</a>
          <div class="col-2">
          </div>
        </div>
        <br>
      </div>
    </div>

    <div class="container home">
      <div class="row row-cols-2">
        <div class="col card-button left">
          <div class="card">
            <div class="card-body">
              <a href="mijn-routes.php" class="stretched-link" data-transition="slide" rel="external"><img src="assets/images/home-icons/track.png" class="card-img-top" alt="..."></a>
              <h5 class="card-title">Routes</h5>
            </div>
          </div>
        </div>
        <div class="col card-button right">
          <div class="card">
            <div class="card-body">
            <a href="mijn-score.php" class="stretched-link" data-transition="slide" rel="external"><img src="assets/images/home-icons/podium.png" class="card-img-top" alt="..."></a>
              <h5 class="card-title">Mijn score</h5>
            </div>
          </div>
        </div>
        <div class="col card-button left">
          <div class="card">
            <div class="card-body">
              <a href="groep.php" class="stretched-link" data-transition="slide" rel="external"><img src="assets/images/home-icons/team.png" class="card-img-top" alt="..."></a>
              <h5 class="card-title">Groepen</h5>
            </div>
          </div>
        </div>
        <div class="col card-button right">
          <div class="card">
            <div class="card-body">
              <a href="fotorollen.php" class="stretched-link" data-transition="slide" rel="external"><img src="assets/images/home-icons/gallery.png" class="card-img-top" alt="..."></a>
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
