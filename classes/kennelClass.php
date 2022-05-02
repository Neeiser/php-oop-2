<?php

include_once __DIR__ . '/mainClass.php';
class Kennel extends AnimalProduct
{
    public $kennelName;
    public $kennelMaterial;
    public $kennelDimension;

    //--------------------------
    //Costructor:
    //--------------------------
    public function __construct($itemDestination, $itemDisponibility, $itemQuantity, $itemPrice, $kennelName, $kennelMaterial, $kennelDimension)
    {

        parent::__construct($itemDestination, $itemDisponibility, $itemQuantity, $itemPrice);

        $this->kennelName = $kennelName;
        $this->kennelMaterial = $kennelMaterial;
        $this->kennelDimension = $kennelDimension;
    }

    //--------------------------
    //Get Methods:
    //--------------------------
    public function getKennelName(){
        return $this->kennelName;
    }

    public function getKennelMaterial(){
        return $this->kennelMaterial;
    }

    public function getKennelDimension(){
        return $this->kennelDimension;
    }

    //--------------------------
    //Set Methods:
    //--------------------------
    public function setKennelName($kennelName){
        $this->kennelName = $kennelName;
    }

    public function setKennelMaterial($kennelMaterial){
        $this->kennelMaterial = $kennelMaterial;
    }

    public function setKennelDimension($kennelDimension){
        $this->kennelDimension = $kennelDimension;
    }
}