<?php

namespace App;
require_once '../App/Animal.php';

class Dog extends Animal
{

    public function makeSound($sound = 'Woof!'): string // you can add optional arguments
    {
       return $sound;
    }
}