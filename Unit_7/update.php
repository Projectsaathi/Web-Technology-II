<?php

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "password", "SPC");

    // Check the connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Update the record
    $sql = "UPDATE Students SET firstname = 'Ravi' WHERE id = 6 ";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Record</title>
</head>
<body>


<?php
require_once 'connection.php';
$sql = "SELECT id, firstname, lastname, gender FROM Students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    ?>
	<table border = "1">
		<tr >
			<th>ID</th>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Gender</th>
		</tr>
		<?php
        while ($row = $result->fetch_assoc()) {
            ?>
			<tr>
			<td><?php echo $row["id"]; ?></td>
			<td><?php echo $row["firstname"]; ?></td>
			<td><?php echo $row["lastname"]; ?></td>
			<td><?php echo $row["gender"]; ?></td>
			</tr>
		<?php
        }
    ?>
	</table>
	<?php
} else {
    echo "0 results";
}
$conn->close();
?>


<!-- Update Button -->
<form action="#" method="POST" style="margin:10px">
	<input type="submit" name="update" value="Update">
</form>
</body>
</html>

