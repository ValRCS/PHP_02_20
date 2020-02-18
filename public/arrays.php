<?php
echo "<h1>Arrays</h1>";
$myarr = [1, 2, 5, 3, 32, 6, 6, 7, 7];
foreach ($myarr as $val) {
    echo "Number is $val<br>";
}

foreach ($myarr as $key => $val) {
    echo "Key: $key is $val<br>";
}

$cars = [
    "BMW" => 525,
    "VW" => "Golf",
    "Lada" => "2001",

];
foreach ($cars as $key => $val) {
    echo "Key: $key is $val<br>";
}
$cars["Citreon"] = "C9";
var_dump($cars);
$cars[5] = "Just a number";
var_dump($cars);
echo "<hr>";
$myarr["myname"] = "Valdis";
var_dump($myarr);
