<?php
require __DIR__ . "/data.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-oop-2</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"
        integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <div class="container">
        <h3 class="text-center">Produtti per canni</h3>
        <div class="card" style="width: 18rem;">
        <?php foreach ($productsForDogs as $product) : ?>
            <img src="<?= $product->imgUrl ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"> <?= $product->name ?></h5>
                <p class="card-text"> <?= $product->price ?></p>
                <p class="card-text"> <?= $product->description ?></p>
                <p class="card-text"> <?= $product->description ?></p>
                <p><?=$product->category->name?></p>
                <a href="#" class="btn btn-primary">Compra</a>
            </div>
            <?php endforeach; ?>
        </div>

    </div>

</body>

</html>