<?php
require 'database.php';
session_start();

if (!isset($_SESSION['SignedIn'])) {
    header("location: Sign-in.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dash</title>
</head>

<body>
    <h1>yo cool je ben ingelogt denk ik</h1>
    <p>je naam is <?php echo $_SESSION['sname'] ?></p>
    <div>
        <a href="logout.php"> log out</a>
    </div>
</body>

</html>