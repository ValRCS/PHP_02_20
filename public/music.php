<?php
require_once "../config/config.php";
require_once "../src/classes/View.php";
require_once "../src/classes/Model.php";

$view = new View();
$model = new Model($config, $view);
require_once "../src/template/head.php";
echo "<h1>My Music</h1><hr>";
//we can get static constant directly from our class blueprints
echo "My model: " . Model::MODELNAME . "<hr>";
$model->getSongs();
require "../src/template/footer.php";
