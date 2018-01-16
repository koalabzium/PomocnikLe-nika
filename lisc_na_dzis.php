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

<div class="clearfix" id="nav-tabContent" style = "padding: 2em;" >
  
  <?php

  $losowa = date("z")%11+3-1;



  $result2 = mysqli_query($db, "SELECT nazwa,opis,zrodlo FROM listki WHERE id = '$losowa'");
  if (!$result2) {
    echo 'Nie można uruchomić zapytania: ' . mysql_error();
    exit;
  }
  $row = mysqli_fetch_row($result2);

  ?>


  <div class="card horizontal-center pagination-centered bg-danger" id="inner" >
    <img class="card-img-top" src="<?php  echo $row[2]; ?>" alt="Card image cap">
    <div class="card-header">
      <h3 style="text-align:center;"><?php echo $row[0];?></h3>
    </div>
    <div class="card-body float-right">
      <p class="card-text"><?php echo $row[1]; ?></p>
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