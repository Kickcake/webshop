<?php
require 'database.php';
session_start();

if (!isset($_SESSION['SignedIn'])) {
    header("location: Sign-in.php");
}
if (!isset($_SESSION['admin'])) {
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
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include 'compents/header.php' ?>
    <h1>yo cool je ben ingelogt maar adminfg denk ik</h1>
    <p>je naam is <?php echo $_SESSION['sname'] ?></p>
    <p>
        <?php
        require 'vendor/autoload.php';

        use Carbon\Carbon;

        $now = Carbon::now();
        echo $now->add('7 days')->toDateTimeString() . "\n";
        ?>

    </p>
    <p>employees: <?php
                    $sql = "SELECT count(role) as dl FROM `accounts` WHERE role = \"admin\";";
                    $employees = mysqli_query($conn, $sql);
                    $count = mysqli_fetch_assoc($employees);
                    $l = ($count['dl']);
                    echo $l;
                    ?>
    </p>
    <p>
        <?php
        $sql = "SELECT SUM(price) as ok FROM `products`;";
        $priceavg = mysqli_query($conn, $sql);
        $dq = mysqli_fetch_assoc($priceavg);
        $ef = ($dq['ok']);
        echo $ef;
        ?>
    </p>
    <div>
        <a href="logout.php"> log out</a>
    </div>
</body>

</html>