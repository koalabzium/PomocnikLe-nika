<?php include('server.php') ?>
<?php include('chorwacja.php'); ?>




  <div class="col-10" style="padding: 2em">
  <form method="post" action="login.php">

    <?php include('errors.php'); ?>

    <div class="form-group">
      <label>Username</label>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nazwa użytkownika" name="username" >
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Wpisz hasło" name="password">
      <small id="emailHelp" class="form-text text-muted">Jeśli nie pamiętasz hasła to bardzo mi przykro.</small>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-outline-primary" name="login_user">Zaloguj</button>
    </div>
    <p>
      Nie masz jeszcze konta? <a href="register.php">Zarejestruj się</a>
    </p>
  </form>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>