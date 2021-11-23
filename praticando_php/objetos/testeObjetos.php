<?php


include __DIR__ . "./Car.php";
include __DIR__ . "./Owner.php";

$car = new Car();
$owner = new Owner();

$car->color = "Red";
$car->model = "Civic";

echo "<pre>";
var_dump($car);
echo "</pre>";


$owner->setOwner("Eder");
$owner->setAge("22");
$owner->setOwnerEmail("Teste");


echo '</hr>';
echo "<br>";


echo "O nome digitado foi: {$owner->getOwner()}" . '<br>';
echo "O email digitado foi: {$owner->getOwnerEmail()}" . '<br>';
echo "A idade digitada foi: {$owner->getAge()}";

$car->setModel("Civic");
$car->setColor("Vermelha");


echo "<br>" . "O modelo do carro digitado foi {$car->getModel()}";
echo "<br>" . "A cor do carro digitada foi {$car->getColor()}";


