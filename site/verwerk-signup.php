<?php
require 'database.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST")
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
include '405.php';
exit;
$email = $_POST['txtEmail'];
$name = $_POST['txtName'];
$pass = $_POST['txtPass'];

$sql = "INSERT INTO tools (email, name, password) 
                   VALUES ('$email', '$name', '$pass')";

var_dump(mysqli_query($conn, $sql));
