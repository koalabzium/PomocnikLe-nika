<?php 
/*$uname = $_REQUEST['uname'];
$msg = $_REQUEST['msg'];

$con = mysqli_connect('localhost', 'root', '','chatbox');


$query = "INSERT INTO logs (username, msg) 
				  VALUES('$uname', '$msg')";
		mysqli_query($con, $query);

$result1 = mysqli_query($con,"SELECT * FROM logs ORDER by id DESC");

while($extract = mysqli_fetch_array($result1)){
 echo "<span class='uname'>". $extract['username']. ": ". "</span:<span class='msg'>" . $extract['msg']. "</span><br>";
 
}*/
 $uname = $_REQUEST['uname'];
 $msg = $_REQUEST['msg'];

 $con= mysqli_connect("localhost","root","") or die ("Could not connect to MySQL!");
 mysqli_select_db($con, "chatbox") or die ("Database not found!");

 $con->query("INSERT INTO logs (`username` , `msg`) VALUES ('$uname','$msg')");
 $result1 = $con->query("SELECT * FROM logs ORDER by id DESC");

 while ($extract = mysqli_fetch_array($result1))
 {
  echo "<span class='uname'>". $extract['username']. " : ". "</span:<span class='msg'>" . $extract['msg']. "</span><br>";
 }
?>

