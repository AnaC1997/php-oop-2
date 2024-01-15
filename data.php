<?php

require_once __DIR__ . "/Models/ProductType.php";


$productsForDogs = [
    new ProductType (
        "Ciotola Resistente",
        "19.99€",
        "Ciotola in acciaio inossidabile resistente per cani di tutte le taglie.",
        "https://www.galleranistore.it/media/catalog/product/cache/1/image/600x/040ec09b1e35df139433887a97daa66f/c/i/ciotola_blu.jpg",
        new Category("Dogs")
    ),
    new ProductType (
        "Snack Dental",
        "19.99€",
        "Snack per cani che promuovono la salute dentale.",
        "https://www.loradeglianimali.it/304866/giuntini-crancy-dental-snack-per-cani-medium-maxida-7-pz.jpg",
        new Category("Dogs")
    ),

];