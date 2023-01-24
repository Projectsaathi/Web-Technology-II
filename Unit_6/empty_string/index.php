<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Empty String Validation</title>
</head>
<body>
    <form action="#" method="POST">
        <input type="text" name="stringName" placeholder="Enter Any String">
        <input type="submit">
    </form>

    <?php
        $string = $_POST['stringName'];
        if(empty($string))
        {
            echo "Please, enter any string";
        }
        else{
            echo "Your entered String is:  " . $string;
        }
    ?>
</body>
</html>