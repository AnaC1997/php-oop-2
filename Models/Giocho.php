<?php

require_once __DIR__ . "/Product.php";

class Giocho extends Product
{
    public $colore;
    public $size;
    public $peso;

    public function __construct($name, $price, $description, $imgUrl, Category $category, $colore, $size, $peso) 
    {
        parent::__construct($name, $price, $description, $imgUrl, $category);
        $this->colore = $colore;
        $this->size = $size;
        $this->peso = $peso;
    }
    
}


