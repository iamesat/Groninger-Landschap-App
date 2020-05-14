<!doctype html>
<html lang="en">
<?php include ($_SERVER['DOCUMENT_ROOT']. "/Groninger-Landschap-App/include/head.php"); ?>
<title>Mijn Routes</title>
  <body>

    <div class="container inloggen">
    <h3>Inloggen</h3>
    </div>

    <div class="container">
      <div class="row row-cols-1">
        <div class="col login-card">
          <div class="card shadow">
            <div class="card-body">
              <form action="functions/login" method="POST">
              <div class="input-group mb-3">
              <input type="text" class="form-control input-veldje" placeholder="Gebruikersnaam" aria-label="Username" aria-describedby="basic-addon1" name="username" required>
            </div>
            <div class="input-group mb-3">
            <input type="password" class="form-control input-veldje" placeholder="Wachtwoord" aria-label="Password" aria-describedby="basic-addon1" name="password" required>
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
