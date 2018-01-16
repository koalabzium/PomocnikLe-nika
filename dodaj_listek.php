<?php include('server.php') ?>
<?php include('chorwacja.php'); ?>
  



  <div class="col-10" style="padding: 2em">
  <form method="post" action="register.php">


    <div class="form-group">
      <label>Nazwa</label>
      <input type="text" placeholder="Jak nazywa się nowy liść?" class="form-control" name="nazwa" value="<?php echo $nazwa; ?>">
    </div>
    <div class="form-group">
      <label>Opis</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Najważniejsze info o liściu."  name="opis" rows="3" value="<?php echo $opis; ?>"></textarea>

    </div>
    <div class="form-group">
      <label>Zrodlo</label>
      <input type="text" class="form-control" name="zrodlo" placeholder="Url do liścia" value="<?php echo $opis; ?>">
    </div>
    
    <div class="form-group">
      <button type="submit" class="btn btn-outline-primary" name="dodaj">Dodaj listek!</button>
    </div>
  </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>