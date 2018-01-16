<?php include('server.php') ?>
<?php include('chorwacja.php'); ?>
  



  <div class="col-10" style="padding: 2em">
  <form method="post" action="register.php">

    <?php include('errors.php'); ?>

    <div class="form-group">
      <label>Username</label>
      <input type="text" placeholder="Wpisz nazwę użytkownika" class="form-control" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Wpisz email"  name="email" value="<?php echo $email; ?>">
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control" name="password_1" placeholder="Wpisz hasło">
    </div>
    <div class="form-group">
      <label>Confirm password</label>
      <input type="password" class="form-control" name="password_2" placeholder="Potwierdź hasło">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-outline-primary" name="reg_user">Zarejestruj się</button>
    </div>
    <p>
      Masz już konto? <a href="login.php">Zaloguj się</a>
    </p>
  </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>