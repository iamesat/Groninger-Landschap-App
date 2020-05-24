<!DOCTYPE html>
<html lang="en">
<?php include ($_SERVER['DOCUMENT_ROOT']. "/Groninger-Landschap-App/include/head.php"); ?>
<title>Foto ingezonden</title>
<body>
<?php include "include/top_navbar.php"; ?>

<div class="container">
    <div class="card">
        <div class="card-body text-center">
            <h3 class="wedstrijd-titel">Foto succesvol ingezonden!</h3>
            <p class="wedstrijd-route">Wandelroute Iwema Steenhuis</p>
            <img src="assets/images/fotorollen/wedstrijd.svg" class="wedstrijd-foto" alt="...">
            <p class="wedstrijd-p"><br>Verzamel nu zoveel mogelijk stemmen.<br> Als je wint krijg je een prijs!
                                       
            <div class="row text-center pt-3">
                <div class="col">
                    <p class="wedstrijd-p">
                        Goud<br>
                        Zilver<br>
                        Brons
                    </p>
                </div>
                <div class="col">
                    <p class="wedstrijd-p">
                        50 Pt + 1 fotorol<br>
                        30 Pt + 1 fotorol<br>
                        15 Pt + 1 fotorol
                    </p>
                </div>
            </div>
            <a href="mijn-inzendingen" class="stretched-link" data-transition="slide" rel="external"><button type="button" class="btn btn-outline-dark fotowedstrijd-btn">Naar mijn inzendingen</button></a>
            <p class="wedstrijd-p pt-3">De uitslag is bekend op 17 juni 2020</p>
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
