<!DOCTYPE html>
<html lang="en">
<?php include "include/head.php"; ?>
<?php include "include/top_navbar.php"; ?>
<title>Mijn Score</title>

<body>
<div class="container text-center my-3">
    <div class="row justify-content-center">
   <div class="col routes-buttons">
  <button type="button" class="btn btn-outline-dark route-page-button active">Mijn Score</button>
   </div>
   <div class="col routes-buttons">
  <button type="button" class="btn btn-outline-dark route-page-button">Scorebord</button>
   </div>
 </div>
</div>

<div class="container">
    <div class="row justify-content-center mx-4">
    <div class="col-sm">
            <div class="card text-white bg-primary mb-3 mx-2" style="max-width: 18rem;">
                <div class="card-body text-center">
                    <p class="card-text">Level</p>
                    <h3 class="card-title">2</h3>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                <div class="card-body text-center">
                    <p class="card-text">Plaats</p>
                    <h3 class="card-title">1e</h3>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                <div class="card-body text-center">
                    <p class="card-text">Aantal quizen goed</p>
                    <h3 class="card-title">14</h3>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container groepruimte mt-4">
    <div class="row justify-content-md-center">
        <div class="col-12">
            <div class="card scoreborder">
            <div>
                <div class="card-body my-3">
                    <h6 class="ml-4 my-3"><b>Wandelaar LVL 2 58/100 PT</b></h6>
                    <div class="progress">
                    <div class="progress-bar mb-3" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div>
                <div class="card-body my-3">
                    <h6 class="ml-4 my-3"><b>Routenaam 30%</b></h6>
                    <div class="progress">
                    <div class="progress-bar mb-3" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div>
                <div class="card-body my-3">
                    <h6 class="ml-4 my-3"><b>Wandelaar 58/100 PT</b></h6>
                    <div class="progress">
                    <div class="progress-bar mb-3" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div>
                <div class="card-body my-3">
                    <h6 class="ml-4 my-3"><b>Wandelaar LVL 2 58/100 PT</b></h6>
                    <div class="progress">
                    <div class="progress-bar mb-3" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
