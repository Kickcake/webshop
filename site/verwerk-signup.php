<?php
require 'database.php';

$email = $_POST['txtEmail'];
$name = $_POST['txtName'];
$pass = $_POST['txtPass'];

$sql = "INSERT INTO accounts (email, name, password) VALUES ('$email', '$name', '$pass' )";

mysqli_query($conn, $sql);
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