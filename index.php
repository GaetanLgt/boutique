<?php

require_once('./src/Vetements.php');
require_once('./src/Chaussures.php');
require_once('./src/Pantalons.php');


$shoes = new Chaussures(70,50,45);
$pants = new Pantalons(45,25,45);

var_dump($shoes);
var_dump($pants);