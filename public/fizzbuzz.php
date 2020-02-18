<?php
require "../src/template/head.php";
//write Fizzbuzz to show each item as li in an ol
//So loop and then if elseif else inside
echo "<h1>FizzBuzz</h1>";

echo "<div class='container'>";
// echo "<ol>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        // echo "<li>Fizzbuzz</li>";
        echo "<div class='element fizzbuzz'>Fizzbuzz</div>";
    } elseif ($i % 3 == 0) {
        echo "<div class='element fizz'>Fizz</div>";
    } elseif ($i % 5 == 0) {
        echo "<div class='element buzz'>Buzz</div>";
    } else {
        echo "<div class='element number'>No: $i</div>";
    }

}
echo "</div>";
// echo "</ol>";
require "../src/template/footer.php";
