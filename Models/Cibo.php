<?php

require_once __DIR__ . "/Product.php";

class Cibo extends Product
{
    public $grami;
    public $gusto;

    public function __construct($name, $price, $description, $imgUrl, Category $category, $grami, $gusto) 
    {
        parent::__construct($name, $price, $description, $imgUrl, $category);
        $this->grami = $grami;
        $this->gusto = $gusto;
        
    }
    
}
