<!DOCTYPE html>
<html lang="en">
<?php include ($_SERVER['DOCUMENT_ROOT']. "/Groninger-Landschap-App/include/head.php"); ?>
<?php include "include/top_navbar.php"; ?>
<title>Fotorollen</title>
<body>
    <br><br><br><br>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-fotorollen-title">Aantal fotorollen</h5>
                    <h2 class="fotorollen-nummer">3</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-body text-center">
                    <p>Mijn recente foto's</p>
                    <div class="row justify-content-center">
                    <a href="foto-overzicht.php" data-transition="slide" rel="external"><img src="assets/images/fotorollen/molen.png" class="recente-foto" alt="..."></a>
                    <a href="foto-overzicht.php" data-transition="slide" rel="external"><img src="assets/images/fotorollen/huis.png" class="recente-foto" alt="..."></a>
                    </div>
                    <div class="row justify-content-center">
                    <a href="foto-overzicht.php"  data-transition="slide" rel="external"><img src="assets/images/fotorollen/beekje.png" class="recente-foto" alt="..."></a>
                    <a href="foto-overzicht.php" data-transition="slide" rel="external"><img src="assets/images/fotorollen/huis2.png" class="recente-foto" alt="..."></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-body text-center">
                    <a href="foto-overzicht.php" data-transition="slide" rel="external"><button type="button" class="btn btn-outline-dark fotorollen-page-buttons">Foto overzicht</button></a><br>
                    <a href="fotowedstrijd.php" data-transition="slide" rel="external"><button type="button" class="btn btn-outline-dark fotorollen-page-buttons">Fotowedstrijd</button></a>
                    <a href="shop.php" data-transition="slide" rel="external"><button type="button" class="btn btn-outline-dark fotorollen-page-buttons">Nieuwe fotorollen aanschaffen</button></a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "include/bottom_navbar.php"; ?>
<?php include "include/scripts.php"; ?>
</body>
</html>
