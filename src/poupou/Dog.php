<?php

namespace poo\poupou;
use poo\Animal;

class Dog extends Animal {
    
    public function __construct(string $name) {
        parent::__construct($name);
    }

}