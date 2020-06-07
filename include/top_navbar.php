<nav class="navbar navbar-top-home fixed-top">
        <div class="container navtop">

          <div class="row justify-content-between">
            <div class="col-auto mr-auto">
              <a onclick="goBack()">
                <i class="fas fa-arrow-left"></i></a>
                <strong id="paginatitel"></strong>
            </div>
            <div class="col-auto">
              <a href="shop.php" data-transition="slide" rel="external"><img src="assets/images/icons/winkel.svg" class="jumbo-img-top" alt="..."></a>
              <a href="" data-transition="slide" rel="external" data-toggle="modal" data-target="#UpgradeModal"><img src="assets/images/icons/bell.svg" class="jumbo-img-top" alt="..."></a>
            </div>
          </div>
        </div>
    </nav>

    <div class="modal fade" id="UpgradeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-shop-header">
                <h5 class="modal-title" id="exampleModalLabel">Deze foto uploaden?</h5>
                <button type="button" class="close close-shop" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Locatie: wandelroute Iwema Steenhuis<br><br>
                    Wil je deze foto inzenden voor de fotowedstrijd? <br><br>
                    Klik dan op 'JA'. Wil je er nog over nadenken? Klik dan op 'NEE'.
                </p>
                <img src="assets/images/fotorollen/wedstrijd.svg">
            </div>
            <div class="modal-footer">
            <a href="foto-upload" class="stretched-link" data-transition="slide" rel="external"><button type="button" class="btn btn-secondary btn-info-shop" data-dismiss="modal">JA</button></a>
            <button type="button" class="btn btn-secondary btn-info-shop" data-dismiss="modal">NEE</button>
            </div>
        </div>
    </div>
</div>

  <div class="app-breaks">
