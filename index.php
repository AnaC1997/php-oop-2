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

<body class="bg-success p-2 bg-opacity-25">

    <section class="container ">
        <!-- Prodotti canne-->
        <h3 class="text-center">PRODOTTI PER CANNI</h3>
        <div class="row flex-nowrap justify-content-center">
            <?php foreach ($productsForDogs as $product): ?>
                <div class="col-3 m-2">
                    <div class="card" style="min-width: 18rem;">
                        <img src="<?= $product->imgUrl ?>" class="card-img-top p-3 w-80" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $product->name ?>
                            </h5>
                            <p class="card-text text-danger">
                                <?= $product->price ?>
                            </p>
                            <p class="card-text">
                                <?= $product->description ?>
                            </p>
                            <p class="text-success">
                            <?= get_class($product) ?>/<?= $product->category->name?>
                            </p>
                            <a href="#" class="btn btn-primary">Compra</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Prodotti gatti-->
        <h3 class="text-center">PRODOTTI PER GATTI</h3>
        <div class="row flex-nowrap justify-content-center">
            <?php foreach ($productsForCats as $product): ?>
                <div class="col-3 m-2">
                    <div class="card" style="min-width: 18rem;">
                        <img src="<?= $product->imgUrl ?>" class="card-img-top p-3 w-80" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $product->name ?>
                            </h5>
                            <p class="card-text text-danger">
                                <?= $product->price ?>
                            </p>
                            <p class="card-text">
                                <?= $product->description ?>
                            </p>
                            <p class="text-success">
                            <?= get_class($product) ?>/<?= $product->category->name?>
                            </p>
                            <a href="#" class="btn btn-primary">Compra</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>



</body>

</html>