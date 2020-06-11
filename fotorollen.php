<!DOCTYPE html>
<html lang="en">
<?php include ($_SERVER['DOCUMENT_ROOT']. "/Groninger-Landschap-App/include/head.php"); ?>
<?php include "include/top_navbar.php"; ?>
<title>Fotorollen</title>
<body>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-fotorollen-title">Aantal fotorollen</h5>
                    <h2 class="fotorollen-nummer">3</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-body text-center">
                    <p>Mijn recente foto's</p>
                    <div class="row justify-content-center">
                    <a href="foto-overzicht.php" data-transition="slide" rel="external"><img src="assets/images/fotorollen/molen.png" class="recente-foto" alt="..."></a>
                    <a href="foto-overzicht.php" data-transition="slide" rel="external"><img src="assets/images/fotorollen/huis.png" class="recente-foto" alt="..."></a>
                    </div>
                    <div class="row justify-content-center">
                    <a href="foto-overzicht.php"  data-transition="slide" rel="external"><img src="assets/images/fotorollen/beekje.png" class="recente-foto" alt="..."></a>
                    <a href="foto-overzicht.php" data-transition="slide" rel="external"><img src="assets/images/fotorollen/huis2.png" class="recente-foto" alt="..."></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-body text-center">
                    <a href="foto-overzicht.php" data-transition="slide" rel="external"><button type="button" class="btn btn-outline-dark fotorollen-page-buttons">Foto overzicht</button></a><br>
                    <a href="fotowedstrijd.php" data-transition="slide" rel="external"><button type="button" class="btn btn-outline-dark fotorollen-page-buttons">Fotowedstrijd</button></a>
                    <a href="shop.php" data-transition="slide" rel="external"><button type="button" class="btn btn-outline-dark fotorollen-page-buttons">Nieuwe fotorollen aanschaffen</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Fotorollen-Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header modal-shop-header">
                  <h5 class="modal-title" id="exampleModalLabel">Over Fotorollen</h5>
                  <button type="button" class="close close-shop" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>

            <div class="modal-body">
                <p>
                Welkom bij je fotorollen pagina! Op deze pagina kan je zien hoeveel fotorollen je hebt. Met een fotorol kan je 10 foto's maken tijdens de routes die je volgt. 
                Bij mijn overzicht zie je al jouw gemaakte foto's, inclusief de foto's waarmee jij prijzen hebt verdiend. 
                Je kan ook de foto's van al je groepsleden bekijken.
                De prijzen zijn te verdienen met de fotowedstrijd! Hierin zul je een fotolocatie zien op een bepaalde route. 
                Het is aan jou om tijdens je route deze foto het beste na te maken en deze vervolgens in te zenden. 
                Daarna moet je de meeste stemmen verzamelen. Beland je in de top 3? Dan val je in de prijzen. 
                De prijzen verschillen per wedstrijd. Dit kunnen punten zijn om nieuwe routes te unlocken, maar ook nieuwe fotorollen! 
                Ook krijg je een medaille voor de foto's waarmee je wint!
                Ook kan je hier je stem uitbrengen op andere foto's. Voor elke foto die je inzend, moet je ook op een stemmen. 
                Zo blijft het eerlijk voor iedereen!
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
