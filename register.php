<!doctype html>
<html lang="en">
<?php include ($_SERVER['DOCUMENT_ROOT']. "/Groninger-Landschap-App/include/head.php"); ?>
<title>Mijn Routes</title>
  <body>

    <div class="container inloggen">
    <h3>Aanmelden</h3>
    </div>

    <div class="container">
      <div class="row row-cols-1">
        <div class="col login-card">
          <div class="card shadow">
            <div class="card-body">
              <form method="post" action="functions/functions.php" name="register">
                <div class="input-group mb-3">
                <input type="text" class="form-control input-veldje right" placeholder="Naam" name="naam" required>
                <input type="text" class="form-control input-veldje left" placeholder="Achternaam" name="achternaam" required>
              </div>
              <div class="input-group mb-3">
              <input type="text" class="form-control input-veldje" placeholder="Gebruikersnaam" name="username" required>
            </div>
            <div class="input-group mb-3">
            <input type="email" class="form-control input-veldje" placeholder="Email" name="email" required>
          </div>
            <div class="input-group mb-3">
            <input type="password" class="form-control input-veldje" placeholder="Wachtwoord" name="password" required>
          </div>

          <div class="form-check float-left">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Ik ga akkoord met de algemene
        voorwaarden</label>
          </div>
  <br><br><br>

              <button type="submit" value="Aanmelden" name="register" class="btn inlog-button btn-lg btn-block">Aanmelden</button>
        </form>
          <div class="col login-bottom-text">
            <p><a href="#">Wachtwoord vergeten?</a></p>
            <p>Nog geen account?<a href="#"> Aanmelden</a></p>
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
