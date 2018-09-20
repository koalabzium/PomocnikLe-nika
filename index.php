<?/*php
session_start();

if (isset($_SESSION['id'])==1) {
  header('location: login.php');
}

if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: index.php");
}



*/?>



<?php  include('server.php'); ?>




<?php include('chorwacja.php'); ?>




<div class="row">
<div class="col-sm-8 float-none tab-content" >



  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/karuzela0.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
         <h2>Dzień dobry<?php  if (isset($_SESSION['username'])){echo ", ", $_SESSION['username'];} ?>!</h2>

      <?php  if (isset($_SESSION['username']) && $_SESSION['username']=="koala") : ?>
        <h3>Jesteś adminem na tym dancingu. </h3>
      <?php endif ?>
      <p>Witaj w magicznym świecie liści!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/karuzela1.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h3>Sprawdź rozpoznawacz liści</h3>

        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/karuzela2.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h3>Lub już dziś poznaj nowy liść!</h3>

        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div></div>

  <div class="col-sm-4 float-none" style = "padding: 1em">
    <div class="alert alert-primary tab-content" role="alert">
      <h2>Kącik wróżb </h2>
      <p>Wybierz swoje drzewo i zobacz, co czeka Cię w roku 2018! </p>

<img src="images/modrzew.jpg" id="modrzew" class="drzewa" onclick="diffImage(this)" alt="drzewo">
<img src="images/klonklon.jpg" id="klonklon" class="drzewa" onclick="diffImage(this)" alt="drzewo">
<img src="images/olcha.jpg" id="olcha" class="drzewa" onclick="diffImage(this)" alt="drzewo">
<img src="images/mirt.jpg" id="mirt" class="drzewa" onclick="diffImage(this)" alt="drzewo">
<img src="images/sliwka.jpg" id="sliwka" class="drzewa" onclick="diffImage(this)" alt="drzewo">
<img src="images/dab.jpg" id="dab" class="drzewa" onclick="diffImage(this)" alt="drzewo" />
<img src="images/lipalipa.jpg" id="lipalipa" class="drzewa" onclick="diffImage(this)" alt="drzewo">
<img src="images/kasztan.jpg" id="kasztan" class="drzewa" onclick="diffImage(this)" alt="drzewo">
<img src="images/wierzba.jpg" id="wierzba" class="drzewa" onclick="diffImage(this)" alt="drzewo">


    </div>
    </div>

</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>




</div>

</body>
</html>
