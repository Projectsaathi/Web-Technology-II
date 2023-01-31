<?php
  $servername = "localhost";
  $username = "root";
  $password = "password";
  $dbname = "SPC";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  if (isset($_POST['submit'])) {
    $id = $_POST['id'];

    // SQL statement to delete a record
    $sql = "DELETE FROM Students WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
  }

  mysqli_close($conn);
?>
