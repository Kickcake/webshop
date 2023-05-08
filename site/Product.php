<?php
require 'database.php';
$id = $_GET['id'];

$sql = "SELECT * FROM `products` WHERE id = '$id';";
$products = mysqli_query($conn, $sql);
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
        <img class="sideimg" src="images/160626-haal-marokko-in-huis-5-bron-casa-de-valentina.jpg" alt="sideimg">
    </div>
    <main>
        <div class="recept">
            <?php
            $sql = "SELECT * FROM producten WHERE id = '$id';";
            $products = mysqli_query($conn, $sql);
            $count = mysqli_fetch_assoc($products);
            foreach ($products as $product) : ?>
                foreach ($products as $product) : ?>
                <a class="recept-card">
                    <div class="stitle">
                        <h1><?php echo $product['name'] ?></h1>
                    </div>
                    <div class="sinfo">
                        <p>Niveau: <?php echo $product['level'] ?><br>
                            Gang: <?php echo $product['course'] ?><br>
                            <?php echo $product['amount'] ?> Personen<br>
                            Duur: <?php echo $product['time'] ?><br>
                            <?php echo $product['ing'] ?> ingredienten
                        </p>
                    </div>
                    <div class="simg">
                        <img src="<?php echo $product['image'] ?>">
                    </div>

                </a>
            <?php endforeach; ?>
        </div>
        <?php include 'compents/footer.php'; ?>
    </main>
</body>

</html>