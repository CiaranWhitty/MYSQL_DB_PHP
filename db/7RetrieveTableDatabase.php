<?php
  include_once "../components/header.php";
?>

<?php
$conn = mysqli_connect("localhost", "root", "") or die(mysql_error());
echo "Connected to MySQL<br/>";

mysqli_select_db($conn, "testdatabase")or die(mysql_error());
echo "Conected to MySQL Database<br/>";

// Get all the data from the "example" table
$result = mysqli_query($conn, "SELECT * FROM example") or die(mysql_error());

echo "<table border='1'>";
echo "<tr> <th>Name</th> <th>Age</th> </tr>";
//keeps getting the next row until there are no more to get 
while($row = mysqli_fetch_array( $result )) {
// Print out the contents of each row into a table
echo "<tr><td>"; 
	echo $row['name'];
echo "</td><td>";
	echo $row['age'];
echo "</td></tr>";
} 
 
echo "</table>";
?>