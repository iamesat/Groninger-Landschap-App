<!DOCTYPE html>
<html lang="en">
<?php include ($_SERVER['DOCUMENT_ROOT']. "/Groninger-Landschap-App/include/head.php"); ?>
<?php include "include/top_navbar.php"; ?>
<title>Foto overzicht</title>
<body>

<div class="container text-center my-3">
    <div class="row justify-content-center">
        <div class="col fotopage-buttons">
            <a href="foto-overzicht.php" class="stretched-link" data-transition="slide" rel="external"><button type="button" class="btn btn-outline-dark foto-page-button active">Mijn foto's</button></a>
        </div>
   
        <div class="col foto-buttons">
            <a href="groepen-foto-overzicht.php" class="stretched-link" data-transition="slide" rel="external"><button type="button" class="btn btn-outline-dark foto-page-button">Mijn groepen foto's</button></a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-body text-center">
                    <div class="row justify-content-center">
                    <a href="" data-transition="slide" rel="external" data-toggle="modal" data-target="#UpgradeModal"><img src="assets/images/fotorollen/molen.png" class="recente-foto" alt="..."></a>
                    <a href="" data-transition="slide" rel="external" data-toggle="modal" data-target="#UpgradeModal"><img src="assets/images/fotorollen/huis.png" class="recente-foto" alt="..."></a>
                    </div>
                    <div class="row justify-content-center">
                    <a href=""  data-transition="slide" rel="external" data-toggle="modal" data-target="#UpgradeModal"><img src="assets/images/fotorollen/beekje.png" class="recente-foto" alt="..."></a>
                    <a href="" data-transition="slide" rel="external" data-toggle="modal" data-target="#UpgradeModal"><img src="assets/images/fotorollen/huis2.png" class="recente-foto" alt="..."></a>
                    </div>
                    <div class="row justify-content-center">
                    <a href="" data-transition="slide" rel="external" data-toggle="modal" data-target="#UpgradeModal"><img src="assets/images/fotorollen/molen.png" class="recente-foto" alt="..."></a>
                    <a href="" data-transition="slide" rel="external" data-toggle="modal" data-target="#UpgradeModal"><img src="assets/images/fotorollen/huis.png" class="recente-foto" alt="..."></a>
                    </div>
                    <div class="row justify-content-center">
                    <a href=""  data-transition="slide" rel="external" data-toggle="modal" data-target="#UpgradeModal"><img src="assets/images/fotorollen/beekje.png" class="recente-foto" alt="..."></a>
                    <a href="" data-transition="slide" rel="external" data-toggle="modal" data-target="#UpgradeModal"><img src="assets/images/fotorollen/huis2.png" class="recente-foto" alt="..."></a>
                    </div>
                    <div class="row justify-content-center">
                    <a href="" data-transition="slide" rel="external" data-toggle="modal" data-target="#UpgradeModal"><img src="assets/images/fotorollen/molen.png" class="recente-foto" alt="..."></a>
                    <a href="" data-transition="slide" rel="external" data-toggle="modal" data-target="#UpgradeModal"><img src="assets/images/fotorollen/huis.png" class="recente-foto" alt="..."></a>
                    </div>
                    <div class="row justify-content-center">
                    <a href=""  data-transition="slide" rel="external" data-toggle="modal" data-target="#UpgradeModal"><img src="assets/images/fotorollen/beekje.png" class="recente-foto" alt="..."></a>
                    <a href="" data-transition="slide" rel="external" data-toggle="modal" data-target="#UpgradeModal"><img src="assets/images/fotorollen/huis2.png" class="recente-foto" alt="..."></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="UpgradeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-shop-header">
                <h5 class="modal-title" id="exampleModalLabel">Deze foto uploaden?</h5>
                <button type="button" class="close close-shop" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Locatie: Route 1 <br><br>
                    Wil je deze foto inzenden voor de fotowedstrijd? <br><br>
                    Klik dan op 'JA'. Wil je er nog over nadenken? Klik dan op 'NEE'.
                </p>
                <img src="assets/images/fotorollen/beekje.png">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-info-shop" data-dismiss="modal">JA</button>
                <button type="button" class="btn btn-secondary btn-info-shop" data-dismiss="modal">NEE</button>
            </div>
        </div>
    </div>
</div>
<br><br><br><br>
<?php include "include/bottom_navbar.php"; ?>
<?php include "include/scripts.php"; ?>
</body>
</html>