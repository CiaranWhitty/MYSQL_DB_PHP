<?php
  include_once "./components/header.php";
?>

<?php
  mysqli_query($conn, 
  "DROP DATABASE testdatabase")
    or die("ERROR: Deleting Database. " . mysqli_connect_error());
    echo "Database Deleted";
?>