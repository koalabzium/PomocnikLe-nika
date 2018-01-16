<?php 
$con= mysqli_connect("localhost","root","") or die ("Could not connect to MySQL!");
 mysqli_select_db($con, "chatbox") or die ("Database not found!");


 $result1 = $con->query("SELECT * FROM logs ORDER by id DESC");

while($extract = mysqli_fetch_array($result1)){
 echo  $extract['username']. " :  ". $extract['msg']. "<br>";
 
}

?>﻿