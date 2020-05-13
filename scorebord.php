<!DOCTYPE html>
<html lang="en">
<?php include "include/head.php"; ?>
<title>Scorebord</title>
<body>
<?php include "include/top_navbar.php"; ?>

<div class="container text-center my-3">
    <div class="row justify-content-center">
   <div class="col routes-buttons">
   <a href="mijn-score.php" class="stretched-link" data-transition="slide" rel="external"><button type="button" class="btn btn-outline-dark route-page-button">Mijn Score</button></a>
   </div>
   <div class="col routes-buttons">
  <button type="button" class="btn btn-outline-dark route-page-button active">Scorebord</button>
   </div>
 </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div>
            <div class="card text-white bg-primary mijnscore-kaart mx-2">
                <div class="card-body text-center my-scores">
                    <p class="card-text" style="font-size: 14px;">Punten</p>
                    <h3 class="card-title" style="font-size: 24px;">103</h3>
                </div>
            </div>
        </div>
        <div >
            <div class="card text-white bg-warning mijnscore-kaart mx-2">
                <div class="card-body text-center">
                    <p class="card-text" style="font-size: 14px;">Plaats</p>
                    <h3 class="card-title" style="font-size: 24px;">1e</h3>
                </div>
            </div>
        </div>
        <div>
            <div class="card text-white bg-danger mijnscore-kaart mx-2">
                <div class="card-body text-center">
                    <p class="card-text" style="font-size: 14px;">Routes</p>
                    <h3 class="card-title" style="font-size: 24px;">18</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-2">
    <div class="row text-center">
        <div class="col my-3">
            <div class="card scoreborder scorebord-kaart">
                <div>
                    <div class="card-body">
                        <h6 class="scorebord-titel py-1"><b><u>Punten Koning</u></b></h6>
                        <div class="row pt-2">
                            <div class="col">
                                <p class="klassement">
                                    Mees<br>
                                    Johan<br>
                                    Eric<br>
                                    Eva<br>
                                    Nieck
                                </p>
                            </div>
                            <div class="col">
                                <p class="klassement">
                                    103pt<br>
                                    97pt<br>
                                    96pt<br>
                                    89pt<br>
                                    87pt
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card scoreborder scorebord-kaart mt-3">
                <div>
                    <div class="card-body">
                        <h6 class="scorebord-titel py-1"><b><u>Fotograaf Koning</u></b></h6>
                        <div class="row">
                            <div class="col">
                                <p class="klassement">
                                    Eline<br>
                                    Danique<br>
                                    Bas<br>
                                    Mees<br>
                                    Erik
                                </p>
                            </div>
                            <div class="col">
                                <p class="klassement">
                                    8pt<br>
                                    8pt<br>
                                    7pt<br>
                                    6pt<br>
                                    6pt
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col my-3">
            <div class="card scoreborder scorebord-kaart">
                <div>
                    <div class="card-body">
                        <h6 class="scorebord-titel py-1"><b><u>Groep Koning</u></b></h6>
                        <div class="row pt-2">
                            <div class="col">
                                <p class="klassement">
                                    Hanze<br>
                                    Stinkies<br>
                                    Bosman<br>
                                    Jacobs<br>
                                    Boerderij
                                </p>
                            </div>
                            <div class="col">
                                <p class="klassement">
                                    103pt<br>
                                    100pt<br>
                                    100pt<br>
                                    100pt<br>
                                    100pt
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card scoreborder scorebord-kaart mt-3">
                <div>
                    <div class="card-body">
                        <h6 class="scorebord-titel py-1"><b><u>Quiz Koning</u></b></h6>
                        <div class="row pt-2">
                            <div class="col">
                                <p class="klassement">
                                    Mees<br>
                                    Bas<br>
                                    Eric<br>
                                    Danique<br>
                                    Nieck
                                </p>
                            </div>
                            <div class="col">
                                <p class="klassement">
                                    20pt<br>
                                    19pt<br>
                                    17pt<br>
                                    16pt<br>
                                    12pt
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "include/bottom_navbar.php"; ?>
<?php include "include/scripts.php"; ?>
</body>
</html>