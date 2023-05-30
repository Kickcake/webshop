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
    <title>new product</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include 'compents/header.php' ?>
    <main>
        <div class="container">
            <div class="head">
                <h1>New product</h1>
            </div>
            <form id="new1" class="form" action="verwerk-nieuw-product.php" method="post">
                <label for="namep">Name product</label>
                <input type="text" name="namep" id="namep">

                <label for="brandp">Brand product</label>
                <input type="text" name="brandp" id="brandp">

                <label for="pricep">Prijs product</label>
                <input type="text" name="pricep" id="pricep">

                <label for="categoryp">Category product</label>
                <input type="text" name="categoryp" id="categoryp">

                <label for="amountp">Amount product</label>
                <input type="text" name="amountp" id="amountp">

                <label for="descp">Description product</label>
                <input type="text" name="descp" id="descp">

                <label for="imagep">Name image</label>
                <input type="text" name="imagep" id="imagep" placeholder='"Image.jpg"'>


                <button class="formbutton" type="submit">Create new product!</button>
            </form>
        </div>
    </main>
    <?php include 'compents/footer.php'; ?>

</body>

</html>