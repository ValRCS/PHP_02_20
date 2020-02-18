<?php
for ($i = 0; $i < 3; $i++) {
    echo "<p id='p$i'>Some Text for P $i</p>";
}
$myfood = ["Bread", "Milk", "Potatoes", "Brocolli"];
var_dump($myfood);
echo "<hr>";

foreach ($myfood as $value) {
    echo "My food is $value";
    //do more stuff
}
