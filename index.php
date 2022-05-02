<?php

include_once __DIR__ . '/classes/mainClass.php';
include_once __DIR__ . '/classes/foodClass.php';
include_once __DIR__ . '/classes/toyClass.php';
include_once __DIR__ . '/classes/kennelClass.php';

?>

<?php
$foodProduct1= new Food('Cats', 'Available', 18, 999, 'Happy Cats', '18-01-2030', 90);
$toyProduct1= new Toy('Bird', 'Out of Stock', 0, 999, 'The Bird Butcherer', 'Tungsten', '120x31x80');
$kennelProduct1= new Kennel('Dog', 'Available', 2, 999, 'Dog\'s life', 'Leather', '120x31x80');
?>

<main>
    <div>
        <h1>Food Product:</h1>
        <p><strong>Animal: </strong><?=$foodProduct1->getItemDestination();?></p>
        <p><strong>Stock: </strong><?=$foodProduct1->getItemDisponibility();?></p>
        <p><strong>Quantity: </strong><?=$foodProduct1->getItemQuantity();?> pezzi</p>
        <p><strong>Name: </strong><?=$foodProduct1->getFoodName();?></p>
        <p><strong>Expiration: </strong><?=$foodProduct1->getFoodExpireDate();?></p>
        <p><strong>Weight: </strong><?=$foodProduct1->getFoodWeight();?> kg</p>
        <p>PREZZO:</p>
        <p>PREZZO TOTALE:</p>
    </div>
    
    <div>
        <h1>Toy Product:</h1>
        <p><strong>Animal: </strong><?=$toyProduct1->getItemDestination();?></p>
        <p><strong>Stock: </strong><?=$toyProduct1->getItemDisponibility();?></p>
        <p><strong>Quantity: </strong><?=$toyProduct1->getItemQuantity();?> pezzi</p>
        <p><strong>Name: </strong><?=$toyProduct1->getToyName();?></p>
        <p><strong>Materials: </strong><?=$toyProduct1->getToyMaterial();?></p>
        <p><strong>Dimension: </strong><?=$toyProduct1->getToyDimension();?></p>
    </div>

    <div>
        <h1>Kennel Product:</h1>
        <p><strong>Animal: </strong><?=$kennelProduct1->getItemDestination();?></p>
        <p><strong>Stock: </strong><?=$kennelProduct1->getItemDisponibility();?></p>
        <p><strong>Quantity: </strong><?=$kennelProduct1->getItemQuantity();?> pezzi</p>
        <p><strong>Name: </strong><?=$kennelProduct1->getKennelName();?></p>
        <p><strong>Materials: </strong><?=$kennelProduct1->getKennelMaterial();?></p>
        <p><strong>Dimension: </strong><?=$kennelProduct1->getKennelDimension();?></p>
    </div>
    
</main>

<style>
    *{
        font-family: Arial, Helvetica, sans-serif;
    }

    main{
        display: flex;
    }
    div{
        display: flex;
        flex-direction: column;
        border: 2px solid black;
        width: 250px;
        padding: 30px;
        margin: 20px;
    }
    p{
        height: 10px;
    }
</style>