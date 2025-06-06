<?php

require_once 'animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

// Animal instance
echo "<br>";
$sheep = new Animal("shaun");
echo "name: " . $sheep->name . "<br>";
echo "legs: " . $sheep->legs . "<br>";
echo "cold blooded: " . $sheep->cold_blooded . "<br>";

// Frog instance
echo "<br>";
$kodok = new Frog("buduk");
echo "name: " . $kodok->name . "<br>";
echo "legs: " . $kodok->legs . "<br>";
echo "cold blooded: " . $kodok->cold_blooded . "<br>";
echo "Jump: " . $kodok->jump() . "<br>";

// Ape instance
echo "<br>";
$sungokong = new Ape("kera sakti");
echo "name: " . $sungokong->name . "<br>";
echo "legs: " . $sungokong->legs . "<br>";
echo "cold blooded: " . $sungokong->cold_blooded . "<br>";
echo "Yell : " . $sungokong->yell() . "<br>";




