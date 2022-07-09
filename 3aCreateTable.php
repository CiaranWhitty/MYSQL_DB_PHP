<?php
  include_once "./components/header.php";
?>

<?php
  mysqli_select_db($conn, "testdatabase")
	or die("ERROR: Connection With Database. " . mysqli_connect_error());
  echo "Connected to MySQL Database<br/>";

  mysqli_query($conn, 
  "CREATE TABLE example(
    id INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(id), 
    name VARCHAR(30), 
    age INT
    )")
    or die("ERROR: Creating Table. " . mysqli_connect_error());
    echo "Table Created";
?>