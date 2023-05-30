<?php
require 'database.php';

$email = $_POST['txtEmail'];
$name = $_POST['txtName'];
$pass = $_POST['txtPass'];

$hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
$sql = "INSERT INTO accounts (email, name, password, role) VALUES ('$email', '$name', '$hashed_pass', 'user' )";

mysqli_query($conn, $sql);
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
    <h1>yo cool je ben geberegistreerd</h1>
</body>

</html>