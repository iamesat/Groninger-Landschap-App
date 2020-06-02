</div>

<?php
function active($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  if($currect_page == $url){
      echo 'active'; 
  } 
}
?>

<nav class="navbar navbar-home fixed-bottom d-flex justify-content-center">
      <div class="navbar">
        <div class="container">
            <div class="row row-cols-5">
              <div class="col">
                <a class="linkje <?php active('home.php');?>" href="home">
                <img src="assets/images/icons/home.svg" class="navbar-bottom-icons" alt="home" />
                Home
              </a>
              </div>
              <div class="col">
                &nbsp;
              </div>
              <div class="col">
                <a class="linkje <?php active('route.php');?>" href="route">
                <img src="assets/images/icons/gps.svg" class="navbar-bottom-icons" alt="route" />
                Route
              </a>
              </div>
              <div class="col">
                &nbsp;
              </div>
              <div class="col">
                <a class="linkje <?php active('#');?>" href="#">
                <img src="assets/images/icons/chatten.svg" class="navbar-bottom-icons" alt="chat" />
                Chats
              </a>
              </div>
      </div>
      </div>
      </div>
    </nav>

    

   