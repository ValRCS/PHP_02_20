<?php
require_once '../src/util.php';
$myname = "Valdis";
$favorite = "potatoes";
$num = 42;

add2(5, 10);

echo "The number is $num";
echo "<hr>";
echo "The number is " . ($num + 10);

echo "<hr>";
echo "Hello my $myname <hr>";
echo 'Hello my $myname';
echo "<hr>";

echo "I am " . $myname . " and I like " . $favorite;
echo "<hr>";
//we use . not + for string concatenation
//below will not work!
// echo "I am "+$myname+" and I like "+$favorite;
