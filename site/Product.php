<?php
require 'database.php';
$id = $_GET['id'];

$sql = "SELECT * FROM products WHERE id = '$id';";
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
        <div class="product">
            <?php
            foreach ($products as $product) : ?>
                <a class="recept-card">
                    <div class="stitle">
                        <h1><?php echo $product['name'] ?></h1>
                    </div>
                    <div class="sinfo">
                        <p><?php echo $product['category'] ?> - <?php echo $product['brand'] ?></p>
                        <p>$<?php echo $product['price'] ?></p>
                        <p>rated <?php echo $product['rating'] ?>/5</p>
                        <p><?php echo $product['amount'] ?> left in stock</p>
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