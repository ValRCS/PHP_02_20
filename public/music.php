<?php
require_once "../src/classes/Model.php";
$config = [
    "server" => "localhost",
    "db" => "music02",
    "user" => "root",
    "pw" => "",
];

$model = new Model($config);
require_once "../src/template/head.php";
echo "<h1>My Music</h1><hr>";

require "../src/template/footer.php";
