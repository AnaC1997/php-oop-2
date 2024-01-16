<?php

 require_once __DIR__ . "/Category.php";
//Variabili d'istanza Prodotto
class Product
{   
  
    public $name;
    public $price;
    public $description;
    public $imgUrl;
    public $category;

    //Costruttore

    public function __construct($name, $price, $description, $imgUrl, Category $category)
    {    
    
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->imgUrl = $imgUrl;
        $this->category = $category;

    }

    //Metodi
    public function getName()
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getimgUrl()
    {
        return $this->imgUrl;
    }
    public function getCategory()
    {
        return $this->category;
    }
   



}


