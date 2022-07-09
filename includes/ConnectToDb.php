<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword);

if(!$conn){
  die("ERROR: Could not connect. " . mysqli_connect_error());	
}
echo "*MYSQL Connected Successfully*";
?>


