<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Operation using PHP</title>
</head>
<body>
    <form action="#" method="POST">
        <div>
            First Name:<input type="text" name="firstname">
        </div>
        <div>
            Last Name:<input type="text" name="lastname">
        </div>
        <div>
            Email: <input type="email" name="email">
        </div>
        <div>
            <label>Gender:</label>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Other">Other
        </div>
        <input type="submit" name="insert" value="Insert">
    </form>
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

    // Prepare and bind
    $stmt = mysqli_prepare($conn, "INSERT INTO Students (firstname, lastname, email, gender) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "ssss", $firstname, $lastname, $email, $gender);

    // Set parameters and execute
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    mysqli_stmt_execute($stmt);

    // echo "New Student created successfully";
   

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    ?>
</body>
</html>