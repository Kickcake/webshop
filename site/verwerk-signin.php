<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
    include '405.php';
    exit;
}
if (!isset($_POST['email'])) {
    header("location: Sign-in.php");
    exit;
}
if (empty($_POST['email'])) {
    header("location: Sign-in.php");
    exit;
}
if (!isset($_POST['password'])) {
    header("location: Sign-in.php");
    exit;
}
if (empty($_POST['password'])) {
    header("location: Sign-in.php");
    exit;
}
$email = $_POST['email'];
$password = $_POST['password'];
require 'database.php';
$sql = "SELECT * FROM accounts WHERE email = '$email' ";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);
if (!is_array($user)) {
    header("location: Sign-in.php");
}
if (is_bool($user)) {
    header("location: Sign-in.php");
}
if ($user['password'] === $_POST['password']); {
    session_start();

    $_SESSION['SignedIn'] = true;
    $_SESSION['sname'] = $user['name'];

    if ($user['role'] === 'admin') {
        header("location: dashadmin.php");
    }
    if ($user['role'] === 'user') {
        header("location: dash.php");
    }

    header("location: dash.php");
    exit;
}
header("location: sign-in.php");
exit;

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
    <h1>yo cool je ben ingelogt denk ik</h1>
</body>

</html>