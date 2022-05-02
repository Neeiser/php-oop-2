<?php

include_once __DIR__ . '/classes/foodClass.php';
include_once __DIR__ . '/classes/toyClass.php';
include_once __DIR__ . '/classes/kennelClass.php';

class AnimalProduct
{
    protected $itemDestination;     //Dogs, Cats, etc.
    protected $itemDisponibility;   //Available or not...
    protected int $itemQuantity;    //How many items.
    protected $itemPrice;           //Price

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

    public function setItemDisponibility($itemDisponibility){
        $this->itemDisponibility = $itemDisponibility;
    }

    public function setItemQuantity($itemQuantity){
        $this->itemQuantity = $itemQuantity;
    }
}
?>

<?php
$product1 = new AnimalProduct('Birds','Available', 38);
?>

<p><?=$product1->getItemDestination();?></p>
<p><?=$product1->getItemDisponibility();?></p>
<p><?=$product1->getItemQuantity();?></p>
