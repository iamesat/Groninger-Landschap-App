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
            <div class="card text-white bg-primary mx-2" style="width: 96px; height: 100px; border: none; border-radius: 20%;" >
                <div class="card-body text-center my-scores">
                    <p class="card-text" style="font-size: 14px;">Punten</p>
                    <h3 class="card-title" style="font-size: 24px;">103</h3>
                </div>
            </div>
        </div>
        <div >
            <div class="card text-white bg-warning mx-2" style="width: 96px; height: 100px; border: none; border-radius: 20%;">
                <div class="card-body text-center">
                    <p class="card-text" style="font-size: 14px;">Plaats</p>
                    <h3 class="card-title" style="font-size: 24px;">1e</h3>
                </div>
            </div>
        </div>
        <div>
            <div class="card text-white bg-danger mx-2" style="width: 96px; height: 100px; border: none; border-radius: 20%;">
                <div class="card-body text-center">
                    <p class="card-text" style="font-size: 14px;">Routes</p>
                    <h3 class="card-title" style="font-size: 24px;">18</h3>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include "include/bottom_navbar.php"; ?>
<?php include "include/scripts.php"; ?>
</body>
</html>