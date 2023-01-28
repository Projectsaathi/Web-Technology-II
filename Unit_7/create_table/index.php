<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Table using PHP </title>
</head>
<body>
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
    echo "Connected successfully";

    // Create table
    $sql = "CREATE TABLE Students (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            gender VARCHAR(10)
            )";

    if (mysqli_query($conn, $sql)) {
        echo "Table Students created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>
</body>
</html>