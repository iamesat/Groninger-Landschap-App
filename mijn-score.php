<!DOCTYPE html>
<html lang="en">
<?php include "include/head.php"; ?>

<title>Mijn Score</title>

<body>
<?php include "include/top_navbar.php"; ?>

<div class="container text-center my-3">
    <div class="row justify-content-center">
   <div class="col routes-buttons">
  <button type="button" class="btn btn-outline-dark route-page-button active">Mijn Score</button>
   </div>
   <div class="col routes-buttons">
   <a href="scorebord.php" class="stretched-link" data-transition="slide" rel="external"><button type="button" class="btn btn-outline-dark route-page-button">Scorebord</button></a>
   </div>
 </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div>
            <div class="card text-white bg-primary mijnscore-kaart mx-2">
                <div class="card-body text-center my-scores">
                    <p class="card-text" style="font-size: 14px;">Level</p>
                    <h3 class="card-title" style="font-size: 24px;">2</h3>
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
                    <p class="card-text" style="font-size: 14px;">Quizen</p>
                    <h3 class="card-title" style="font-size: 24px;">14</h3>
                </div>
            </div>
        </div>
    </div>
</div>

  <div class="container my-4">
      <div class="row justify-content-md-center">
          <div class="col-12">
              <div class="card scoreborder">
              <div>
                  <div class="card-body my-3">
                        <div class="row">
                            <div class="col">
                                <h6 class="ml-4" style="font-size: 12px;"><b>Wandelaar LVL 2</b></h6>
                            </div>
                            <div class="col">
                                <h6 class="ml-4 score-punten" style="font-size: 12px;"><b>58/100 PT</b></h6>
                            </div>
                        </div>
                  <div class="progress">
                      <div class="progress-bar progress-bar" role="progressbar" style="width: 58%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">58 PT</div>
                  </div>
              </div>
              <div>
                    <div class="card-body my-3">
                        <div class="row">
                            <div class="col">
                                <h6 class="ml-4" style="font-size: 12px;"><b>Routenaam</b></h6>
                            </div>
                            <div class="col">
                                <h6 class="ml-4 score-punten" style="font-size: 12px;"><b>30%</b></h6>
                            </div>
                        </div>
                  <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">30%</div>
                  </div>
                </div>
              </div>
                    <div class="card-body my-3">
                        <div class="row">
                            <div class="col">
                                <h6 class="ml-4" style="font-size: 12px;"><b>Wandelaar LVL 2</b></h6>
                            </div>
                            <div class="col">
                                <h6 class="ml-4 score-punten" style="font-size: 12px;"><b>58/100 PT</b></h6>
                            </div>
                        </div>
                  <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 58%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">58 PT</div>
                  </div>
              </div>
              <div>
                    <div class="card-body my-3">
                        <div class="row">
                            <div class="col">
                                <h6 class="ml-4" style="font-size: 12px;"><b>Wandelaar LVL 2</b></h6>
                            </div>
                            <div class="col">
                                <h6 class="ml-4 score-punten" style="font-size: 12px;"><b>58/100 PT</b></h6>
                            </div>
                        </div>
                  <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 58%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">58 PT</div>
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
