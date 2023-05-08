<?php
if (!empty($_POST['txtEmail'])) {
    $email = $_POST['txtEmail'];
    $name = $_POST['txtName'];
    $pass = $_POST['txtPass'];

    require 'database.php';

    $sql = "INSERT INTO accounts (email, name, password, ) 
                   VALUES ('$email', '$name', '$pass')";

    mysqli_query($conn, $sql);

    if (mysqli_query($conn, $sql)) {
        header("location: index.php");
        exit;
    }
}
