<?php

include_once __DIR__ . '/classes/mainClass.php';
include_once __DIR__ . '/classes/foodClass.php';
include_once __DIR__ . '/classes/toyClass.php';
include_once __DIR__ . '/classes/kennelClass.php';
include_once __DIR__ . '/classes/userClass.php';

?>

<?php
$foodProduct1= new Food('Cats', 'Available', 18, 10, 'Happy Cats', '18-01-2030', 90);
$toyProduct1= new Toy('Bird', 'Out of Stock', 0, 35, 'The Bird Butcherer', 'Tungsten', '120x31x80');
$kennelProduct1= new Kennel('Dog', 'Available', 2, 100, 'Dog\'s life', 'Leather', '120x31x80');

$userRegistered1= new User('Sandro', 'Pertini', 28);
$userRegistered1->isRegistered(true);
if ($userRegistered1->userRegistered == true){

    $userRegistered1->setDiscount();

    $userDiscountValue = $foodProduct1->itemPrice * $userRegistered1->userDiscount / 100;
    $userFoodPrice = $foodProduct1->itemPrice - $userDiscountValue;
    $userToyPrice = $toyProduct1->itemPrice - $userDiscountValue;
    $userKennelPrice = $kennelProduct1->itemPrice - $userDiscountValue;

}

?>

<main>
    <div>
        <h1 class="test-1">USER REGISTERED</h1>
        <h1>Food Product:</h1>
        <p><strong>Animal: </strong><?=$foodProduct1->getItemDestination();?></p>
        <p><strong>Stock: </strong><?=$foodProduct1->getItemDisponibility();?></p>
        <p><strong>Quantity: </strong><?=$foodProduct1->getItemQuantity();?> pezzi</p>
        <p><strong>Name: </strong><?=$foodProduct1->getFoodName();?></p>
        <p><strong>Expiration: </strong><?=$foodProduct1->getFoodExpireDate();?></p>
        <p><strong>Weight: </strong><?=$foodProduct1->getFoodWeight();?> kg</p>
        <p>PREZZO: <?=$foodProduct1->getItemPrice();?> €</p>
        <p>PREZZO TOTALE: <?=$userFoodPrice?> €</p>
    </div>
    
    <div>
        <h1 class="test-1">USER REGISTERED</h1>
        <h1>Toy Product:</h1>
        <p><strong>Animal: </strong><?=$toyProduct1->getItemDestination();?></p>
        <p><strong>Stock: </strong><?=$toyProduct1->getItemDisponibility();?></p>
        <p><strong>Quantity: </strong><?=$toyProduct1->getItemQuantity();?> pezzi</p>
        <p><strong>Name: </strong><?=$toyProduct1->getToyName();?></p>
        <p><strong>Materials: </strong><?=$toyProduct1->getToyMaterial();?></p>
        <p><strong>Dimension: </strong><?=$toyProduct1->getToyDimension();?></p>
        <p>PREZZO: <?=$toyProduct1->getItemPrice();?> €</p>
        <p>PREZZO TOTALE: <?=$userToyPrice?> €</p>
    </div>

    <div>
        <h1 class="test-1">USER REGISTERED</h1>
        <h1>Kennel Product:</h1>
        <p><strong>Animal: </strong><?=$kennelProduct1->getItemDestination();?></p>
        <p><strong>Stock: </strong><?=$kennelProduct1->getItemDisponibility();?></p>
        <p><strong>Quantity: </strong><?=$kennelProduct1->getItemQuantity();?> pezzi</p>
        <p><strong>Name: </strong><?=$kennelProduct1->getKennelName();?></p>
        <p><strong>Materials: </strong><?=$kennelProduct1->getKennelMaterial();?></p>
        <p><strong>Dimension: </strong><?=$kennelProduct1->getKennelDimension();?></p>
        <p>PREZZO: <?=$kennelProduct1->getItemPrice();?> €</p>
        <p>PREZZO TOTALE: <?=$userKennelPrice?> €</p>
    </div>

    <div>
        <h1 class="test-2">USER NOT REGISTERED</h1>
        <h1>Food Product:</h1>
        <p><strong>Animal: </strong><?=$foodProduct1->getItemDestination();?></p>
        <p><strong>Stock: </strong><?=$foodProduct1->getItemDisponibility();?></p>
        <p><strong>Quantity: </strong><?=$foodProduct1->getItemQuantity();?> pezzi</p>
        <p><strong>Name: </strong><?=$foodProduct1->getFoodName();?></p>
        <p><strong>Expiration: </strong><?=$foodProduct1->getFoodExpireDate();?></p>
        <p><strong>Weight: </strong><?=$foodProduct1->getFoodWeight();?> kg</p>
        <p>PREZZO: <?=$foodProduct1->getItemPrice();?> €</p>
        <p>PREZZO TOTALE: <?=$foodProduct1->getItemPrice();?> €</p>
        <small>Register for 20% checkout discount!</small>
    </div>
    
    <div>
        <h1 class="test-2">USER NOT REGISTERED</h1>
        <h1>Toy Product:</h1>
        <p><strong>Animal: </strong><?=$toyProduct1->getItemDestination();?></p>
        <p><strong>Stock: </strong><?=$toyProduct1->getItemDisponibility();?></p>
        <p><strong>Quantity: </strong><?=$toyProduct1->getItemQuantity();?> pezzi</p>
        <p><strong>Name: </strong><?=$toyProduct1->getToyName();?></p>
        <p><strong>Materials: </strong><?=$toyProduct1->getToyMaterial();?></p>
        <p><strong>Dimension: </strong><?=$toyProduct1->getToyDimension();?></p>
        <p>PREZZO: <?=$toyProduct1->getItemPrice();?> €</p>
        <p>PREZZO TOTALE: <?=$toyProduct1->getItemPrice();?> €</p>
        <small>Register for 20% checkout discount!</small>
    </div>

    <div>
        <h1 class="test-2">USER NOT REGISTERED</h1>
        <h1>Kennel Product:</h1>
        <p><strong>Animal: </strong><?=$kennelProduct1->getItemDestination();?></p>
        <p><strong>Stock: </strong><?=$kennelProduct1->getItemDisponibility();?></p>
        <p><strong>Quantity: </strong><?=$kennelProduct1->getItemQuantity();?> pezzi</p>
        <p><strong>Name: </strong><?=$kennelProduct1->getKennelName();?></p>
        <p><strong>Materials: </strong><?=$kennelProduct1->getKennelMaterial();?></p>
        <p><strong>Dimension: </strong><?=$kennelProduct1->getKennelDimension();?></p>
        <p>PREZZO: <?=$kennelProduct1->getItemPrice();?> €</p>
        <p>PREZZO TOTALE: <?=$kennelProduct1->getItemPrice();?> €</p>
        <small>Register for 20% checkout discount!</small>
    </div>
    
</main>

<style>
    *{
        font-family: Arial, Helvetica, sans-serif;
    }

    main{
        display: flex;
        flex-wrap: wrap;
        width: 1400px;
    }
    div{
        display: flex;
        flex-direction: column;
        border: 2px solid black;
        width: 350px;
        padding: 30px;
        margin: 20px;
    }
    p{
        height: 10px;
    }

    .test-1{
        color: lightgreen;
        font-size: 1rem;
    }
    .test-2{
        color: lightcoral;
        font-size: 1rem;
    }
</style>