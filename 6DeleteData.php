<?php
  include_once "./components/header.php";
?>

<?php
  mysqli_select_db($conn, "testdatabase")	
    or die("ERROR: Connection With Database. " . mysqli_connect_error());
    echo "Connected to MySQL Database<br/>";

  mysqli_query($conn, "DELETE FROM example")
    or die("ERROR: Deleting Data. " . mysqli_connect_error());
    echo "All Data Deleted";
?>

<?php
include_once "./components/footer.php";
?>
