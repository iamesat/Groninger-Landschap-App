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
        <p class="btn btn-group qr"><img src="assets/images/icons/qr-code.svg" class="jumbo-img-top" alt="...">&nbsp;&nbsp;Richt op de QR-code</a>
    </div>
    <div class="col col-lg-2">

    </div>
  </div>

</div>

<div class="modal fade" id="QR-Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header modal-shop-header">
                  <h5 class="modal-title" id="exampleModalLabel">QR-code scannen</h5>
                  <button type="button" class="close close-shop" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>

            <div class="modal-body">
                <p>
                Welkom bij je eerste QR-code! <br><br>
                Misschien heb je wel een melding ontvangen, of misschien ben je er tijdens je route zomaar één tegen het lijf gelopen.
                Op de routes bevinden zich meerdere QR-codes. Deze codes kan je hier scannen om meer informatie te krijgen over de locatie waar je je op dat moment bevindt!
                En dat is niet alles. Je wordt er voor beloond, want voor elke QR-code krijg je punten om nieuwe routes te unlocken en om verder te levelen!
                <br><br>Ga dus goed op zoek en scan zoveel mogelijk QR-codes!
                </p>
            </div>

            <div class="modal-footer">
            <a href="" data-transition="slide" rel="external"><button type="button" class="btn btn-secondary btn-info-shop" data-dismiss="modal">Begrepen</button></a>
            </div>
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

    window.open("qr-pagina?id=" + content + ".php" ,"_self");

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

$(document).ready(function(){
        $("#QR-Modal").modal('show');
    });
</script>
