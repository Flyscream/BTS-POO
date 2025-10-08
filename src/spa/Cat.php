<?php

namespace poo\spa;
use poo\Animal;

class Cat extends Animal {
    
    public function __construct(string $name) {
        parent::__construct($name);
    }

}