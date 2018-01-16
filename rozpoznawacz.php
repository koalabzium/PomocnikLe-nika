<?php  include('server.php'); ?>

<?php 
  //session_start(); 

if (!isset($_SESSION['username'])) {
  header('location: login.php');
}

if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: rozpoznawacz.php");
}



?>
<?php include('chorwacja.php'); ?>






<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-4" style="padding: 1em">



    <div class="card" id="start" >

      <img class="card-img-top" src="images/start.jpg" alt="Card image cap">
      <a href="#" class="btn btn-outline-success" onclick="rozpoznawacz(2)">START</a>
    </div>


    <div class="card rozp" id="rozp">

      <img class="card-img-top" id="rozp-zdj" src="images/iglastetekst.jpg" alt="Card image cap">
      <div class="row">
        <div class="col-sm-6">
          <a href="#" class="btn btn-outline-success nana" onclick="rozpoznawacz(1)"><i class="fa fa-check" aria-hidden="true"></i></a>
        </div>
        <div class="col-sm-6">
          <a href="#" class="btn btn-outline-danger nana" onclick="rozpoznawacz(0)"><i class="fa fa-times" aria-hidden="true"></i>
          </a></div>
        </div>

      </div>


      <div class="card rozp bg-light" id="wynik">
        <div class="card-header">
          <h3  >Gratulacje, Twój liść to:</h3>
        </div>
        <img class="card-img-top" id="zdj-liscia" src="..." alt="Card image cap">
        <div class="card-header">
          <h3  id="nazwa-liscia">...</h3>
        </div>
        <div class="card-body float-right">
          <p class="card-text"  id="opis-liscia">...</p>
          <a href="#" class="btn btn-outline-success" onclick="rozpoznawacz(3)">SPRÓBÓJ JESZCZE RAZ</a>
        </div>

      </div>

    </div>

    <div class="col-sm-5" style="padding: 1em">

      <div class="card bg-light float-right" style="color:black">

        <div class="card-header">
          
          <form method="post" action="server.php" >

            <div class="form-group">
              <textarea class="form-control float-left" id="exampleFormControlTextarea1" rows="3" name="address"></textarea>
              <label>Podaj url obrazka: </label>
              <input type="text"  class="form-control" name="img" value="">
            </div>
            <div class="form-group">
              <button class="nav-link btn btn-outline-success " type="submit" name="save" >Dodaj komentarz</button>
            </div>
          </form>
        </div>

        <div class="card-body">

          <?php while ($row = mysqli_fetch_array($results)) { ?>

          <div class="card text-white bg-dark mb-3 d-inline-flex w-100" style="color:black"  >
            <div class="card-header"  style="color:black" ><?php echo $row['name']; ?>:</div>
            <div class="card-body col">
              <p class="card-text row-6"  style="color:black" ><?php echo $row['address']; ?>
                <img class="card-img-right float-xl-right" src="<?php echo $row['img']; ?>" alt="Zdjęcie liścia"></p>
              </div>

              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>



    


  </body>
  </html>