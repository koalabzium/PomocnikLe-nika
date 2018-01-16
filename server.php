<?php session_start();

$username = "";
$email    = "";
$errors = array(); 
$_SESSION['success'] = "";


$db = mysqli_connect('localhost', 'root', '', 'registration');

if (isset($_POST['reg_user'])) {

	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$uzytkownik = mysqli_query($db, "SELECT * FROM users");
	while ($row = mysqli_fetch_array($uzytkownik)){
		if($username == $row[1]){
			array_push($errors, "Podana nazwa juz istnieje. Bardzo mi przykro :(");
		}
		if($email==$row[2]){
			array_push($errors, "Podany e-mail juz istnieje. Bardzo mi przykro :(");		
		}

	}
	
	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

	if (empty($username)) { array_push($errors, "Zapomniałaś/eś podać nazwy użytkownika"); }
	if (empty($email)) { array_push($errors, "Zapomniałaś/eś podać emaila :)"); }
	if (empty($password_1)) { array_push($errors, "Hola hola, poproszę hasło."); }

	if ($password_1 != $password_2) {
		array_push($errors, "Hasła sie nie zgadzają...");
	}

	if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database
		$query = "INSERT INTO users (username, email, password) 
				  VALUES('$username', '$email', '$password')";
		mysqli_query($db, $query);

		$_SESSION['username'] = $username;
		$_SESSION['success'] = "Gratulacje jestes zalogowany!";
		header('location: index.php');
		echo $username;
	}

}

if (isset($_POST['login_user'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if (empty($username)) {
		array_push($errors, "Hola hola, a nazwa użytkownika?");
	}
	if (empty($password)) {
		array_push($errors, "Hola hola, poproszę hasło.");
	}

	if (count($errors) == 0) {
		$password = md5($password);
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) {
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}


	$nazwa = "";
$opis = "";
$zrodlo = "";
 
 

if (isset($_POST['dodaj'])) {
	$nazwa = $_POST['nazwa'];
		$opis = $_POST['opis'];
		$zrodlo = $_POST['zrodlo'];
	
	mysqli_query($db, "INSERT INTO listki (nazwa, opis, zrodlo) VALUES ('$nazwa', '$opis', '$zrodlo')"); }




	$name = "";
	$address = "";
	$img = "";
	$id = 0;
	$update = false;



	if (isset($_POST['save'])) {
		$name = $_SESSION['username'];
		$address = $_POST['address'];
		$img = $_POST['img'];

		mysqli_query($db, "INSERT INTO info (name, address, img) VALUES ('$name', '$address', '$img')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: rozpoznawacz.php');
	}




?>



<?php $results = mysqli_query($db, "SELECT * FROM info"); ?>

<?php $wynik = mysqli_query($db, "SELECT * FROM listki"); ?>

