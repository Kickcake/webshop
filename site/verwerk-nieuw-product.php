<?php
require 'database.php';

if (!empty($_POST['namep'])) {
    $name = $_POST['namep'];
    $brand = $_POST['brandp'];
    $price = $_POST['pricep'];
    $category = $_POST['categoryp'];
    $amount = $_POST['amountp'];
    $description = $_POST['descp'];
    $image = $_POST['imagep'];

    $sql = "INSERT INTO products (name, brand, rating, price, category, amount, description, image) 
                   VALUES ('$name', '$brand', '3', '$price', '$category', '$amount', '$description', 'images/$image')";

    mysqli_query($conn, $sql);
}
