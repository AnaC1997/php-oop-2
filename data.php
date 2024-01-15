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
        "Giocattolo a Masticare",
        "20.99€",
        "Giocattolo resistente per cani con effetto massaggiante sulle gengive.",
        "https://cdn.manomano.com/images/images_products/30876563/P/109980211_1.jpg",
        new Category("Dogs")
    ),

    new ProductType (
        "Cuscino Ortopedico",
        "40.99€",
        "Cuscino ortopedico per cani anziani o con problemi articolari.",
        "https://cdn.manomano.com/images/images_products/21959017/P/87220618_1.jpg",
        new Category("Dogs")
    ),

    new ProductType (
        "Snack Dental",
        "50.99€",
        "Snack per cani che promuovono la salute dentale.",
        "https://croci.net/wp-content/uploads/2023/01/Snack_cane_Dental_Defence_Veg_Arachidi.jpg",
        new Category("Dogs")
    ),


];


$productsForCats = [
    new ProductType (
      "Giostra Interattiva",
      24.99,
      "Giostra interattiva con palle luminose per intrattenere il tuo gatto.",
      "https://cdn.manomano.com/images/images_products/30876563/P/96815654_1.jpg",
      new Category("Cats")
    ),

    new ProductType (
      "Lettiera Antibatterica",
      15.79,
      "Lettiera per gatti con formula antibatterica per una pulizia duratura.",
      "https://www.picclickimg.com/j4oAAOSwDkJfRhlk/Kitty-Friend-precedentemente-Sanicat-lettiera-antibatterica-per-gatti.webp",
      new Category("Cats")
    ),

    new ProductType (
      "Alimentatore Automatico",
      49.99,
      "Alimentatore automatico programmabile per gatti.",
      "https://ae01.alicdn.com/kf/S50d7a17301fc4b928a8a7da54241885dL.jpg_640x640Q90.jpg_.webp",
      new Category("Cats")
    ),

    new ProductType (
      "Giocattolo a Piuma",
      7.99,
      "Giocattolo per gatti con piume per stimolare l'istinto di caccia.",
      "https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/c4c65a6de13d7efad693914a9660fa3e.jpg?imageMogr2/auto-orient%7CimageView2/2/w/800/q/70/format/webp",
      new Category("Cats")
      )
  ];
  