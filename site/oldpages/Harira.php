<?php
require_once 'database.php';

$stmt = $conn->prepare("SELECT * FROM `Recepten` WHERE id = 3;");

$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$recepten = $stmt->fetchAll();
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

    <div>
        <img class="sideimg" src="images/barotrauma.gif" alt="sideimg">
    </div>
    <main>
        <div class="recept">
            <?php foreach ($recepten as $recept) : ?>
                <a class="recept-card">
                    <div class="stitle">
                        <h1><?php echo $recept['name'] ?></h1>
                    </div>
                    <div class="sinfo">
                        <p>Niveau: <?php echo $recept['level'] ?><br>
                            Gang: <?php echo $recept['course'] ?><br>
                            <?php echo $recept['amount'] ?> Personen<br>
                            Duur: <?php echo $recept['time'] ?><br>
                            <?php echo $recept['stuff'] ?> ingredienten
                        </p>
                    </div>
                    <div class="simg">
                        <img src="<?php echo $recept['image'] ?>">
                    </div>

                </a>
            <?php endforeach; ?>
        </div>
    </main>
    <footer>
        <p>okokok</p>
    </footer>
</body>


</html>