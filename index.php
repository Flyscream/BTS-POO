<?php


require __DIR__ . '/vendor/autoload.php';

use poo\spa\Cat;
use poo\spa\Dog;


include 'Animal.php';
include 'Cat.php';
include 'Dog.php';

$myCat = new Cat("truc");
$myCat->setName("truc");
$myCat -> setAge(3); 
$myCat -> setColor("noir"); 

echo "Le nom du chat est : " . $myCat->getName();
echo "\n";
echo "L'age du chat est : " . $myCat->getAge();
echo "\n";
echo "La couleur du chat est : " . $myCat->getColor();
echo "\n";