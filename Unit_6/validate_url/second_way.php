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
    if (preg_match("/^(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i", $url)) {
        echo "Valid";
    } else {
        echo "invalid";
    }
    ?>
</body>
</html>