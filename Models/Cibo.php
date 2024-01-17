<?php

require_once __DIR__ . "/Product.php";
require_once __DIR__ ."/Cliente.php";

class Cibo extends Product
{
    public $grami;
    public $gusto;

    public function __construct($name, $price, $description, $imgUrl, Category $category, $registrato, $grami, $gusto) 
    {
        parent::__construct($name, $price, $description, $imgUrl, $category, $registrato);
        $this->grami = $grami;
        $this->gusto = $gusto;

        
    }
    
}
