<?php

include_once __DIR__ . '/mainClass.php';
class Food extends AnimalProduct
{
    public $foodName;
    public $foodExpireDate;
    public $foodWeight;

    public function __construct($itemDestination, $itemDisponibility, $itemQuantity, $itemPrice, $foodName, $foodExpireDate, $foodWeight)
    {

        parent::__construct($itemDestination, $itemDisponibility, $itemQuantity, $itemPrice);

        $this->foodName = $foodName;
        $this->foodExpireDate = $foodExpireDate;
        $this->foodWeight = $foodWeight;
    }

    //Get Methods:
    public function getFoodName(){
        return $this->foodName;
    }

    public function getFoodExpireDate(){
        return $this->foodExpireDate;
    }

    public function getFoodWeight(){
        return $this->foodWeight;
    }

    //Set Methods:
    public function setFoodName($foodName){
        $this->foodName = $foodName;
    }

    public function setFoodExpireDate($foodExpireDate){
        $this->foodExpireDate = $foodExpireDate;
    }

    public function setFoodWeight($foodWeight){
        $this->foodWeight = $foodWeight;
    }
}
?>

<?php
$product1->setFoodName('Mangime');
$product1->setFoodExpireDate('01-01-2030');
$product1->setFoodWeight(18);
?>


<p><?=$product1->getFoodName();?></p>
<p><?=$product1->getFoodExpireDate();?></p>
<p><?=$product1->getFoodWeight();?>kg</p>