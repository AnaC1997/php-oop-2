<?php

require_once __DIR__ . "/Product.php";

class Accesorio extends Product
{
    public $meteriale;
    public $colore;

    public function __construct($name, $price, $description, $imgUrl, Category $category, $meteriale, $colore) 
    {
        parent::__construct($name, $price, $description, $imgUrl, $category);
        $this->meteriale = $meteriale;
        $this->colore = $colore;
        
    }
    
}