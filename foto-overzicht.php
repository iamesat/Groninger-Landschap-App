<!DOCTYPE html>
<html lang="en">
<?php include ($_SERVER['DOCUMENT_ROOT']. "/Groninger-Landschap-App/include/head.php"); ?>
<?php include "include/top_navbar.php"; ?>
<title>Foto overzicht</title>
<body>

<div class="container text-center my-3">
    <div class="row justify-content-center">
        <div class="col fotopage-buttons">
            <a href="foto-overzicht.php" class="stretched-link" data-transition="slide" rel="external"><button type="button" class="btn btn-outline-dark foto-page-button active">Mijn foto's</button>
        </div>
   
        <div class="col foto-buttons">
            <a href="groepen-foto-overzicht.php" class="stretched-link" data-transition="slide" rel="external"><button type="button" class="btn btn-outline-dark foto-page-button">Mijn groepen foto's</button></a>
        </div>
    </div>
</div>

<?php include "include/bottom_navbar.php"; ?>
<?php include "include/scripts.php"; ?>
</body>
</html>