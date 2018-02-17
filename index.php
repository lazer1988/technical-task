<?php

require_once './vendor/autoload.php';

use Zoo\Zoo;
use Zoo\Animal\Bird\Crow;
use Zoo\Animal\Bird\Sparrow;
use Zoo\Animal\Dog\Boxer;
use Zoo\Animal\Dog\Bulldog;
use Zoo\Animal\Fish\Crucian;
use Zoo\Animal\Fish\Pike;
use Zoo\Animal\Monkey\Chimpanzee;
use Zoo\Animal\Monkey\Gorilla;
use Zoo\Stuff\Manager;
use Zoo\Stuff\Cleaner;

// add animals to zoo
$animals = new Zoo();
$animals
    ->addUnit(new Crow())
    ->addUnit(new Sparrow())
    ->addUnit(new Boxer())
    ->addUnit(new Bulldog())
    ->addUnit(new Crucian())
    ->addUnit(new Pike())
    ->addUnit(new Chimpanzee())
    ->addUnit(new Gorilla())
;

// add stuff to zoo
$stuff = new Zoo();
$stuff
    ->addUnit(new Manager())
    ->addUnit(new Cleaner())
;

// create zoo
$zoo = new Zoo();
$zoo
    ->addUnit($stuff)
    ->addUnit($animals)
;

$zoo->behavior();
