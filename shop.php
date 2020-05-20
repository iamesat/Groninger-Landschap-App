<!DOCTYPE html>
<html lang="en">
<?php include "include/head.php"; ?>
<title>Shop</title>
<body>
<?php include "include/top_navbar.php"; ?>

<div class="container mt-4 text-center">
    <div class="row">
        <div class="col">
            <div class="card scoreborder">
                <div class="card-body my-3">
                    <h3 class="text-center" style="font-size: 16px;">Aantal fotorollen</h3>
                    <p class="text-center" style="font-size: 50px;">20</p>
                    <button type="button" class="btn btn-outline-light shop-button">Nieuwe aanschaffen</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4 text-center">
    <div class="card scoreborder">
        <div class="card-body my-3">
            <div class="row">
                <div class="col">
                    <h3 class="text-center" style="font-size: 16px">Upgrade naar PRO <a href="" class="stretched-link pl-4" data-transition="slide" rel="external" data-toggle="modal" data-target="#UpgradeModal"><img src="assets/images/icons/info.svg" class="card-img-top info-shop" alt="..."></a></h3>
                    <p class="text-center pt-2" style="font-size: 30px;">€2,99<br>per maand</p>
                    <button type="button" class="btn btn-outline-light shop-button">Upgrade</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-4 text-center">
    <div class="card scoreborder">
        <div class="card-body my-3">
            <div class="row">
                <div class="col">
                    <h3 style="font-size: 16px">Doneer Groninger landschap <a href="" class="stretched-link pl-4" data-transition="slide" rel="external" data-toggle="modal" data-target="#DoneerModal"><img src="assets/images/icons/info.svg" class="card-img-top info-shop" alt="..."></a></h3>
                    <div class="input-group input-group-sm my-4">
                        <input type="text" class="form-control" style="width: 116px;" placeholder="€" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <button type="button" class="btn btn-outline-light shop-button">Doneer</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="UpgradeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-shop-header">
                <h5 class="modal-title" id="exampleModalLabel">Upgrade naar Pro informatie</h5>
                <button type="button" class="close close-shop" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <b>Informatie over pro:</b><br>
                    <br>
                    - Advertentievrije applicatie<br>
                    - Elke maand 3 gratis fotorollen<br>
                    - Je mag 2 foto's insturen bij een wedstrijd.<br>
                    - Je helpt het goede doel!
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-info-shop" data-dismiss="modal">Begrepen</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="DoneerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-shop-header">
                <h5 class="modal-title" id="exampleModalLabel">Doneer informatie</h5>
                <button type="button" class="close close-shop" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <b>Informatie over doneren:</b><br>
                    <br>
                    Het Groninger Landschap heeft<br>
                    donaties nodig om de cultuur, het<br>
                    erfgoed en de landschappen van<br>
                    de provincie Groningen te kunnen<br>
                    onderhouden. Daar hebben we<br>
                    jouw hulp dus hard voor nodig!<br>
                    <br>
                    <b>Per €10,- krijg je 2 fotorollen</b>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-info-shop" data-dismiss="modal">Begrepen</button>
            </div>
        </div>
    </div>
</div>
<?php include "include/bottom_navbar.php"; ?>
<?php include "include/scripts.php"; ?>
</body>
</html>
