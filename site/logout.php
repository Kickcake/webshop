<?php
require 'database.php';
session_start();
unset($_SESSION);
session_destroy();
header("location: Sign-in.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'compents/header.php' ?>
    <h1>yo cool je ben iutgelogt denk ik</h1>
</body>

</html>