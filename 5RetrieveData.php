<?php
  include_once "./components/header.php";
?>

<?php
  mysqli_select_db($conn, "testdatabase")	
    or die("ERROR: Connection With Database. " . mysqli_connect_error());
    echo "Connected to MySQL Database<br/>";

  // Retrieve all the data from the "example" table
  $result = mysqli_query($conn, "SELECT * FROM example") 
    or die("ERROR: Selecting Data. " . mysqli_connect_error());
  
  // store the record of the "example" table into $row
  $row = mysqli_fetch_array( $result );
  // Print out the contents of the entry
  
  echo "Name: ".$row['name'];
  echo " Age: ".$row['age'];
?>

<?php
include_once "./components/footer.php";
?>
