<?php
  include_once "../components/header.php";
?>

<?php
$conn = mysqli_connect("localhost", "root", "") or die(mysql_error());
echo "Connected to MySQL<br/>";

mysqli_select_db($conn, "testdatabase")or die(mysql_error());
echo "Conected to MySQL Database<br/>";

//Insert a row of information into the table "example" 
mysqli_query($conn, "INSERT INTO example
	(name, age)
	VALUES('Timmy Mellowman', '23' )") or die(mysql_error());
 
mysqli_query($conn, "INSERT INTO example 
	(name, age)
	VALUES('Sandy Smith', '21' ) ") or die(mysql_error());
 
mysqli_query($conn, "INSERT INTO example
	(name, age)
	VALUES('Bobby Wallace', '15' ) ") or die(mysql_error());
 
echo "Data Inserted!";
?>



