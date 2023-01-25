<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>URL Validation</title>
</head>
<body>
    <form action="#" method="POST">
        Enter URL:<input type="text" name="url">
        <input type="submit">
    </form>

    <?php
        $url = $_POST['url'];
        if(filter_var($url, FILTER_VALIDATE_URL))
        {
            echo "Valid";
        }
        else{
            echo "invalid";
        }
    ?>
</body>
</html>