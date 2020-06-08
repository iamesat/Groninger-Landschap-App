<?php
include ($_SERVER['DOCUMENT_ROOT']. "/Groninger-Landschap-App/include/head.php"); ?>
<title>QR Scanner</title>
<?php
$qrID = $_GET['id'];
$id = $_SESSION['userID'];?>

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
</div>
<div class="modal-dialog qr" role="document">
<div class="modal-content qr">
  <div class="modal-header qr">
    <h5 class="modal-title">Gefeliciteerd!</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <p>Kijk om je heen.<br><br>
De plek waar je nu staat
is prachtig!  Het is het oudste
monument van Groningen.<br><br>

Je hebt 10 punten verdient<br><br>

Met deze punten kan je
nieuwe routes unlocken <?php echo $id; ?></p>

  </div>
  <div class="modal-footer qr">
    <div class="col-md-auto">
      <form id="add-qr" method="post" action="functions/functions.php" class="add-qr" name="add-qr">
      <input type="hidden" name="qrID" value="<?php echo $qrID; ?>">
      <input type="hidden" name="userID" value="<?php echo $id; ?>">
      <input type="submit" name="add-qr" value="Ga verder" class="btn btn-group blue">
    <!-- <a href="" class="stretched-link pl-4" data-transition="slide" rel="external" data-toggle="modal" data-target="#unlock-modal"><button type="button" class="btn btn-group blue" style="font-size:14px">Unlocken</button></a> -->
      </form>
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

    audio.play();

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
