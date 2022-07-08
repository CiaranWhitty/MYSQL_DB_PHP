<?php
  include_once "../components/header.php";
?>

<?php
$conn = mysqli_connect("localhost", "root", "") or die(mysql_error());
echo "Connected to MySQL<br/>";

mysqli_select_db($conn, "testdatabase")or die(mysql_error());
echo "Conected to MySQL Database<br/>";
?>



