<?php

// Include the class file
require ('pet.php');

// Instantiate a pet object
$pet1 = new Pet("Blake", "gold");
$pet2 = new Pet("Blake");
$pet3 = new Pet();

// Use getter and setter to change name and color
$pet3->setName("Hansen");
echo "Name is " . $pet3->getName();

$pet3->setColor("Blue");
echo "Color is " . $pet3->getColor();

// Print out var_dump of different pets
echo "<pre>";
var_dump($pet1);
var_dump($pet2);
var_dump($pet3);
echo "<pre>";

// Invoke methods
$pet1->eat();
$pet1->sleep();
$pet1->talk();