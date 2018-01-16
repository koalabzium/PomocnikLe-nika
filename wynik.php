<?php
$q = $_REQUEST['q'];

$con =mysqli_connect('localhost', 'root', '', 'registration');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

 $result3 = mysqli_query($con, "SELECT nazwa,opis,zrodlo FROM listki WHERE id = '".$q."'");

$row2 = mysqli_fetch_row($result3);
echo json_encode($row2);
?>