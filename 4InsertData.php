<?php
  include_once "./components/header.php";
?>

<?php
	mysqli_select_db($conn, "testdatabase")
		or die("ERROR: Connection With Database. " . mysqli_connect_error());
		echo "Connected to MySQL Database<br/>";

	//Insert a row of information into the table "example" 
	mysqli_query($conn, "INSERT INTO example
		(name, age)
		VALUES('Timmy Mellowman', '23' )") 
		or die("ERROR: Inserting. " . mysqli_connect_error());
	
	mysqli_query($conn, "INSERT INTO example 
		(name, age)
		VALUES('Sandy Smith', '21' ) ") 
		or die("ERROR: Inserting. " . mysqli_connect_error());
	
	mysqli_query($conn, "INSERT INTO example
		(name, age)
		VALUES('Bobby Wallace', '15' ) ") 
		or die("ERROR: Inserting. " . mysqli_connect_error());
	
	echo "Data Inserted!";
?>

<?php
include_once "./components/footer.php";
?>
