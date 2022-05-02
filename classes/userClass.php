<?php

class User extends AnimalProduct
{
    public $userName;
    public $userSurname;
    public $userAge;
    public $userRegistered = false;
    public $userDiscount = 0;

    //--------------------------
    //Costructor:
    //--------------------------
    public function __construct($userName, $userSurname, $userAge)
    {
        $this->userName = $userName;
        $this->userSurname = $userSurname;
        $this->userAge = $userAge;
    }

    public function isRegistered($registered){
        if ($registered == true) {
            return $this->userRegistered = true;
        }
    }

    public function setDiscount(){
        if ($this->userRegistered == true) {
            return $this->discount = 20;
        }
    }
}
?>