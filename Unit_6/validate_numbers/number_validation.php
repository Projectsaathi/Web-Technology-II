<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Number Validation</title>
</head>
<body>
    <form action="#" method="POST">
        Enter Any Number:<input type="text" name="number">
        <input type="submit">
    </form>

    <!-- Method 1: Using Regular Expression -->
    <?php
        $number = $_POST['number'];
    if (preg_match('/^[0-9]+$/', $number)) {
        echo "valid";
    } else {
        echo "invalid";
    }
    ?>
    <!-- End Method 1 -->

    <!-- Method 2: Using Library Function is_numeric() -->
     <?php
        $number = $_POST['number'];
        if(is_numeric($number))
        {
            echo "valid";
        }
        else{
            echo "invalid";
        }
    ?>
</body>
</html>