<?php
require_once 'database.php';
session_start();
if (empty($_GET["sort"])) {
    $_GET["sort"] = "id";
}
if (isset($_GET["sort"])) {
    switch ($_GET["sort"]) {
        case "category":
            $sql = "SELECT * FROM `products` ORDER by category Desc;";
            break;
        case "amount":
            $sql = "SELECT * FROM `products` ORDER by amount ASC;";
            break;
        case "price":
            $sql = "SELECT * FROM `products` ORDER by price ASC;";
            break;
        case "rating":
            $sql = "SELECT * FROM `products` ORDER by rating ASC;";
            break;
        default:
            $sql = "SELECT * FROM `products` ORDER by id ASC;";
            break;
    }
}

$recepten = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include 'compents/header.php' ?>
    <main>
        <?php include 'compents/kaart.php'; ?>
    </main>
    <?php include 'compents/footer.php'; ?>
</body>


</html>