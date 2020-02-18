<?php
for ($i = 0; $i < 3; $i++) {
    echo "<p id='p$i'>Some Text for P $i</p>";
}
$myfood = ["Bread", "Milk", "Potatoes", "Brocolli"];
var_dump($myfood);
echo "<hr>";

echo "<ol class='mycool-list'>";
foreach ($myfood as $value) {
    echo "<li>My food is $value</li>";
    //do more stuff
}
echo "</ol>";

$a = 5;
if ($a > 10) {
    echo "Bigger than 10";
} elseif ($a > 5) {
    echo "Bigger than 5";
} else {
    echo "Equal of smaller than 5";
}
