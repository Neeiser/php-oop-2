<?php

include_once __DIR__ . '/mainClass.php';
class Toy extends AnimalProduct
{
    public $toyName;
    public $toyMaterial;
    public $toyDimension;

    //--------------------------
    //Costructor:
    //--------------------------
    public function __construct($itemDestination, $itemDisponibility, $itemQuantity, $itemPrice, $toyName, $toyMaterial, $toyDimension)
    {

        parent::__construct($itemDestination, $itemDisponibility, $itemQuantity, $itemPrice);

        $this->toyName = $toyName;
        $this->toyMaterial = $toyMaterial;
        $this->toyDimension = $toyDimension;
    }

    //--------------------------
    //Get Methods:
    //--------------------------
    public function getToyName(){
        return $this->toyName;
    }

    public function getToyMaterial(){
        return $this->toyMaterial;
    }

    public function getToyDimension(){
        return $this->toyDimension;
    }

    //--------------------------
    //Set Methods:
    //--------------------------
    public function setToyName($toyName){
        $this->toyName = $toyName;
    }

    public function setToyMaterial($toyMaterial){
        $this->toyMaterial = $toyMaterial;
    }

    public function setToyDimension($toyDimension){
        $this->toyDimension = $toyDimension;
    }
}