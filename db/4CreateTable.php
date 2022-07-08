<?php
  include_once "../components/header.php";
?>

<?php
$conn = mysqli_connect("localhost", "root", "") or die(mysql_error());
echo "Connected to MySQL<br/>";

mysqli_select_db($conn, "testdatabase")or die(mysql_error());
echo "Connected to MySQL Database<br/>";

// Create MySQL table

mysqli_query($conn, "CREATE TABLE example(
   id INT NOT NULL AUTO_INCREMENT,
   PRIMARY KEY(id), name VARCHAR(30), age INT)");
   echo "Table Created";
?>



