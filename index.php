<?php

// inclure la classe Cat
include "Cat.php";

//instancier de la classe Cat
$cat1 = new Cat();
$cat1 -> setname("truc"); 

echo "mon premiere chat s'appelle :" . $cat1 -> getname();