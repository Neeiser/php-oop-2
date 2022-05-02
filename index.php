<?php

include_once __DIR__ . '/classes/mainClass.php';
include_once __DIR__ . '/classes/foodClass.php';
include_once __DIR__ . '/classes/toyClass.php';
include_once __DIR__ . '/classes/kennelClass.php';

?>

<?php
$product1= new Food('Cats', 'Available', 18, 20, 'Happy Cats', '18-01-2030', 90);
?>


<p><?=$product1->getItemDestination();?></p>
<p><?=$product1->getItemDisponibility();?></p>
<p><?=$product1->getItemQuantity();?> pezzi</p>
<p><?=$product1->getFoodName();?></p>
<p><?=$product1->getFoodExpireDate();?></p>
<p><?=$product1->getFoodWeight();?> kg</p>

<h1>ciao</h1>