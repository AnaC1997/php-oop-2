<?php

class Category
{
    //Variabili d'istanza categorie (Cane, gatti)
    public $name;

     //Construttore

     public function __construct($name){
        $this->name = $name;
       
     }

    //Metodi 

    public function getName(){
        return $this->name;
    }

}