<?php
// $scriptfile = "main.js";
define("CONSTANT", "Hello world.");
const CON2 = "Hello RCS!";

require_once '../src/util.php';
require '../src/template/head.php';

echo CON2;
echo CONSTANT;
$myname = "Valdis";
$favorite = "potatoes";
$num = 42;
require '../src/template/header.php';
add2(5, 10);
echo "<hr>";
echo "The number is $num and " . CONSTANT;
echo "<hr>";
echo "The number is " . ($num + 10);

echo "<hr>";
echo "Hello my $myname <hr>";
echo 'Hello my $myname';
echo "<hr>";

echo "I am " . $myname . " and I like " . $favorite;
echo "<hr>";
require '../src/template/footer.php';
//we use . not + for string concatenation
//below will not work!
// echo "I am "+$myname+" and I like "+$favorite;
