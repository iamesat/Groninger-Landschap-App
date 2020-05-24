<!DOCTYPE html>
<html lang="en">
<?php include ($_SERVER['DOCUMENT_ROOT']. "/Groninger-Landschap-App/include/head.php"); ?>
<title>Mijn inzendingen</title>
<body>
<?php include "include/top_navbar.php"; ?>

<div class="container">
    <div class="card">
        <div class="card-body text-center">
            <h3 class="wedstrijd-titel">Lopende inzendingen</h3>
                <p class="wedstrijd-route">Wandelroute Iwema Steenhuis</p>
                    <div class="row text-center">
                        <div class="col">
                            <img src="assets/images/fotorollen/iwemasteenhuis.jpg" class="recente-foto" alt="...">
                        </div>

                        <div class="col">
                            <br>
                                <img src="assets/images/icons/heart.svg" class="heart" alt="...">
                            <br><br><p>23 stemmen</p>
                        </div>
                    </div>
                    <p class="wedstrijd-p"> Deze wedstrijd verloopt op 17 juni 2020</p>
    </div>

    <div class="card">
        <div class="card-body text-center">
                <p class="wedstrijd-route">Wandelroute Leinwijk</p>
                    <div class="row text-center">
                        <div class="col">
                            <img src="assets/images/fotorollen/beekje.png" class="recente-foto" alt="...">
                        </div>

                    <div class="col">
                        <br>
                        <img src="assets/images/icons/heart.svg" class="heart" alt="...">
                        <br><br><p>3 stemmen</p>
                    </div>
                </div> 
                <p class="wedstrijd-p"> Deze wedstrijd verloopt op 30 mei 2020</p>
        </div>
    </div>
    
</div>
<br>
<div class="container">
    <div class="card">
        <div class="card-body text-center">
            <h3 class="wedstrijd-titel">Breng snel je stem uit!</h3>
            <p class="wedstrijd-p">Stem op een foto van iemand anders!<br>
                                   Alleen dan kan jij ook stemmen ontvangen.<br><br>
            <a href="stem-uitbrengen" class="stretched-link" data-transition="slide" rel="external"><button type="button" class="btn btn-outline-dark fotowedstrijd-btn">Breng je stem uit</button></a>
        </div>
    </div>
</div>

<?php include "include/bottom_navbar.php"; ?>
<?php include "include/scripts.php"; ?>
</body>
</html>
