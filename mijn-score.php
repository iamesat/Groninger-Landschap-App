
<?php include "include/head.php"; ?>
<?php include "include/top_navbar.php"; ?>
<title>Mijn Score</title>

<body>
<div class="container">
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

<?php include "include/bottom_navbar.php"; ?>
<?php include "include/scripts.php"; ?>
</body>
