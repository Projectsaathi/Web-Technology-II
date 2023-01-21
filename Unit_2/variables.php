<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Variables</title>
</head>
<body>
    <?php
        $string = "Do It Yourself";
        $balance = 1050.60;
        $age = 24;
        echo $string . $balance . $age;
    ?>
    <!-- Using Tags -->
    <h1><?php echo $string; ?></h1>
    <h2><?php echo $balance; ?></h2>
    <h3><?php echo $age; ?></h3>
</body>
</html>