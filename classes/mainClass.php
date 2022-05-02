<?php

include_once __DIR__ . '/classes/foodClass.php';
include_once __DIR__ . '/classes/toyClass.php';
include_once __DIR__ . '/classes/kennelClass.php';

class AnimalProduct
{
    private $itemDestination;   //Dogs, Cats, etc.
    private $itemDate;          //On stock since...
    private $itemDisponibility; //Available or not.
    private int $itemQuantity;      //How many items.

    //Costructor:
    public function __construct($itemDestination, $itemDisponibility, $itemQuantity)
    {
        $this->itemDestination = $itemDestination;
        $this->itemDisponibility = $itemDisponibility;
        $this->itemQuantity = $itemQuantity;
    }

    //Get Methods:
    public function getItemDestination(){
        return $this->itemDestination;
    }

    public function getItemDate(){
        return $this->itemDate;
    }

    public function getItemDisponibility(){
        return $this->itemDisponibility;
    }

    public function getItemQuantity(){
        return $this->itemQuantity;
    }

    //Set Methods:
    public function setItemDestination($itemDestination){
        $this->itemDestination = $itemDestination;
    }

    public function setItemDate($itemDate){
        $this->itemDate = $itemDate;
    }

    public function setItemDisponibility($itemDisponibility){
        $this->itemDisponibility = $itemDisponibility;
    }

    public function setItemQuantity($itemQuantity){
        $this->itemQuantity = $itemQuantity;
    }
}