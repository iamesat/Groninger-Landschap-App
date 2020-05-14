<!doctype html>
<html lang="en">

<?php
  include('include/db-connect.php');
  ?>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/878232b268.js" crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="css/niek.css" rel="stylesheet">
    <link href="css/evaap.css" rel="stylesheet">
    <link href="css/eline.css" rel="stylesheet">
    <link href="css/annie.css" rel="stylesheet">
  </head>
<title>Inloggen</title>
  <body>

    <div class="container inloggen">
    <h3>Inloggen</h3>
    </div>

    <div class="container">
      <div class="row row-cols-1">
        <div class="col login-card">
          <div class="card shadow">
            <div class="card-body">
              <form action="functions/login.php" method="POST">
              <div class="input-group mb-3">
              <input type="text" class="form-control input-veldje" placeholder="Gebruikersnaam" name="username" required>
            </div>
            <div class="input-group mb-3">
            <input type="password" class="form-control input-veldje" placeholder="Wachtwoord" name="password" required>
          </div>

              <input type="submit" value="Inloggen" name="login" class="btn inlog-button btn-lg btn-block" />
        </form>
          <div class="col login-bottom-text">
            <p><a href="#">Wachtwoord vergeten?</a></p>
            <p>Nog geen account?<a href="register"> Aanmelden</a></p>
            <p><a href="#">Algemene voorwaarden</a></p>
          </div>


      </div>
    </div>
    <br>
    <div class="col login-image">
      <img class="" src="assets/images/login_image.png" alt="route afbeelding">
    </div>
  </div>
</div>
</div>
    <?php include "include/scripts.php"; ?>
  </body>
</html>
