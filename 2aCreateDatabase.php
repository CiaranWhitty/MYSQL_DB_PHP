<?php
  include_once "./components/header.php";
?>

<?php
  mysqli_query($conn, "CREATE DATABASE testdatabase")
    or die("ERROR: Creating Database. " . mysqli_connect_error());
    echo "Database Created";
?>

<?php
include_once "./components/footer.php";
?>
