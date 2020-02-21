<?php
// $scriptfile = "main.js";
define("CONSTANT", "Hello world.");
const CON2 = "Hello RCS!";
$myname = "Valdis";
$favorite = "potatoes";
$num = 42;
$mybigstring = <<<MYBIG
<p>More stuff</p>
<p>More stuff</p>
<p>More stuff for $myname</p>
MYBIG;

require_once '../src/util.php';
require '../src/template/head.php';

echo CON2;
echo CONSTANT;

require '../src/template/header.php';
echo $mybigstring;

var_dump($num);
echo "<br>";
print_r($num);
echo "<br>";
var_dump($myname);
echo "<br>";
print_r($num);

add2(5, 10);
echo "<hr>";
echo "The number is $num and " . CONSTANT;
echo "<hr>";
echo "The number is " . ($num + 10);
echo '<br> $myvar is visible and printed';
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
