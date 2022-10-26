<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['USER_NAME'] = $_REQUEST['username'];
    $_SESSION['PASSWORD'] = $_REQUEST['password'];
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";
}


?>
<!-- start form -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="index.php">
        <input type="text" placeholder="insert username" name="username">
        <input type="password" placeholder="insert password" name="password">

        <input type="submit" value="save">
    </form>
</body>

</html>