<?php
  include_once "./components/header.php";
?>

<?php
  mysqli_select_db($conn, "testdatabase")
	or die("ERROR: Connection With Database. " . mysqli_connect_error());
  echo "Connected to MySQL Database<br/>";

  mysqli_query($conn, 
  "SELECT * FROM example")
    or die("ERROR: No Table. " . mysqli_connect_error());
    echo "Table Working";
?>



