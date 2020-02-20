<?php
require_once '../src/classes/House.php';
echo "Starting to build my houses!";
$crookedHouse = new House("addf");

$myhouse = new House("Republikas laukums"); //new instance of class House
$myhouse->setAddress("Rupniecības iela 32");
echo "<br>Our address is " . $myhouse->getAddress();
// echo "Wow I got $myhouse->windows windows in my house!";
$myhouse->openWindows();
$secondhouse = new House("Kaleju iela 8"); //another instance from House class blueprint
$secondhouse->openWindows();
$secondhouse->windows = 6;
$secondhouse->openWindows();
$thirdhouse = new House();
$thirdhouse->prettyHouse(5);
