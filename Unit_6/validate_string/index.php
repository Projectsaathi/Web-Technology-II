<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Validate String</title>
</head>
<body>
    <form action="#" method="POST">
        Enter Any String: <input type="text" name="string">
        <input type="submit">
    </form>
    <?php
            $string = $_POST['string'];
            if(!preg_match("/^[a-zA-Z]*$/", $name))
            {
                $errMsg = "Only Aplhabets and Whitespace are accepted";
            }
    ?>
</body>
</html>