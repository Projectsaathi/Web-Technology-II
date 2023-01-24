<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mobile Number Validation</title>
</head>
<body>
    <form action="#" method="POST">
      Enter Mobile Number:<input type="number" name="mobile_number">
        <input type="submit">
    </form>
    <?php
        $mobile = $_POST['mobile_number'];
    $length = strlen($mobile);
    if ($length == 10) {
        echo "Number is Valid: " . $mobile;
    } else {
        echo "Mobile Number is not Valid";
    }
    ?>
</body>
</html>