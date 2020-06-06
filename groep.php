<!DOCTYPE html>
<html lang="en">
<?php include "include/head.php"; ?>
<?php include "include/top_navbar.php"; ?>
<?php
  include('include/db-connect.php');

  $groepnieuw = $db->prepare("SELECT id, groepsnaam FROM groep");
  $groepnieuw->execute();

  ?>
<title>Mijn Groepen</title>
<body>



  <div class="container">
  <div class="row">

  <div class="col-sm groepinformatie ">


    <p class="bekijkenbutton groepzoek"> Groep Zoeken </p>

  <br>

  </div>


  <div class="col-sm  groepbutton2 ">

  <a href="groepaanmaken.php"> <p class="bekijkenbutton groepmaak" > Groep Aanmaken </p></a>


  </div>
  </div>
  </div>



  <?php foreach($groepnieuw as $groep): ?>
<div class="container groepruimte">
    <div class="row justify-content-md-center">
        <div class="col-12">
            <div class="card groepborder">
                <div class="card-body">

                    <h3 class="card-groep-title"><?php echo $groep[1]; ?></h3>

                    <br>

                    <div class="container">
                    <div class="row">
                    <div class="col-sm groepinformatie ">

                    <p class="groepinfo">Besloten groep</p>
                    <p class="groepinfo">Status: Aanvraag verstuurd</hp>
                      <p class="meldingengroep"> Geen nieuwe meldingen </p>
                    <br>

                  </div>


                <div class="col-sm groepsbutton ">
                  <p class ="groepaantal"> 2/10 </p>
                  <a href="groepbeheerder?id=<?php echo $groep[0]; ?>"><p class="bekijkenbutton" > Bekijken </p></a>
</div>
                </div>
</div>
</div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>


<!-- <div class="container groepruimte">
    <div class="row justify-content-md-center">
        <div class="col-12">
            <div class="card groepborder">
                <div class="card-body">

                    <h3 class="card-groep-title">Groep Stinkies</h3>

                    <br>

                    <div class="container">
                    <div class="row">
                    <div class="col-sm groepinformatie ">

                    <p class="groepinfo">Besloten groep</p>
                    <p class="groepinfo">Status: Aanvraag verstuurd</hp>
                      <p class="meldingengroep"> Geen nieuwe meldingen </p>
                    <br>

                  </div>


                <div class="col-sm groepsbutton ">
                  <p class ="groepaantal"> 2/10 </p>
                  <a href="#"> <p class="bekijkenbutton"> bekijken </p></a>
</div>
                </div>
</div>
</div>
            </div>
        </div>
    </div>
</div>

<div class="container groepruimte">
    <div class="row justify-content-md-center">
        <div class="col-12">
            <div class="card groepborder">
                <div class="card-body">

                    <h3 class="card-groep-title">Groep Jacobs College</h3>

                    <br>

                    <div class="container">
                    <div class="row">
                    <div class="col-sm groepinformatie ">

                    <p class="groepinfo">Besloten groep</p>
                    <p class="groepinfo">Status: Aanvraag verstuurd</hp>
                      <p class="meldingengroep"> Geen nieuwe meldingen </p>


                  </div>


                <div class="col-sm groepsbutton ">
                  <p class ="groepaantal"> 2/10 </p>
                  <a href="#"> <p class="bekijkenbutton"> bekijken </p></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div> -->




<?php include "include/bottom_navbar.php"; ?>
<?php include "include/scripts.php"; ?>
</body>
</html>
