<?php
trait Cliente
{
    public $registrato = false; 
   
    public function getRegistro()
    {
       return $this->registrato;
    }
   
}