<?php
require_once "../config/config.php";
require_once "../src/classes/View.php";
require_once "../src/classes/Model.php";

$view = new View();
$model = new Model($config, $view);
$model->getSongs();

//we can get static constant directly from our class blueprints
// echo "My model: " . Model::MODELNAME . "<hr>";
