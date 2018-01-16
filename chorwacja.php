<!doctype html>
<html lang="en">

<head>
<title>POMOCNIIIIK</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
<link id="stylesheet-link" rel="stylesheet" href="styleciemny.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Codystar">
<link rel="stylesheet" href="styl.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script src="javovyskrypt.js"></script>


<script src="snieg.js"></script>

</head>

<body>


<div class="container">

<header>

 <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Styl</a>
 <div class="dropdown-menu">
  <a class="dropdown-item" href="#" onclick="event.preventDefault(); setTheme('styleciemny')">Ciemny</a>
  <a class="dropdown-item" href="#" onclick="event.preventDefault(); setTheme('styles')">Kolorowy</a>
</div>

<h1>Pomocnik Leśnika</h1>

<ul class="nav justify-content-end" id="links">

  <?php  if (isset($_SESSION['username'])) : ?>
    <li class="nav-item">
      <a href="rozpoznawacz.php?logout='1'">Wyloguj się</a>
    </li>
  <?php endif ?>
  <?php  if (!isset($_SESSION['username'])) : ?>
    <li class="nav-item">
             
      <a href="login.php"><p>  <i class="fa fa-heart" aria-hidden="true"></i>Zaloguj się    </p></a>
    </li>
    <li class="nav-item">
              
      <a href="register.php"> <p> <i class="fa fa-leaf" aria-hidden="true"></i> Zarejestruj się</p></a>
    </li><?php endif ?>
  </ul>

</header>

<ul class="nav nav-pills nav-fill">
  <li class="nav-item">

    <a  href="index.php"><button class="nav-link btn btn-outline-primary btn-block" id="home-menu" type="button"><span class="glyphicon glyphicon-star"></span>HOME</button></a>
  </li>

  <li class="nav-item">
    <a href="rozpoznawacz.php"><button class="nav-link btn btn-outline-success btn-block" type="button" id="rozpoznawacz-menu" href="rozpoznawacz.php">ROZPOZNAWACZ</button></a>
  </li>
  <li class="nav-item">
    <a href="lisc_na_dzis.php"><button class="nav-link btn btn-outline-danger btn-block" id="lisc-na-dzis-menu" type="button">LIŚĆ NA DZIŚ</button></a>
  </li>
  <li class="nav-item">
    <a href="chat.php"><button class="nav-link btn btn-outline-warning btn-block" id="chat-menu" type="button">CHAT</button></a>
  </li>

  <?php  if (isset($_SESSION['username']) && $_SESSION['username']=="koala") : ?>
    <li class="nav-item">
      <a href="dodaj_listek.php"><button class="nav-link btn btn-outline-secondary btn-block" id="dodaj-menu" type="button"  >DODAJ LIŚĆ</button></a>
    </li>
  <?php endif ?>

</ul>