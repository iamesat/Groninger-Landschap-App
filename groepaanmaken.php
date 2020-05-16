<!DOCTYPE html>
<html lang="en">
<?php include "include/head.php"; ?>
<?php include "include/top_navbar.php"; ?>
<title>Groep Aanmaken</title>
<body>




<div class="container groepruimte groepboven">
    <div class="row justify-content-md-center">
        <div class="col-12">
            <div class="card groepborder">
                <div class="card-body">

                    <h3 class="card-groep-title">Naam van de groep</h3>

                    <br>

                    <div class="container">

                      <input type="text" class="groepsnaaminput" name="firstname" placeholder="Naam invoeren ">


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

                    <h3 class="card-groep-title">Groepsomschrijving</h3>

                    <br>

                    <div class="container">

                      <input type="text" class="groepsnaaminput" name="firstname" placeholder="Omschrijving invoeren ">

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

                    <h3 class="card-groep-title">Maximaal aantal personen</h3>

                    <br>

                    <div class="container">

                      <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton dropdownkleur" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      10
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#">1</a>
      <a class="dropdown-item" href="#">2 </a>
      <a class="dropdown-item" href="#">3</a>
      <a class="dropdown-item" href="#">4</a>
      <a class="dropdown-item" href="#">5</a>
      <a class="dropdown-item" href="#">6</a>
      <a class="dropdown-item" href="#">7</a>
      <a class="dropdown-item" href="#">8</a>
      <a class="dropdown-item" href="#">9</a>
      <a class="dropdown-item" href="#">10</a>
      <a class="dropdown-item" href="#">11</a>
      <a class="dropdown-item" href="#">12</a>
      <a class="dropdown-item" href="#">13</a>
      <a class="dropdown-item" href="#">14</a>
      <a class="dropdown-item" href="#">15</a>
      <a class="dropdown-item" href="#">16</a>
      <a class="dropdown-item" href="#">17</a>
      <a class="dropdown-item" href="#">18</a>
      <a class="dropdown-item" href="#">19</a>
      <a class="dropdown-item" href="#">20</a>

    </div>
  </div>

                  </div>
</div>
            </div>
        </div>
    </div>
</div>


<div class="container groepruimte ">
    <div class="row justify-content-md-center">
        <div class="col-12">
            <div class="card groepborder">
                <div class="card-body">

                    <h3 class="card-groep-title">Toegankelijkheid</h3>

                    <br>


                  <form class="form">

	<div class="switch-field">
		<input type="radio" id="radio-one" name="switch-one" value="Iedereen" checked/>
		<label for="radio-one">Iedereen</label>
		<input type="radio" id="radio-two" name="switch-one" value="Niemand" />
		<label for="radio-two">Niemand</label>
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

                    <h3 class="card-groep-title">Groepsafbeelding</h3>

                    <br>

                    <div class="container">

                      <input type="text" class="groepsnaaminput" name="firstname" placeholder="Bestand uploaden... ">

                  </div>
</div>
            </div>
        </div>
    </div>
</div>



<div class="container groepruimte">
    <div class="row justify-content-md-center">
        <div class="col-12">





                    <br>

                    <div class="container accepteervoorwaarden">

                      <form action="/action_page.php">
    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <label for="vehicle1"> Ik ga Akkoord met de Algemene voorwaarden</label><br>

  </form>

                  </div>
<br>


                  <div class="container accepteervoorwaarden">


  <button type="button" class="btn btn-outline-light shop-button">Groep aanmaken</button>



                </div>

        </div>
    </div>
</div>


<br>
<br>
<br>
<br>

<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.innerHTML === "Iedereen") {
    x.innerHTML = " Niemand!";
  } else {
    x.innerHTML = "Iedereen";
  }
}

$(document).ready(function () {
    $('.dropdown-toggle').dropdown();
});
</script>




<?php include "include/bottom_navbar.php"; ?>
<?php include "include/scripts.php"; ?>
</body>
</html>
