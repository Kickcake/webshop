<div class="recepten">
    <?php
    $sql = "SELECT * FROM products;";
    $products = mysqli_query($conn, $sql);
    $count = mysqli_fetch_assoc($products);
    foreach ($products as $product) : ?>
        <a href="product.php?id=<?php echo $product['id'] ?>" class="recept-card">
            <div class="rpers">
                <p>left in stock:<?php echo $product['amount'] ?> </p>
            </div>
            <div class="rtijd">
                <p>5/<?php echo $product['rating'] ?></p>
            </div>
            <div class="ring">
                <p>Price:<?php echo $product['price'] ?> </p>
            </div>
            <div class="rlevel">
                <p><?php echo $product['category'] ?></p>
            </div>
            <div class="rtitle">
                <h1><?php echo $product['name'] ?></h1>
            </div>
            <div class="rimg"><img src="<?php echo $product['image'] ?>"></div>

        </a>
    <?php endforeach; ?>
</div>