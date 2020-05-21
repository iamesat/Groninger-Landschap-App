<!doctype html>
<html lang="en">
<?php include ($_SERVER['DOCUMENT_ROOT']. "/Groninger-Landschap-App/include/head.php"); ?>
<title>Privacy verklaring</title>
    <?php include "include/top_navbar.php"; ?>
  <body>

  
<div class="container my-4">
    <div class="card scoreborder">
        <div class="card-body my-3">
            <p>
                Lorem Ipsum is simply dummy text of the 
                printing and typesetting industry. Lorem 
                Ipsum has been the industry's standard 
                dummy text ever since the 1500s, when 
                an unknown printer took a galley of type 
                and scrambled it to make a type specimen
                book. It has survived not only five centuries, 
                but also the leap into electronic typesetting, 
                remaining essentially unchanged. It was
                popularised in the 1960s with the release 
                of Letraset sheets containing Lorem Ipsum 
                passages, and more recently with desktop 
                publishing software like Aldus PageMaker 
                including versions of Lorem Ipsum.
            </p>

            <div class="switch-field pt-4 justify-content-center">
                <input type="radio" id="radio-one" name="switch-one" value="Iedereen" checked/>
                <label for="radio-one" style="font-size: 12px;">Weigeren</label>
                <input type="radio" id="radio-two" name="switch-one" value="Niemand" />
                <label for="radio-two" style="font-size: 12px;">Accepteren</label>
            </div>
        </div>
    </div>
</div>


    <?php include "include/bottom_navbar.php"; ?>
    <?php include "include/scripts.php"; ?>
  </body>
</html>