<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="name"><br>
    <span style="color:red"><?php echo $firstnameError ?></span><br>

    <input type="text" name="classId"><br>
    <span style="color:red"><?php echo $lastnameError ?></span><br>

    <input type="text" name="email"><br>
    <span style="color:red"><?php echo $emailError ?></span><br>
    <input type="submit" value="submit" name="submit">
</form>


</body>
</html>
