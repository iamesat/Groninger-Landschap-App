<?php
include ($_SERVER['DOCUMENT_ROOT']. "/Groninger-Landschap-App/include/head.php"); ?>
<title>QR Scanner</title>
<nav class="navbar navbar-top-home fixed-top">
        <div class="container navtop">

          <div class="row justify-content-between">
            <div class="col-auto mr-auto">
              <a onclick="goBack()">
                <i class="fas fa-arrow-left"></i></a>
                <strong id="paginatitel">QR Code Scanner</strong>
            </div>
            <div class="col-auto">
              <a href="shop.php" class="stretched-link" data-transition="slide" rel="external"></a>
              <img src="assets/images/icons/bell.svg" class="jumbo-img-top" alt="...">
            </div>
          </div>
        </div>
    </nav>
  <div class="app-breaks camera">

<div id="camera-scann">
  <video playsinline id="preview">
  </video>
</div>
<div class="row justify-content-md-center">
    <div class="col col-lg-2">

    </div>
    <div class="col-md-auto">
        <a class="btn btn-group blue overlaytje">Richt qr op</a>
    </div>
    <div class="col col-lg-2">

    </div>
  </div>

</div>

<script src="assets/js/instascan.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <link href="assets/js/bootstrap.bundle.js" rel="stylesheet">
    <script src="assets/js/bootstrap.min.js"></script>

<script>

let scanner = new Instascan.Scanner({ video: document.getElementById('preview'), mirror: false });

  scanner.addListener('scan', function (content) {

    audio.play();

    window.open("/Groninger-Landschap-App/qr-pagina?id=" + content + ".php" ,"_self");

  });

  Instascan.Camera.getCameras().then(function (cameras) {
    if (cameras.length > 0) {
      scanner.start(cameras[0]);
    } else {
      console.error('No cameras found.');
    }
  }).catch(function (e) {
    console.error(e);
  });

  var count = 1;
function troll() {
  if (count<10) {
    count++;
  }
  else {
    window.location = "onzin.html";
  }
};

</script>
