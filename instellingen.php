<!doctype html>
<html lang="en">
<?php include ($_SERVER['DOCUMENT_ROOT']. "/Groninger-Landschap-App/include/head.php"); ?>
<title>Instellingen</title>
<?php include "include/top_navbar.php"; ?>
  <body>
        <div class="containter">
        <div class="row justify-content-center">
            <div class="card scoreborder img-setting">
                <div class="cardbody text-center">
                    <img src="assets/images/profile-picture.png" class="profile-picture setting-picture mt-4" alt="...">
                    <h6 class="mb-4"><b>Kies een profielfoto</b></h6>
                </div>
            </div>
            <div class="card scoreborder img-setting my-3">
                <div class="cardbody">
                    <h6 class="pt-4 pb-2 pl-4"><b>Instantie wijzigen</b></h6>
                    <button class="btn dropdown-toggle ml-2 mb-4" type="button" id="instellingendropdown dropdownkleur" style="font-size: 14px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Groninger Landschap
                    </button>
                    <div class="dropdown-menu scoreborder" aria-labelledby="instellingendropdown">
                        <a class="dropdown-item dropdown-item-size" href="#">Staro Natuur en Buitengebied</a>
                        <a class="dropdown-item dropdown-item-size" href="#">Stichting IJssellandschap</a>
                        <a class="dropdown-item dropdown-item-size" href="#">GroenFront</a>
                    </div>
                </div>
            </div>
            <div class="card scoreborder img-setting">
                <div class="cardbody text-center">
                <div class="input-group input-group-sm my-4">
                    <input type="text" class="form-control" placeholder="••••••••••••••••" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                </div>
            </div>
            <div class="card scoreborder img-setting my-3">
                <div class="cardbody text-center">
                <div class="input-group input-group-sm my-4">
                    <input type="text" class="form-control" placeholder="meesvenema@info.com" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                </div>
            </div>
            <div class="card scoreborder img-setting">
                <div class="cardbody">
                    <h6 class="pt-4 pb-2 pl-4 notifi-setting"><b>Notificaties</b></h6>
                    <div class="switch-field pl-4 py-2">
                        <input type="radio" id="radio-one" name="switch-one" value="Iedereen" checked/>
                        <label for="radio-one" style="font-size: 14px;">Aan</label>
                        <input type="radio" id="radio-two" name="switch-one" value="Niemand" />
                        <label for="radio-two" style="font-size: 14px;">Uit</label>
                    </div>
                </div>
            </div>
            <div class="row text-center mt-3">
                <div class="col">
                    <a href="index" class="stretched-link" data-transition="slide" rel="external"><button type="button" style="font-size: 14px;" class="btn btn-group">Uitloggen</button></a>
                </div>
                <div class="col">
                    <a href="instellingen" class="stretched-link" data-transition="slide" rel="external"><button type="button" style="font-size: 14px;" class="btn btn-group blue">Opslaan</button></a>
                </div>
            </div>
        </div>
    </div>
  </body>
      <?php include "include/bottom_navbar.php"; ?>
      <?php include "include/scripts.php"; ?>
</html>
