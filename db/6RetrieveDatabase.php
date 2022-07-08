<?php
  include_once "../components/header.php";
?>

<?php
$conn = mysqli_connect("localhost", "root", "") or die(mysql_error());
echo "Connected to MySQL<br/>";

mysqli_select_db($conn, "testdatabase")or die(mysql_error());
echo "Conected to MySQL Database<br/>";

// Retrieve all the data from the "example" table
$result = mysqli_query($conn, "SELECT * FROM example") or die(mysql_error());
 
// store the record of the "example" table into $row
$row = mysqli_fetch_array( $result );
// Print out the contents of the entry
 
echo "Name: ".$row['name'];
echo " Age: ".$row['age'];
?>