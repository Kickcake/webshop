<div class="recepten">
    <?php
    $sql = "SELECT * FROM products;";
    $recepten = mysqli_query($conn, $sql);
    $count = mysqli_fetch_assoc($recepten);
    foreach ($recepten as $recept) : ?>
        <a href="product.php?id=<?php echo $recept['id'] ?>" class="recept-card">
            <div class="rpers">
                <p><?php echo $recept['amount'] ?> </p>
            </div>
            <div class="rtijd">
                <p>Duur: <?php echo $recept['rating'] ?></p>
            </div>
            <div class="ring">
                <p><?php echo $recept['price'] ?> </p>
            </div>
            <div class="rlevel">
                <p>Niveau: <?php echo $recept['category'] ?></p>
            </div>
            <div class="rtitle">
                <h1><?php echo $recept['name'] ?></h1>
            </div>
            <div class="rimg"><img src="<?php echo $recept['image'] ?>"></div>

        </a>
    <?php endforeach; ?>
</div>