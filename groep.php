<!DOCTYPE html>
<html lang="en">
<?php include "include/head.php"; ?>
<?php include "include/top_navbar.php"; ?>
<?php
  include('include/db-connect.php');

  $groepnieuw = $db->prepare("SELECT id, groepsnaam, groepsomschrijving, groepsfoto FROM groep");
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
                    <img class="groepsfoto" src="assets/images/groepsfotos/<?php echo $groep[0]; echo $groep[3];?>" alt="route afbeelding">
                    <br>
                    <div class="container">
                    <div class="row">
                    <div class="col-sm groepinformatie ">

                    <p class="groepinfo"><?php echo $groep[2]; ?></p>
                    <p class="groepinfo"><b> Status: </b> Aanvraag verstuurd</hp>
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

<div class="modal fade" id="Groepen-Aanmaken-Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header modal-shop-header">
                  <h5 class="modal-title" id="exampleModalLabel">Over Groepen</h5>
                  <button type="button" class="close close-shop" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>

            <div class="modal-body">
                <p>
                Welkom bij je Groepen! <br><br>
                Op deze pagina kan je zien in welke groepen jij zit. 
                Ook kan je zelf groepen aanmaken en vervolgens je medespelers uitnodigen.
                Op deze manier kan je samen wandelen en elkaars activiteiten in de gaten houden.
                </p>
            </div>

            <div class="modal-footer">
            <a href="" data-transition="slide" rel="external"><button type="button" class="btn btn-secondary btn-info-shop" data-dismiss="modal">Begrepen</button></a>
            </div>
          </div>
      </div>
    </div>


<?php include "include/bottom_navbar.php"; ?>
<?php include "include/scripts.php"; ?>
</body>
</html>
