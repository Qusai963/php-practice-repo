<?php
require_once '../App/Dog.php';

use App\Dog;

$dog = new Dog();
echo $dog->makeSound();