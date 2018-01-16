<?php include('server.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <style>
      

      header, footer {
    padding: 1em;
    color: white;
   background: url("kolorowe_liscie.jpg");
    clear: left;
    text-align: center;
        
}
      
    
    </style>
    <title>POMOCNIIIIK</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  
  <body>
    <header>
  <h1>Pomocnik Leśnika</h1>

   <ul class="nav justify-content-end" id="links">
  
  <li class="nav-item">
    <a class="nav-link btn-outline-light" href="login.php" id="log" type="button" >Zaloguj się</a>
  </li>
  <li class="nav-item">
    <a class="nav-link btn-outline-light" href="register.php" id="zar" type="button">Zarejestruj się</a>
  </li>
  
      
</ul>
</header>
    
    <div class="row">
  <div class="col-2">
    <div class="list-group" id="list-tab" role="tablist" >
      <a type="button" class="list-group-item  btn-outline-primary" href="index.php" role="tab" aria-controls="home" >HOME</a>
    </div>
  </div>
  <div class="col-10" style="padding: 2em">
  <form method="post" action="register.php">

    <?php include('errors.php'); ?>

    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
      Already a member? <a href="login.php">Sign in</a>
    </p>
  </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>