<?php

 require_once __DIR__ . "/Category.php";
 require_once __DIR__ ."/Cliente.php";
//Variabili d'istanza Prodotto
class Product 
{   
  
    public $name;
    public $price;
    public $description;
    public $imgUrl;

    public $category;

    use Cliente;

    

    //Costruttore

    public function __construct($name, $price, $description, $imgUrl, Category $category, bool $registrato)
    {    
    
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->imgUrl = $imgUrl;
        $this ->category = $category;
        $this ->registrato = $registrato;
     
        

    }

    

    //Metodi

    //GETTER AND SETTER NAME
    public function getName()
    {
        return $this->name;
    }
    public function setName($nuovoName)
    {   
        $this->name = $nuovoName;
    }    

    //GETTER AND SETTER PRICE

    public function getPrice()
    {

       $prezzoScontato = $this->price ;

        if($this->registrato){
            echo "-20% di sconto ". number_format($prezzoScontato = $prezzoScontato - ($prezzoScontato * 0.20),2);

        } else{
            echo "Prezzo pieno: ";
            return $prezzoScontato;
        }
        
    }
    public function setPrice($price)
    { 
         $this->price = $price;
    }

    //GETTER AND SETTER DESCRIPTION
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($nuovaDescription)
    { 
         $this->description = $nuovaDescription;
    }

    //GETTER AND SETTER IMG
    public function getimgUrl()
    {
        return $this->imgUrl;
    }
    public function setImgUrl($nuovaImgUrl)
    { 
         $this->imgUrl = $nuovaImgUrl;
    }









}


