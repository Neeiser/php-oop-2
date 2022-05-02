<?php

class AnimalProduct
{
    public $itemDestination;     //Dogs, Cats, etc.
    public $itemDisponibility;   //Available or not...
    public int $itemQuantity;    //How many items.
    public $itemPrice;           //Price


    //--------------------------
    //Costructor:
    //--------------------------
    public function __construct($itemDestination, $itemDisponibility, $itemQuantity, $itemPrice)
    {
        $this->itemDestination = $itemDestination;
        $this->itemDisponibility = $itemDisponibility;
        $this->itemQuantity = $itemQuantity;
        $this->itemPrice = $itemPrice;
    }


    //--------------------------
    //Get Methods:
    //--------------------------
    public function getItemDestination(){
        return $this->itemDestination;
    }

    public function getItemDisponibility(){
        return $this->itemDisponibility;
    }

    public function getItemQuantity(){
        return $this->itemQuantity;
    }


    //--------------------------
    //Set Methods:
    //--------------------------
    public function setItemDestination($itemDestination){
        $this->itemDestination = $itemDestination;
    }

    public function setItemDisponibility($itemDisponibility){
        $this->itemDisponibility = $itemDisponibility;
    }

    public function setItemQuantity($itemQuantity){
        $this->itemQuantity = $itemQuantity;
    }
}
?>

